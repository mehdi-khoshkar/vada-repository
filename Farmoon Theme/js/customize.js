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
   '<img src="https://farmooon.com/wp-content/uploads/2019/06/ajax-loader.gif" width="25" height="25"/>'
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
   '<img src="https://farmooon.com/wp-content/uploads/2019/06/ajax-loader.gif" width="25" height="25"/>'
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
			
});

