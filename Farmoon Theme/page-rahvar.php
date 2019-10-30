<?php /* Template Name: Rahvar */ ?>


		<style>
    .stepwizard-row.setup-panel {
        display: none;
	}
	
	.panel.panel-primary.box-rahvar {
    box-shadow: 0 8px 17px 0 rgba(0,0,0,.2), 0 6px 20px 0 rgba(0,0,0,.19);
	margin-bottom: 23px;
	text-align:center;
	background-color: #f5f5f5;
}

.box-rahvar .panel-body {
    padding: 15px;
}

.box-rahvar form#js-wizard-form {
   
    margin: 0 auto;
}

label.text-rahvar
{
	color:#02bcb4;
}

.farmooon-rahvar {
    text-align: left;
}

label#hashtraghami-error{

	color:red;
}

form#js-wizard-form input , form#js-wizard-form .input-group {
    width: 50%;
    margin: 0 auto;
}
form#js-wizard-form a {
   color:#fff;
}

span.input-group-addon {
    margin-left: 15px;
}

a#btn_help {
    background: unset;
    border: none;
}

a#btn_help i {
	color: red;
	padding: 10px;
}
.group-btn a {
	margin: 5px;
}

.group-btn button {
    margin: 5px;
}

.message_box .alert-danger {
    width: 50%;
    display: inline-block;
}

@media only screen and (max-width: 468px) {
	.panel.panel-primary.box-rahvar {
    margin-top: 88px;
   
  }

  .message_box .alert-danger {
    width: 100% !important;
}
  form#js-wizard-form input , form#js-wizard-form .input-group {
    width: 83%;
    margin: 0 auto;
}
.panel.panel-primary.box-rahvar .img-help {
	width:100%;
}
}

@media print
{
    .print-hidden {
        display: none;
    }
    
    a {
        display: none;
	}
	table {
width: 100%; 
margin: 0; 
float: none;
}

	ul#sidebar {
    display: none;
}

article {
    display: none;
}

.table-responsive {
    display: inline;
}

}

		</style>

<div class="panel panel-primary box-rahvar">
	<div class="panel-heading">استعلام خلافی خودرو</div>
	<div class="panel-body">

	<div class="stepwizard">
<div class="stepwizard-row setup-panel">
<div class="stepwizard-step">
<a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
<p>Account Details</p>
</div>

<div class="stepwizard-step">
<a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
<p>Career</p>
</div>

<div class="stepwizard-step">
<a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
<p>Social Media</p>
</div>

<div class="stepwizard-step">
<a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
<p>Social Media</p>
</div>

</div>
</div>
		<div class="message_box_rahvar"></div>
		<form class="wizard-container" id="js-wizard-form">

			<div class="setup-content" id="step-1">
				<div class="col-xs-12">
					<div class="col-md-12">
						<p>در این بخش میتوانید خلافی خود را استعلام بگیرید</p>

						<div id="help" class="collapse">
						
						<img class="img-help" src="https://farmooon.com/wp-content/uploads/2018/06/car-card-min.jpg" alt="">
						</div>
						<div class="form-group">
							<input name="aform" value="add" type="hidden">
							<input name="rc" value="" type="hidden">
							<input type="hidden" name="duration" id="duration" value="">
							<label for="hashtraghami" class="text-rahvar">کد هشت یا نه رقمی کارت خود را وارد کنید</label>
							<div class="input-group">
							<a data-toggle="collapse" id="btn_help" data-target="#help"><i class="far fa-question-circle"></i></a>

						
										<input class="form-control" type="text" name="hashtraghami" id="hashtraghami" placeholder="کد 8 رقمی کارت ماشین" required>							</div>
						</div>

						<!-- content go here -->
						<button class="btn btn-primary  nextBtn pull-right" type="button">تایید</button>


				
					
					</div>
				</div>
			</div>

			<div class="setup-content" id="step-2">
				<div class="col-xs-12">
					<div class="col-md-12">
						<p>در این بخش میتوانید خلافی خود را استعلام بگیرید</p>

						<!-- content go here -->
						<div class="form-group">
							<label for="hashtraghami" class="text-rahvar">شماره همراه خود را وارد نمایید ( اختیاری)</label>
							<input class="form-control" type="text" name="mobile" id="mobile" placeholder="شماره موبایل(اختیاری)">
						</div>
						<div class="group-btn">
							<button class="btn btn-primary  nextBtn btn-start pull-right" type="button">مرحله بعد</button>
							<button class="btn btn-danger  previewBtn pull-right" type="button">بازگشت</button>
						</div>

					</div>
				</div>
			</div>

			<div class="setup-content" id="step-3">
				<div class="col-xs-12">
					<div class="col-md-12">

						<div class="message_box_img"></div>
						<?php
								$ip=$_SERVER['REMOTE_ADDR'];
