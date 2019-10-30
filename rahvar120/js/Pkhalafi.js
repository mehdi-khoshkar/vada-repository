jQuery(document).ready(function(){



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


function addCommas(nStr)
{
        nStr += '';
        x = nStr.split('.');
        x1 = x[0];
        x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
}


function render_captcha() {

 
  var advformid =$('#rahvar_page #advformid').html();


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


jQuery(".btn-start").click(function(){
var inputError = $(".setup-content input" ).hasClass( "error" );
if(!inputError)
{
  $( "#rahvar_page" ).load( "https://farmooon.com/rahvar120/rahvar form#advformid" );

$('.message_box_rahvar').show();


 
$.ajax
({
type: "GET",
url: "https://farmooon.com/rahvar120/rahvar",
 timeout: 10000,
beforeSend: function() {
$('#captcha-img').hide();
$('.message_box_rahvar').html(
'<div class="load_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/08/preloader1.gif" width="50" height="50"/>درحال اتصال به سامانه راهور</div>'
);
},
	
  error: function(request, status, error){
$('.message_box_rahvar').html(
'<div class="alert alert-danger" role="alert">سامانه راهور در حال حاضر در دسترس نیست<</div>'
);

    },	

success: function()
{


  setTimeout(function(){ 
    var advformid =$('#rahvar_page #advformid');

  if(!advformid){
        $('.message_box_rahvar').html(
    '<div class="alert alert-danger" role="alert">سامانه راهور در حال حاضر در دسترس نیست</div>'
    );
  }else{
render_captcha();

 var rc = $('#rahvar_page input[name="rc"]').val();
var cptchid =$('#rahvar_page #cptchid').val();
$('.wizard-container input[name="rc"]').val(rc);
$('.wizard-container #cptchid').val(cptchid);
$('#captcha-img').show();



  var capimg_valid =$('#rahvar_page #capimg');

var advformid =$('#rahvar_page #advformid');

var proxy =$('#rahvar_page');

$('.message_box_rahvar').hide();
}

  }, 5000);

},

});
}

});


function get_barcode(){

var twoDigit = $("input[name=twoDigit]").val();
var letter = $("#letter option:selected").text();
var threeDigit = $("input[name=threeDigit]").val();
var irDigit = $("input[name=irDigit]").val();


var pelak = '%D8%A7%D9%8A%D8%B1%D8%A7%D9%86'+encodeURI(irDigit+'ــ'+threeDigit+letter+twoDigit);


    $.ajax
        ({
        type: "POST",
        url: "https://farmooon.com/rahvar120/function-barcode",
       data: {pelak:pelak},
        error: function(request, status, error){
        $('.message_box_rahvar').html(
        '<div class="alert alert-danger" role="alert">خطا در دریافت اطلاعات</div>'
        );

            },	

            success: function(data)
            {
                    
                if(data == 'none'){
                    $('#js-wizard-form #step-2 .nextBtn').hide();
                      $('#js-wizard-form #step-2 .form-group').hide();
                       $('.message_box_valid').html(
        '<div class="alert alert-danger" role="alert">شماره پلاک شما یافت نشد </div>'
        );
                }
                else{
                $('#js-wizard-form #hashtraghami').val(data);

                }
                
            }

        });
}

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


 
var captcha_valid = $( "#result_table" ).text();
    

     if(captcha_valid == 1) {

      $(".message_box").html('<div class="alert alert-danger" role="alert">کد امنیتی وارد شده صحیح نمی باشد</div>');
}else{
var body =$('#result_table header').html();
  var t1 =$('#result_table table').html();

  if (!body) {


 
      $(".message_box").html('<div class="alert alert-danger" role="alert">سامانه راهور در حال حاضر در دسترس نیست<</div>');
     
}

  if (!t1) {


 
      $(".message_box").html('<div class="alert alert-info" role="alert">اطلاعات مربوط به تخلف خودروی شما تا این تاریخ در راهور یافت نگردیده است</div>');
     
}
else
{

  $(".message_box").html('<div class="alert alert-success" role="alert">لیست خلافی شما</div>');




function get_data_rahvar(){
  var total =$('#result_table #t1 tbody tr').length;
    $(".message_box").append('<div class="alert alert-danger" role="alert">تعداد کل تخلفات :' + total +'</div>');



 var total_price = 0;
var price =' ';
   $('#table_final tbody tr  td:nth-child(4)').each(function() {
                       price = parseInt($(this).text());
            total_price += price;
        
        });
  $(".message_box").append('<div class="alert alert-danger" role="alert">مبلغ کل تخلفات :' + addCommas(total_price) +'ریال  </div>');


var pelak_str =$('#table_final tbody tr:nth-child(1) td:nth-child(10)').text();
  $(".message_box").append('<div class="alert alert-info" role="alert">پلاک :' + pelak_str +'</div>');

var pelak = pelak_str.replace(/\s/g, '');

setTimeout(function(){
   var table_final_str = $('#table_final > tbody').html();
var table_final = table_final_str.replace(/^\s+|\r\n|\n|\r|(>)\s+(<)|\s+$/gm, '$1$2');
 var hashtraghami = $('#hashtraghami').val();
 var mobile = $('#mobile').val();
 var tools = 'pelak';
      $.ajax
      ({
      type: "POST",
      url: "https://farmooon.com/rahvar120/function-rahvar",
      data: {hashtraghami:hashtraghami,mobile:mobile,total:total,total_price:total_price,pelak:pelak,table_final:table_final,tools:tools},
      });
      }, 5000);
}

setTimeout(get_data_rahvar, 3000);


 
  



 $('#t1 > tbody').each(function() {

  var t1 =$('#t1 >tbody').html();

  $('#table_final >tbody').append(t1);
$('#table_final').show();

  $("#table_final .odd").remove();

 });
 

 
}

  
     }

render_captcha();
}
  
   });

}

jQuery('#reload').click(function() {
    location.reload();
});
