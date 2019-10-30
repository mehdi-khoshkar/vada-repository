$(document).ready(function(){



  $('#js-wizard-form #hashtraghami').focus();



    // someone already explained why count has to be declared outside the function
    var count = 0;   

    function myCount() {


    $('.wizard-container #duration').val(count);

// increment count regardless of its current value
    count ++;

}

setInterval(myCount,500);

$("#ch_capt").click(function () {
  $( "#rahvar_page" ).load( "https://farmooon.com/rahvar120/rahvar form#advformid" );
  render_captcha();

});

$('#reload_page').click(function() {
  location.reload(true);
});

});


function render_captcha() {

 
  var advformid =$('#rahvar_page #advformid');


  if(advformid)
  {

 
  var cptchid_src =$("#rahvar_page #ch_capt").attr("onclick");
  var cptchid_src_string =$("#rahvar_page #ch_capt").attr("onclick");

  var string_one = cptchid_src_string.split(";");

  var string_two = string_one[1].split("'");

   var src_captcha_img = string_two[3];

  $(".wizard-container #capimg").attr("src","http://estelam.rahvar120.ir"+src_captcha_img+ Math.random());

  $(".wizard-container #ch_capt").attr("onclick","http://estelam.rahvar120.ir/"+cptchid_src);
} else{
  $('#capimg').hide();
  $(".message_box_img").html('<div class="alert alert-danger" role="alert">سایت راهور در دسترس نیست</div>');

}



}


$(".btn-start").click(function(){
  $( "#rahvar_page" ).load( "https://farmooon.com/rahvar120/rahvar form#advformid" );

$('.message_box_rahvar').show();

 
$.ajax
({
type: "GET",
url: "https://farmooon.com/rahvar120/rahvar",
 timeout: 10000,
beforeSend: function() {
$('.message_box_rahvar').html(
'<div class="load_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/08/preloader1.gif" width="50" height="50"/>درحال اتصال به سامانه راهور</div>'
);
},
	
  error: function(request, status, error){
 $('.message_box_rahvar').html( '<div class="alert alert-danger" role="alert">خطا دراتصال به سامانه راهور(درصورت استفاده از فیلترشکن , فیلترشکن خود را خاموش کنید سپس مجددا استعلام بگیرید)</div>' ); 

    },	

success: function()
{

var advformid =$('#rahvar_page #advformid');

  setTimeout(function(){ 

render_captcha();

 var rc = $('#rahvar_page input[name="rc"]').val();
var cptchid =$('#rahvar_page #cptchid').val();
$('.wizard-container input[name="rc"]').val(rc);
$('.wizard-container #cptchid').val(cptchid);



  var capimg_valid =$('#rahvar_page #capimg');

var advformid =$('#rahvar_page #advformid');

var proxy =$('#rahvar_page');

  if(!advformid){
        $('.message_box_rahvar').html(
    '<div class="alert alert-danger" role="alert">خطا دراتصال به سامانه راهور</div>'
    );
  }else{
$('.message_box_rahvar').hide();
}

  }, 10000);

},

 

});

});


