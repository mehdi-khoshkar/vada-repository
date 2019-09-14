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



