jQuery(document).ready(function () {

var navListItems = $('div.setup-panel div a'), // tab nav items
allWells = $('.setup-content'), // content div
allNextBtn = $('.nextBtn'); // next button
allPreviewBtn = $('.previewBtn'); // preview button

allWells.hide(); // hide all contents by defauld

navListItems.click(function (e) {
e.preventDefault();
var $target = $($(this).attr('href')),
$item = $(this);

if (!$item.hasClass('disabled')) {
navListItems.removeClass('btn-primary').addClass('btn-default');
$item.addClass('btn-primary');
allWells.hide();
$target.show();
$target.find('input:eq(0)').focus();
$target.find('input:eq(1)').focus();
}
});
// next button
allNextBtn.click(function(){
var curStep = $(this).closest(".setup-content"),
curStepBtn = curStep.attr("id"),
nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password'],input[type='url']"),
isValid = true;
// Validation
$(".form-group").removeClass("has-error");
var inputError = $(".setup-content input" ).hasClass( "error" );

for(var i=0; i<curInputs.length; i++){

if (!curInputs[i].validity.valid){
isValid = false;
$(curInputs[i]).closest(".form-group").addClass("has-error");
}
if(inputError){
isValid = false;
$(curInputs[i]).closest(".form-group").addClass("has-error");
}
}
// move to next step if valid
if (isValid)
nextStepWizard.removeAttr('disabled').trigger('click');
});

// preview button
allPreviewBtn.click(function(){
var curStep = $(this).closest(".setup-content"),
curStepBtn = curStep.attr("id"),
prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a"),
curInputs = curStep.find("input[type='text'],input[type='email'],input[type='password'],input[type='url']"),
isValid = true;
// Validation
$(".form-group").removeClass("has-error");

// move to next step if valid
if (isValid)
prevStepWizard.removeAttr('disabled').trigger('click');
});

$('div.setup-panel div a.btn-primary').trigger('click');

});






(function ($) {
    'use strict';

    /*[ Wizard Config ]
        ===========================================================*/

    try {
        var $validator = $("#js-wizard-form").validate({
            rules: {
                irDigit: {
                    required: true,
                    minlength: 2,
                    maxlength:2
                },
                 threeDigit: {
                    required: true,
                    minlength: 3,
                    maxlength:3
                },
                 twoDigit: {
                    required: true,
                    minlength: 2,
                    maxlength:2
                },
                mobile: {

                    minlength: 11,
                    maxlength:11,

                },
                number: {
                    required: true,
                    minlength: 8
                },
                final_step:{
                    required: true,

                },
                capcha: {
                    required: true,
                  
                }
            },
            messages: {
                irDigit: {
                    required: "لطفا پلاک خود را وارد کنید",
                    minlength: "پلاک ایران نمیتواند کمتر از ۲ رقم باشد",
                    maxlength:"پلاک ایران نمیتواند بیشتر از ۲ رقم باشد",
                },
                   threeDigit: {
                    required: "لطفا پلاک خود را وارد کنید",
                    minlength: " بخش دوم پلاک نمیتواند کمتر از ۳ رقم باشد",
                    maxlength:"بخش دوم پلاک نمیتواند کمتر از ۳ رقم باشد",
                },
                   twoDigit: {
                    required: "لطفا پلاک خود را وارد کنید",
                    minlength: "بخش اول پلاک نمیتواند کمتر از ۲ رقم باشد",
                    maxlength:"بخش اول پلاک نمیتواند کمتر از ۲ رقم باشد",
                },
                mobile: {
                    minlength: "شماره موبایل صحیح نیست",
                    maxlength: "شماره موبایل صحیح نیست",           
                     },
                     capcha: {
                        required: "کد امنیتی بالا را وارد کنید",
                      
                    },
            }
        });
    
     




 
    
    }
    catch (e) {
        console.log(e)
    }

})(jQuery);