function form_submit() {

  $.ajax
  ({
  type: "POST",
  url: "https://farmooon.com/rahvar120/result_rahvar",
  data: $("#js-wizard-form").serialize(),

  beforeSend: function() {
  $('.message_box').html(
  '<div class="result_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/08/preloader1.gif" width="50" height="50"/>لطفا منتظر بمانید ...</div>'
  );
  },		 
  success: function(data)
  {

 $( '#result_table' ).html(data);
 
 $("#result_table style").remove();
 $("#result_table link").remove();


 var captcha_valid =$('#result_table').text();



  var t1 =$('#result_table table').html();
var response_rahvar =$('#result_table').html();
 if (!response_rahvar) {
        $('.message_box').html(
    '<div class="alert alert-danger" role="alert">  سامانه راهور در دسترس نیست </div>'
    );
}
 
  else if (!t1) {
    
    if (captcha_valid == 1) {
console.log(captcha_valid);
      $(".message_box").html('<div class="alert alert-danger" role="alert">کد امنیتی وارد شده صحیح نمی باشد</div>');
    
     }else{
      $(".message_box").html('<div class="alert alert-info" role="alert">اطلاعات مربوط به تخلف خودروی شما تا این تاریخ در راهور یافت نگردیده است</div>');

     }

}else{

  $(".message_box").html('<div class="alert alert-success col-md-6" role="alert">لیست خلافی شما</div>');


  setTimeout(function(){ 
    var jam =$('#result_table #jam').html();
    $(".message_box").append('<div class="alert alert-danger col-md-6" role="alert">تعداد کل تخلفات :' + jam +'</div>');

  }, 3000);
 

  



 $('#t1 > tbody').each(function() {

  var t1 =$('#t1 >tbody').html();

  $('#table_final >tbody').append(t1);
$('#table_final').show();

  $("#table_final .odd").remove();

 });
 var table_final = $('#table_final > tbody').html();
 var hashtraghami = $('#hashtraghami').val();
 var mobile = $('#mobile').val();
      $.ajax
      ({
      type: "POST",
      url: "https://farmooon.com/rahvar120/function-rahvar",
      data: {hashtraghami:hashtraghami,mobile:mobile,table_final:table_final},
      });
  }

  }
  
  });
  
}






$(function(){
  $("#btnPrint").printPreview({
      obj2print:'#tab4',
      width:'810',
      
      /*optional properties with default values*/
      //obj2print:'body',     /*if not provided full page will be printed*/
      //style:'',             /*if you want to override or add more css assign here e.g: "<style>#masterContent:background:red;</style>"*/
      //width: '670',         /*if width is not provided it will be 670 (default print paper width)*/
      //height:screen.height, /*if not provided its height will be equal to screen height*/
      //top:0,                /*if not provided its top position will be zero*/
      //left:'center',        /*if not provided it will be at center, you can provide any number e.g. 300,120,200*/
      //resizable : 'yes',    /*yes or no default is yes, * do not work in some browsers*/
      //scrollbars:'yes',     /*yes or no default is yes, * do not work in some browsers*/
      //status:'no',          /*yes or no default is yes, * do not work in some browsers*/
      title:'استعلام خلافی فرمون' /*title of print preview popup window*/
      
  });
});


function result_rahvar() {

    var barcode = $('#hashtraghami').val();
    $.ajax
    ({
    type: "POST",
    url: "https://farmooon.com/rahvar120/function_result.php",
    data: {barcode:barcode},
  
    beforeSend: function() {
    $('.message_box_result').html(
    '<div class="result_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" width="50" height="50"/>لطفا منتظر بمانید ...</div>'
    );
    },		 
    success: function(data)
    {
  
   $( '#result_table' ).html(data);
   $('.message_box_result').hide();

  }
  
});

} 
  
  

  
  $(".wizard-container input").keyup(function(event) {
    if (event.keyCode === 13) {
        $(".btn--next").click();
    }
  });
  


jQuery('ul.nav li.dropdown').hover(function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  jQuery(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});