$location = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));

if($location['geoplugin_countryCode'] == 'IR')
{
 ?>
	
						<!-- content go here -->
						<div class="form-group">
							<div id="captcha-img">
									<input id="cptchid" name="cptchid" type="hidden" value="">
									<img id="capimg" alt="متن درون تصویر را در جعبه متن زیر وارد نمائید" src="" width="200" height="60">
									<img height="16" id="ch_capt" style="cursor:pointer " src="https://farmooon.com/wp-content/uploads/2019/08/refresh.gif" width="18" onclick="">
								</div>
								<label for="hashtraghami" class="text-rahvar">متن موجود در تصویر را وارد کنید (به بزرگی و کوچکی حروف حساس نمی باشد)</label>
								<input class="form-control" type="text" name="capcha" id="capcha" placeholder="متن تصویر را وارد کنید" required="required">
								
						</div>

						<?php }else {?>
									<div class="alert alert-danger" role="alert">فیلترشکن خود را خاموش کنید سپس مجددا استعلام بگیرید</div>
									<?php } ?>
						<div class="group-btn">
						<a  id="rahvar-btn" class="btn btn-primary  nextBtn  pull-right" onclick="form_submit();">استعلام خلافی</a>

							<button class="btn btn-danger  previewBtn pull-right" type="button">بازگشت</button>
						</div>

					</div>
				</div>

			</div>


			<div class="setup-content" id="step-4">
 
			<div class="col-xs-12">
					<div class="col-md-12">

					<div class="message_box"></div>
					<div class="row group-btn">
					       <a id="btnPrint" class="btn btn-success col-md-2 col-3">چاپ</a>
							<a class="btn btn-info reload pull-right col-md-3 col-8" id="reload">استعلام خلافی مجدد</a>
							<a  href="https://farmooon.com/rahvar120/panel" target="_blank"  class="btn btn-success col-md-3 col-8">مشاهده سوابق خلافی</a>
							<button class="btn btn-danger  previewBtn pull-right col-md-3 col-3" type="button">بازگشت</button>
						</div>
							<table class="table table-striped table-responsive" id="table_final" style="display:none;">

									<thead>
										<tr>
										<th scope="col">شرح تخلف</th>
										<th scope="col">نوع</th>
										<th scope="col">کد تخلف	</th>
										<th scope="col">مبلغ(ریال)	</th>
										<th scope="col">محل تخلف</th>
										<th scope="col">شهر	</th>
										<th scope="col">تاریخ</th>
										<th scope="col">سریال</th>
										<th scope="col">بارکد</th>
										<th scope="col">پلاک</th>
										<th scope="col">شناسه پرداخت</th>
										<th scope="col">شناسه قبض</th>
										</tr>
									</thead>
									<tbody>


									</tbody>
						  </table>
							</div>
						</div>
					  
						<div class="tab-pane" id="tab5">
														</div>

					
				</div>
				</div>
			

	</form>
	<!-- <div class="farmooon-rahvar">
				<img src="https://farmooon.com/wp-content/uploads/2019/09/farmoon-white.png" />
				</div>
	</div> -->
	

</div>

<div id="rahvar_page" style="display:none;"></div>
<div id="result_table" style="display:none;"></div>






<!-- Jquery JS-->
<script src="https://farmooon.com/rahvar120/js/khalafi.js"></script>


<!-- Vendor JS-->
<script src="https://farmooon.com/rahvar120/vendor/jquery-validate/jquery.validate.js"></script>
    

    <script src="https://farmooon.com/rahvar120/vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>

   <!-- Main JS-->

<script src="https://farmooon.com/rahvar120/js/wp-global.js"></script>


<script>
  jQuery(function() {
    $("#btnPrint").click(function (){
        $("body > table").addClass("print-hidden");
        $(this).parents("table").last().removeClass("print-hidden");
        if (window.print) {
            window.print();
        }
    });
});
</script>