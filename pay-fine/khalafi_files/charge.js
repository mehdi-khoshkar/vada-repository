$(".shop").append("<div id=\"android-app\"><a target=\"_blank\" href=\"https://etore.me/apps/android/etore.apk\" title=\"نرم افزار خرید شارژ\"><img src=\"/images/etoreApp.jpg\"></a></div>");
$(".shop").append("<div id=\"etorebot\"><a target=\"_blank\" href=\"https://telegram.me/etoreBot\" title=\"ربات خرید شارژ\"><img src=\"/images/etorebot.jpg\"></a></div>");
jQuery(document).ready(function ($) {
	var FineInquiry = function () {
		this.initStep = "one";
		this.currentStep;
		this.id;
		this.fines;
	}
	FineInquiry.prototype.init = function () {
		this.changeStep(this.initStep);
		this.setEvents();
	};
	FineInquiry.prototype.send = function () {
		this.printMessage();
		if (this.currentStep == "one") {
			this.sendBarcode();
		}
		if (this.currentStep == "two") {
			this.sendCaptcha();
		}
		if(this.currentStep == "four") {
			this.pay();
		}
	};
	FineInquiry.prototype.changeStep = function (step) {
		var _this = this;
		this.currentStep = step;
		$(".fine-step").css("display", "none");
		$(".fine-step." + step).css("display", "block");
		if(step == "one"){
			$("body").animate({
				scrollTop: $(".fine-step.one .input").offset().top
			});
			$("#barcode").focus();
		}
		if(step == "two"){
			this.reloadCaptcha();
			$("body").animate({
				scrollTop: $(".fine-step.two .fine-guide").offset().top
			});
			$("#captcha").focus();
		}

		if(step == "tree"){
			$("body").animate({
				scrollTop: $("#fines-list").offset().top-5
			});
		}

		if(step == "four"){
			$("body").animate({
				scrollTop: $("#user-info").offset().top-5
			});
			$("#user-info input:first-child").focus();
		}

		if(step == "tree" || step == "four"){
			$(".fine-inquiry .submit").text("استعلام مجدد");
		}else{
			$(".fine-inquiry .submit").text("استعلام");
		}

		if(step == "tree"){
			$(".buttons .print").css("display","block");
		}else{
			$(".buttons .print").css("display","none");
		}
	};
	FineInquiry.prototype.setEvents = function () {
		var _this = this;
		$(".fine-inquiry .submit").unbind().click(function () {
			if(_this.currentStep == "tree" || _this.currentStep == "four"){
				_this.reset(true);
			}
			_this.send();
		});
		$(".fine-inquiry .cancle").unbind().click(function () {
			if(_this.currentStep == "four")
				return _this.changeStep("tree");
			_this.reset();
			return _this.changeStep("one");
		});
		$(".show-fine-details, .fine-digest td:nth-child(2), .fine-digest td:nth-child(3)").unbind().click(function () {
			var index = $(this).parent().data("id");
			$(`.fine-digest[data-id=${index}] .show-fine-details`).toggleClass("fa-chevron-down").toggleClass("fa-chevron-up");
			$(`.fine-details[data-id="${index}"]`).toggleClass("appear");
		});
		$(".pay-fine-button").unbind().on("click", function () {
			_this.changeStep("four");
			var i = $(this).parent().data("id");
			var $tbody = $("<tbody></tbody>");
			$tbody.append($(`<tr><td>نوع</td><td>${_this.fines[i].type}</td></tr>`));
			$tbody.append($(`<tr><td>مبلغ</td><td>${addCommas(_this.fines[i].amount)} تومان</td></tr>`));
			$tbody.append($(`<tr><td>محل تخلف</td><td>${_this.fines[i].position}</td></tr>`));
			$tbody.append($(`<tr><td>شهر</td><td>${_this.fines[i].city}</td></tr>`));
			$tbody.append($(`<tr><td>تاریخ و ساعت</td><td>${_this.fines[i].date}</td></tr>`));
			$tbody.append($(`<tr><td>پلاک</td><td>${_this.fines[i].plaque}</td></tr>`));
			$tbody.append($(`<tr><td>کد تخلف</td><td>${_this.fines[i].code}</td></tr>`));
			$tbody.append($(`<tr><td>سریال</td><td>${_this.fines[i].serial}</td></tr>`));
			$tbody.append($(`<tr><td>بارکد</td><td>${_this.fines[i].barcode}</td></tr>`));
			$tbody.append($(`<tr><td>پلاک</td><td>${_this.fines[i].plaque}</td></tr>`));
			$tbody.append($(`<tr><td>شناسه قبض</td><td>${removeZeroes(_this.fines[i].billid)}</td></tr>`));
			$tbody.append($(`<tr><td>شناسه پرداخت</td><td>${removeZeroes(_this.fines[i].paymentid)}</td></tr>`));
			$(".fine-step.four table").html($tbody);
			$("#fine-billid").val(_this.fines[i].billid);
			$("#fine-paymentid").val(_this.fines[i].paymentid);
		});
		$("#user-info span").unbind().on("click", function () {
			_this.send();
		});
		$(".fine-inquiry .print").unbind().on("click", function () {
			window.print();
		});
		$("#reloadCaptcha").unbind().on("click", function () {
			$("#captcha").val("")
			return _this.reloadCaptcha();
		});
	};
	FineInquiry.prototype.sendBarcode = function () {
		var _this = this;
		if(!$("#barcode").val().match(/^\d{8}$/))
			return this.printMessage("error", "کد وارد شده اشتباه می باشد.")
		this.loading();
		$.ajax({
			url: "/api/inquiry.php",
			data:{
				type: "offense",
				action: "send_barcode",
				barcode: $("#barcode").val()
			},
			type: "POST",
			dataType: "json"
		}).done(function (data) {
			_this.loading();
			if(data.status != "success"){
				_this.printMessage("error", data.message);
				return _this.reset();
			}
			_this.id = data.id;
			_this.changeStep("two");
			//_this.changeStep("tree");
			//_this.fines = data.fines;
			//_this.renderFines();
		}).fail(function () {
			_this.loading();
			_this.printMessage("error", "خطای پیش بینی نشده!");
		})
	};
	FineInquiry.prototype.sendCaptcha = function () {
		var _this = this;
		if(!$("#captcha").val().match(/^(\w|\d){5}$/i))
			return this.printMessage("error", "کد وارد شده اشتباه می باشد.")
		this.loading()
		$.ajax({
			url: "/api/inquiry.php",
			data:{
				type: "offense",
				action: "send_captcha",
				id: this.id,
				barcode: $("#captcha").val()
			},
			type: "POST",
			dataType: "json"
		}).done(function (data) {
			_this.loading();
			if(data.status == "error"){
				if(data.message == "متن درون تصویر اشتباه وارد شده است."){
					_this.printMessage("error", data.message);
					$("#captcha").val("")
					return _this.reloadCaptcha();
				}
				_this.changeStep("one");
				_this.reset();
				return _this.printMessage("error", data.message);
			}
			_this.fines = data.fines;
			_this.renderFines();
		}).fail(function () {
			_this.loading();
			_this.printMessage("error", "خطای پیش بینی نشده!");
		})
	};
	FineInquiry.prototype.pay = function () {
		var _this = this;
		this.loading();
		if(!$("#user-info input").val().match(/^09(\d){9}$/)){
			this.printMessage("error", "شماره موبایل وارد شده صحیح نمی باشد.");
			return this.loading();
		}
		if(!$("#fine-paymentid").val().match(/^(\d)*$/) || !$("#fine-billid").val().match(/^(\d)*$/)){
			this.printMessage("error", "اطلاعات وارد شده ناقص می باشد.");
			return this.loading();
		}
		$.ajax({
			dataType: 'json',
			type: 'post',
			url: '/api/inquiry.php',
			data: {
				type: 'offense',
				action: 'pay',
				mobile: $("#user-info input").val(),
				paymentid: $("#fine-paymentid").val(),
				billid: $("#fine-billid").val()
			}
		}).done(function (result) {
			_this.loading();
			if(result.status == "Error"){
				return _this.printMessage("error", result.errorMessage);
			}
			window.location.replace(result.paymentInfo.url);
		}).fail(function () {
			_this.loading();
			_this.printMessage("error", "خطای پیش بینی نشده!");
		})
	}
	FineInquiry.prototype.reset = function (flag) {
		$("#barcode").val("");
		$("#captcha").val("");
		$("table#fines-list tbody").html("");
		$("table#fines-summary tbody").html("");
		$(".fine-step.two img").remove();
		$(".fine-step.four table").html("");
		$("#print-table").html("");
		if(flag){
			this.changeStep(this.initStep);
			this.fines = [];
			this.id = "";
			$("#user-info input").val("");
		}
	};
	FineInquiry.prototype.printMessage = function (type, message) {
		var $el = $(".result");
		if(type === undefined && message === undefined)
			$el.css("display","none").find("p").removeClass().text("");
		$el.css("display","block").find("p").removeClass().addClass(type).text(message);
	};
	FineInquiry.prototype.loading = function () {
		$("body").animate({
				scrollTop: $(".loading-overlay").offset().top
		});
		$(".loading-overlay").toggleClass("visible");
	};
	FineInquiry.prototype.reloadCaptcha = function () {
		var _this = this;
		this.loading();
		var d = new Date();
		$(".fine-step.two .captcha-wrapper .captcha-content img").remove();
		$(".fine-step.two .captcha-wrapper .captcha-content").html(`<img src="/api/captcha.php?${d.getTime()}&type=offense&id=${this.id}" alt="متن تصویر را وارد کنید.">`);
		$(".fine-step.two .captcha-wrapper .captcha-content img").on("load", function () {
			_this.loading();
		});
		$(".fine-step.two .captcha-wrapper .captcha-content img").on("error", function () {
			_this.loading();
		})
	};
	FineInquiry.prototype.renderFines = function () {
		this.changeStep("tree");
		var $table = $("table#fines-list")
		var amountAllFines = 0;
		var fineCount = 0;
		for (var i = 0; i < this.fines.length; i++) {
			if(!this.fines[i].paymentInfo.tranId){
				amountAllFines += Number(this.fines[i].amount);
				fineCount++;
				var $tr = $(`<tr class="fine-digest" data-id="${i}"></tr>`);
				$tr.append($('<td class="fine-id"></td>').text(fineCount + "."));
				$tr.append($('<td class="ellipsis"></td>').text(this.fines[i].type));
				$tr.append($("<td></td>").text(addCommas(this.fines[i].amount) + ' تومان'));
				$tr.append($(`<td class="pay-fine-button">پرداخت</td>`));
				$tr.append($(`<td class="fa fa-chevron-down show-fine-details"></td>`));
				$table.find("tbody.main").append($tr);
				var $details = $(`<tr class="fine-details" data-id="${i}"></tr>`);
				$details.append($('<td colspan="5"><table><tbody></tbody></table></td>'));
				$details.find("tbody").append($(`<tr><td>نوع</td><td>${this.fines[i].type}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>مبلغ</td><td>${addCommas(this.fines[i].amount)} تومان</td></tr>`));
				$details.find("tbody").append($(`<tr><td>محل تخلف</td><td>${this.fines[i].position}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>کد تخلف</td><td>${this.fines[i].code}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>شهر</td><td>${this.fines[i].city}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>تاریخ و ساعت</td><td>${this.fines[i].date}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>پلاک</td><td>${this.fines[i].plaque}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>سریال</td><td>${this.fines[i].serial}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>بارکد</td><td>${this.fines[i].barcode}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>پلاک</td><td>${this.fines[i].plaque}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>شناسه قبض</td><td>${removeZeroes(this.fines[i].billid)}</td></tr>`));
				$details.find("tbody").append($(`<tr><td>شناسه پرداخت</td><td>${removeZeroes(this.fines[i].paymentid)}</td></tr>`));
				
				$table.find("tbody.main").append($details);
				var $printTable = $("<table><tbody></tbody></table>")
				$printTable.find("tbody").append('<tr><th colspan="3">نوع تخلف</th><th>کد</th><th colspan="2">مبلغ جریمه</th><th>شناسه پرداخت</th><th>شناسه قبض</th></tr>');
				var $printAreaTr = $("<tr></tr>");
				$printAreaTr.append($(`<td class="ellipsis" colspan="3">${this.fines[i].type}</td>`));
				$printAreaTr.append($(`<td>${this.fines[i].code}</td>`));
				$printAreaTr.append($(`<td colspan="2">${addCommas(this.fines[i].amount)} تومان</td>`));
				$printAreaTr.append($(`<td>${removeZeroes(this.fines[i].paymentid)}</td>`));
				$printAreaTr.append($(`<td>${removeZeroes(this.fines[i].billid)}</td>`));
				$printTable.find("tbody").append($printAreaTr);
				$printTable.find("tbody").append('<tr><th colspan="2">محل</th><th>شهر</th><th colspan="2">تاریخ</th><th colspan="2">شماره پلاک</th><th>سریال</th></tr>');
				var $printAreaTr = $("<tr></tr>");
				$printAreaTr.append($(`<td colspan="2">${this.fines[i].position}</td>`));
				$printAreaTr.append($(`<td>${this.fines[i].city}</td>`));
				$printAreaTr.append($(`<td colspan="2">${this.fines[i].date}</td>`));
				$printAreaTr.append($(`<td colspan="2">${this.fines[i].plaque}</td>`));
				$printAreaTr.append($(`<td>${this.fines[i].serial}</td>`));
				$printTable.find("tbody").append($printAreaTr);
				$("#print-table").append($printTable);
			}
		}
		var $tr = $(`<tr></tr>`);
		$tr.append($(`<td>${fineCount}</td>`));
		$tr.append($(`<td>${addCommas(amountAllFines)} تومان</td>`));
		var emoji;
		if(this.fines.length >= 20)
			emoji = "😲";
		else if(this.fines.length >= 15)
			emoji = "😨";
		else if(this.fines.length >= 10)
			emoji = "😩";
		else if(this.fines.length >= 5)
			emoji = "😌"
		else if(this.fines.length >= 1)
			emoji = "😏"
		$tr.append($(`<td style="border: none;font-size: 22px;padding-top: 7px;">${emoji}</td>`));
		$("#fines-summary").find("tbody").append($tr);
		var $printTable = $("<table><tbody></tbody></table>");
		$printTable.find("tbody").append('<tr><th>تعداد جرایم</th><th>مبلغ کل</th><th>بارکد کارت خودرو</th><th>شماره پلاک</th></tr>');
		var $printAreaTr = $("<tr></tr>");
		$printAreaTr.append($(`<td>${fineCount}</td>`));
		$printAreaTr.append($(`<td>${addCommas(amountAllFines)} تومان</td>`));
		$printAreaTr.append($(`<td>${this.fines[0].barcode}</td>`));
		$printAreaTr.append($(`<td>${this.fines[0].plaque}</td>`));
		$printTable.find("tbody").append($printAreaTr);
		$("#print-table").prepend($printTable);
		this.setEvents();
	};
	function addCommas(input) {
		var input = input.toString();
		return input.toString().substring(0,input.length-1).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	function ChargeWidget() {
		this.chargeType = 'topup';
		this.operator = '';
		this.slider;
		this.amazing = false;
	}
	ChargeWidget.prototype.init = function() {
		var _this = this;
		this.changeChargeType(this.chargeType);
		this.initSlider();
		this.changeAmazing(false);
		$(".w-charge-type-item").click(function () {
			_this.changeChargeType($(this).data('type'));
		})
		$(".w-operator-item").click(function () {
			_this.changeOperator($(this).data('operator'));
		})
		$(".w-options").click(function () {
			_this.changeAmazing();
		})
		$(".w-pay").click(function () {
			_this.showFactor();
		});
		$(".w-factor-back").click(function () {
			$(".w-factor").css("display", "none");
			$(".w-info").css("display", "block");
		});
		$(".w-factor-pay").click(function () {
			_this.pay();
		});
		$("#w-cellphone").keydown(function () {
			_this.printMessage();
		})
		$("#w-cellphone").change(function () {
			_this.printMessage();
		});
		$("w-factor-pay").click(function () {
			_this.pay();
		})
	}

	ChargeWidget.prototype.changeChargeType = function(type) {
		this.chargeType = type;
		this.changeAmazing(false);
		this.initSlider();
		$(".w-charge-type-item").removeClass("selected");
		$(`.w-charge-type-item[data-type='${type}']`).addClass("selected");
		if(this.chargeType == 'topup'){
			$(`.w-operator-item[data-operator='tal']`).css('visibility','hidden');
		}else{
			$(`.w-operator-item[data-operator='tal']`).css('visibility','visible');
		}
	}

	ChargeWidget.prototype.changeOperator = function(op) {
		this.operator = op;
		$('.w-operator-item').removeClass("selected");
		$(`.w-operator-item[data-operator='${op}']`).addClass('selected');
		this.initSlider();
		this.changeAmazing(false);
		this.printMessage();
	}

	ChargeWidget.prototype.initSlider = function() {
		if(!this.operator){
			$("#w-amount-slider").ionRangeSlider({
				type: 'single',
				postfix: " تومان",
				prettify: false,
			});
			this.slider = $("#w-amount-slider").data("ionRangeSlider");
			return;
		}
		$('.w-amount').css('display','block');

		if(this.chargeType == 'pin'){
			$(".w-count").css('display','block');
			$("#w-count-slider").ionRangeSlider({
				min: 1,
				max: 5,
				step: 1,
				from: 1,
				type: 'single',
				postfix: " عدد",
				prettify: false,
			})
		}else{
			$(".w-count").css('display','none');
		}

		if(this.operator == 'mtn' && this.chargeType == 'topup'){
			this.slider.update({
				min: 500,
				max: 100000,
				step: 500,
				from: 0,
				values:[]
			});
		}
		if((this.operator == 'mci' || this.operator == 'rtl') && this.chargeType == 'topup'){
			this.slider.update({
				values: [1000, 2000, 5000, 10000, 20000],
				from: 0,
			});
		}

		if((this.operator == 'mtn' || this.operator == 'mci') && this.chargeType == 'pin'){
			this.slider.update({
				values: [1000, 2000, 5000, 10000, 20000],
				from: 0,
			});
		}

		if((this.operator == 'rtl' || this.operator == 'tal') && this.chargeType == 'pin'){
			this.slider.update({
				values: [2000, 5000, 10000, 20000],
				from: 0,
			});
		}
	}

	ChargeWidget.prototype.changeAmazing = function(am) {
		// if "am" not defined then user has clicked on w-options
		am !== undefined ? this.amazing = am : this.amazing = !this.amazing;
		if(this.operator == 'mtn' && this.chargeType == 'topup'){
			$(".w-options").css('display', 'block');
			$(".w-options span").text("شگفت انگیز");
			this.amazing ? $(".w-options").addClass("selected") : $(".w-options").removeClass('selected');
		}

		else if(this.operator == 'rtl' && this.chargeType == 'topup'){
			$(".w-options").css('display', 'block');
			$(".w-options span").text("شور انگیز");
			this.amazing ? $(".w-options").addClass("selected") : $(".w-options").removeClass('selected');
		} 

		else{
			$(".w-options").css('display', 'none');
		}
	}

	ChargeWidget.prototype.showFactor = function() {
		var count = $("#w-count-slider").val();
		var amount = $("#w-amount-slider").val();
		var cellphone = $("#w-cellphone").val();
		if(cellphone.length != 11 || isNaN(cellphone) || cellphone.substring(0, 2) != "09"){
			return this.printMessage({type: 'error', message: 'شماره موبایل صحیح نمی‌باشد.'});
		}
		if(this.operator == ''){
			return this.printMessage({type: 'error', message: 'لطفاً اپراتور را انتخاب نمایید.'});
		}
		var translate = {
			operator: {tal: 'تالیا', mtn: 'ایرانسل',mci: 'همراه اول', rtl: 'رایتل'},
			type: {pin: 'کارت شارژ', topup: 'شارژ مستقیم'},
			amazing: {rtl: 'شور انگیز', mtn: 'شگفت انگیز'}
		};
		$(".w-info").css("display", "none");
		$(".w-factor").css("display", "block");
		$(".w-factor-title").text(`خرید ${translate.type[this.chargeType]} ${translate.operator[this.operator]}`);
		$(".w-factor-cellphone").text(`شماره موبایل: ${$("#w-cellphone").val()}`);
		$(".w-factor-unit-price").text(`مبلغ شارژ: ${addCommas2(amount)} تومان`);
		if(this.chargeType == "topup" && this.changeAmazing && (this.operator == 'mtn' || this.operator =='rtl'))
			$(".w-factor-amazing").text(`نوع شارژ: ${translate.amazing[this.operator]}`).css("display","block");
		else
			$(".w-factor-amazing").text("").css("display","none");
		
		if(this.chargeType == 'pin')
			$(".w-factor-count").text(`تعداد کارت شارژ: ${count} عدد`).css("display","block");
		else
			$(".w-factor-count").text("").css("display","none");

		if(this.chargeType == 'pin')
			$(".w-factor-amount").text(`مبلغ کلی: ${addCommas2(count * amount)} تومان`)
		else
			$(".w-factor-amount").text(`مبلغ کلی: ${addCommas2(amount)} تومان`)
		$(window).scrollTop($(".charge-widget").offset().top);
	}

	ChargeWidget.prototype.printMessage = function(obj) {
		if(obj && obj.type == 'error'){
			$(".w-message").addClass("show error").find("span:last-child").text(obj.message);
		}
		if(obj && obj.type == 'success')
			$(".w-message").removeClass("show error").addClass("show").find("span:last-child").text(obj.message);
		if(obj === undefined){
			$(".w-message").removeClass("show error").find("span:last-child").text("");
		}
	}

	ChargeWidget.prototype.pay = function() {
		var _this = this;
		if(this.chargeType == 'topup'){
			this.printMessage({type: 'success', message: 'در حال ارسال اطلاعات ...'});
			$.ajax({
				url: 'https://etore.me/api/charge.php',
				type: 'post',
				dataType: 'json',
				data: {
					cellphone: $("#w-cellphone").val(),
					amount: $("#w-amount-slider").val(),
					type: this.returnType(),
					action: 'topup'
				}
			}).done(function (data) {
				if(!data)
					return _this.printMessage({type: 'error', message: 'خطا رخ داده است. مجدداً سعی نمایید.'})
				if(data.status == 'Success'){
					_this.printMessage({type: 'success', message: 'اتصال به درگاه بانک ...'});
					return window.location.replace(data.paymentInfo.url);
				}
				if(data.status == 'Error')
					return _this.printMessage({type: 'error', message: data.errorMessage})
			}).fail(function () {
				return _this.printMessage({type: 'error', message: 'خطا رخ داده است. مجدداً سعی نمایید.'})
			})
		}
		if(this.chargeType == 'pin'){
			this.printMessage({type: 'success', message: 'در حال ارسال اطلاعات ...'});
			$.ajax({
				url: 'https://etore.me/api/charge.php',
				type: 'post',
				dataType: 'json',
				data: {
					cellphone: $("#w-cellphone").val(),
					count: $("#w-count-slider").val(),
					productId: this.returnProductId(),
					action: 'pin',
				}
			}).done(function (data) {
				if(!data)
					return _this.printMessage({type: 'error', message: 'خطا رخ داده است. مجدداً سعی نمایید.'})
				if(data.status == 'Success'){
					_this.printMessage({type: 'success', message: 'اتصال به درگاه بانک ...'});
					return window.location.replace(data.paymentInfo.url);
				}
				if(data.status == 'Error')
					return _this.printMessage({type: 'error', message: data.errorMessage})
			}).fail(function () {
				return _this.printMessage({type: 'error', message: 'خطا رخ داده است. مجدداً سعی نمایید.'})
			})
		}
	}

	ChargeWidget.prototype.returnType = function() {
		if(this.operator == 'mtn' && !this.amazing)
			return 'MTN';
		if(this.operator == 'mtn' && this.amazing)
			return 'MTN!';
		if(this.operator == 'mci')
			return 'MCI';
		if(this.operator == 'rtl' && !this.amazing)
			return 'RTL';
		if(this.operator == 'rtl' && this.amazing)
			return 'RTL!';
	}

	ChargeWidget.prototype.returnProductId = function() {
		var amount = $("#w-amount-slider").val();
		return 'CC-' + this.operator.toUpperCase() + '-' + amount;
	}

	function addCommas2(input) {
		var input = input.toString();
		return input.toString().substring(0,input.length).replace(/\B(?=(\d{3})+(?!\d))/g, ",");
	}

	function removeZeroes(num) {
		return num.replace(/^(0*)/, "");
	}

	if($(".fine-inquiry").length > 0)
		new FineInquiry().init();
		
	if($(".charge-widget").length > 0)
		new ChargeWidget().init();

	$(".go-to-widget").click(function () {
		$(window).scrollTop($(".charge-widget").offset().top);
	})
});