jQuery(document).ready(function() {
   var delay = 2000;

   $('#sendsmsAndroid .submitBtnAndroid').click(function(e){
   e.preventDefault();
   var number_android = $('#number_android').val();
   if(number_android == ''){
   $('.message_box_android').html(
   '<span style="color:red;"> لطفا شماره موبایل خود را وارد کنید</span>'
   );
   $('#number_android').focus();
   return false;
   }
							
   $.ajax
   ({
   type: "POST",
   url: "https://farmooon.com/send-sms-android",
   data: "number_android="+number_android,
   beforeSend: function() {
   $('.message_box_android').html(
   '<img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" class="img-preload" />'
   );
   },		 
   success: function(data)
   {
   setTimeout(function() {
   $('.message_box_android').html(data);
   }, delay);
   }
   });
   });
	
	   $('#sendsmsiOS .submitBtniOS').click(function(e){
   e.preventDefault();
   var number_ios = $('#number_ios').val();
   if(number_ios == ''){
   $('.message_box_ios').html(
   '<span style="color:red;"> لطفا شماره موبایل خود را وارد کنید</span>'
   );
   $('#number_ios').focus();
   return false;
   }
							
   $.ajax
   ({
   type: "POST",
   url: "https://farmooon.com/send-sms-ios/",
   data: "number_ios="+number_ios,
   beforeSend: function() {
   $('.message_box_ios').html(
   '<img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" class="img-preload" />'
   );
   },		 
   success: function(data)
   {
   setTimeout(function() {
   $('.message_box_ios').html(data);
   }, delay);
   }
   });
   })



function loadajax(){
   var selectedBrand = $('#selectedBrand').children("option:selected").val();
  
        $.ajax
        ({
        type: "POST",
        url: "https://farmooon.com/search-car-price/",
        data: "Brand="+selectedBrand,
        beforeSend: function() {
        $('.message_box_searchModel').html(
        '<img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" class="img-preload" />'
        );
        $('.message_box_searchModel').show();

        },		 
        success: function(data)
        {
       

        setTimeout(function() {
        $('#selectedModel').html(data);
        $('.message_box_searchModel').hide();
        $( "#searchPriceBtn" ).show();
        }, delay);
        }
        });
      }

        $(function(){
          setTimeout(loadajax,0);
      });

  $('#selectedBrand').on('change',function(){
   
    var selectedBrand = $('#selectedBrand').children("option:selected").val();
  
        $.ajax
        ({
        type: "POST",
        url: "https://farmooon.com/search-car-price/",
        data: "Brand="+selectedBrand,
        beforeSend: function() {
        $('.message_box_searchModel').html(
        '<img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" class="img-preload" />'
        );
        $('.message_box_searchModel').show();
        $( "#searchPriceBtn" ).hide();
        },		 
        success: function(data)
        {
          
        setTimeout(function() {
         
        $('#selectedModel').html(data);
        $('.message_box_searchModel').hide();
        $( "#searchPriceBtn" ).show();
        }, delay);
        }
        });

});


$('#getCarPrice #searchPriceBtn').click(function(e){
  e.preventDefault();
  var selectedBrand = $('#selectedBrand').children("option:selected").val();
  var selectedModel = $('#selectedModel').children("option:selected").val();



  $.ajax
  ({
  type: "POST",
  url: "https://farmooon.com/search-car-price/",
  data:{ Brand : selectedBrand, Model : selectedModel},
  beforeSend: function() {
  $('.message_box_search').html(
  '<img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" class="img-preload" />'
  );
  $('.message_box_search').show();

  },		 
  success: function(data)
  {
    
  setTimeout(function() {
    
  $('table .result').html(data);
  
  $('.message_box_search').hide();
  $('#result').show();
  

  }, delay);
  }
  });
  })

});


;(function ( $ ) {
    $.fn.printPreview = function( options ) {
        var elem = this;
        
        var opt = $.extend({
            obj2print:'body',
            style:'',
            width:'670',
            height:screen.height-105,
            top:0,
            left:'center',
            resizable : 'yes',
            scrollbars:'yes',
            status:'no',
            title:'Print Preview'
        }, options );
        if(opt.left == 'center'){
            opt.left=(screen.width/2)-(opt.width/2);
        }
        $(opt.obj2print+" input").each(function(){
            $(this).attr('value',$(this).val());
        });
        $(opt.obj2print+" textarea").each(function(){
            $(this).html($(this).val());
        });
        return elem.bind("click.printPreview", function () {
            var btnCode = elem[0].outerHTML;
            var headString = '';
            headString = $("head").html();
            var str = "<!DOCTYPE html><html><head>"+headString+opt.style+"</head><body>";
            str+=$(opt.obj2print)[0].outerHTML.replace(btnCode,'')+"</body></html>";
            //top open multiple instances we have to name newWindow differently, so getting milliseconds
            var d = new Date();
            var n = 'newWindow'+d.getMilliseconds();
            var newWindow = window.open(
                    "", 
                    n, 
                    "width="+opt.width+
                    ",top="+opt.top+
                    ",height="+opt.height+
                    ",left="+opt.left+
                    ",resizable="+opt.resizable+
                    ",scrollbars="+opt.scrollbars+
                    ",status="+opt.status
                    );
            newWindow.document.write(str);
            newWindow.document.title = opt.title;
        });
    };
}( jQuery ));
