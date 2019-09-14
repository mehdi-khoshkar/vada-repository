(function ($) {
    'use strict';

    /*[ Wizard Config ]
        ===========================================================*/

    try {
        var $validator = $("#js-wizard-form").validate({
            rules: {
                hashtraghami: {
                    required: true,
                    minlength: 8,
                    maxlength:9
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
                hashtraghami: {
                    required: "لطفا کد 8 رقمی خود را وارد کنید",
                    minlength: "بارکد نمیتواند کمتر از 8 رقم باشد",
                    maxlength:"بارکد نمیتواند بیشتر از ۹ رقم باشد"
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
    
     

        $("#js-wizard-form").bootstrapWizard({
            'tabClass': 'nav nav-pills',
            'nextSelector': '.btn--next',
            'previousSelector': '.btn--previous',
            'onNext': function(tab, navigation, index) {
                var $valid = $("#js-wizard-form").valid();
                if(!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
             
            
            },
            'onPrevious': function(navigation, index) {
                $( "#rahvar_page" ).load( "https://farmooon.com/rahvar120/rahvar form#advformid" );
                render_captcha();
                    return true;
                
            },
           
         
            'onTabClick': function (tab, navigation, index) {
                var $valid = $("#js-wizard-form").valid();

                if(!$valid) {
                    $validator.focusInvalid();
                    return false;
                }
            }
    
        });


 
    
    }
    catch (e) {
        console.log(e)
    }

})(jQuery);


