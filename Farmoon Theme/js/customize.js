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


jQuery(document).ready(function(){
  $('.owl-special').owlCarousel({
    loop:true,
	  rtl:true,
    margin:10,
    responsiveClass:true,
	  lazyLoad: true,
    nav: true,
    dot:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
            
            
        },
        600:{
            items:3,
        },
        1000:{
            items:6,
           
            
        }
    }
});

	  $('.owl-post').owlCarousel({
    loop:true,
	  rtl:true,
	  nav:true,
		  lazyLoad: true,
    margin:10,
	      autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
           
            
        }
    }
});	
	
		  $('.owl-special-single').owlCarousel({
    loop:true,
	  rtl:true,
	  nav:true,
		  lazyLoad: true,
    margin:10,
	      autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            
        },
        600:{
            items:3,
        },
        1000:{
            items:4,
           
            
        }
    }
});	

});





jQuery(document).ready(function() {

setTimeout(function(){
$(".search_table").keyup(function () {
    var searchTerm = $(".search_table").val();
    var listItem = $('.results tbody').children('tr');
    var searchSplit = searchTerm.replace(/ /g, "'):containsi('")
    
  $.extend($.expr[':'], {'containsi': function(elem, i, match, array){
        return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
    }
  });
    
  $(".results tbody tr").not(":containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','false');
  });

  $(".results tbody tr:containsi('" + searchSplit + "')").each(function(e){
    $(this).attr('visible','true');
  });

  var jobCount = $('.results tbody tr[visible="true"]').length;
    $('.counter').text(jobCount + ' item');

  if(jobCount == '0') {$('.no-result').show();}
    else {$('.no-result').hide();}
		  });
});

}, 2000);



        jQuery(function () {
            $('[id*=search_table]').keyup(function (e) {
                var ctrlKey = 67, vKey = 86;
                if (e.keyCode != ctrlKey && e.keyCode != vKey) {
                    $('[id*=search_table]').val(EnglishToPersian($(this).val()));
                }
            });

        });

 
        function EnglishToPersian(input) {
            var inputstring = input;
            var persian = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"]
            var english = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]
            for (var i = 0; i < 10; i++) {
                var regex = new RegExp(english[i], 'g');
                inputstring = inputstring.toString().replace(regex, persian[i]);
            }
            return inputstring;
        }


        jQuery(function () {
            $('[id*=hashtraghami]').keyup(function (e) {
                var ctrlKey = 67, vKey = 86;
                if (e.keyCode != ctrlKey && e.keyCode != vKey) {
                    $('[id*=hashtraghami]').val(PersianToEnglish($(this).val()));
                }
            });

        });

 
        function PersianToEnglish(input) {
            var inputstring = input;
            var persian = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"]
            var english = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"]
            for (var i = 0; i < 10; i++) {
                var regex = new RegExp(persian[i], 'g');
                inputstring = inputstring.toString().replace(regex, english[i]);
            }
            return inputstring;
        }
