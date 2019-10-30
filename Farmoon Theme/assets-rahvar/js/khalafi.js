$(document).ready(function(){

  $( "#rahvar_page" ).load( "https://farmooon.com/rahvar/rahvar.php form#advformid" );


    // someone already explained why count has to be declared outside the function
    var count = 0;   

    function myCount() {


    $('.wizard-container #duration').val(count);

// increment count regardless of its current value
    count ++;

}

setInterval(myCount,500);

$("#ch_capt").click(function () {
  $( "#rahvar_page" ).load( "https://farmooon.com/rahvar/rahvar.php form#advformid" );
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



$.ajax
({
type: "GET",
url: "https://farmooon.com/rahvar/rahvar.php",

beforeSend: function() {
$('.message_box_rahvar').html(
'<div class="load_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" width="50" height="50"/>درحال اتصال به سامانه</div>'
);
},		 
success: function()
{

  setTimeout(function(){ 
    render_captcha();
    var rc = $('#rahvar_page input[name="rc"]').val();
    var cptchid =$('#rahvar_page #cptchid').val();
  
  
    $('.wizard-container input[name="rc"]').val(rc);
    $('.wizard-container #cptchid').val(cptchid);
    $('.message_box_rahvar').hide();

  }, 1000);


},
error : function() {
  $('.message_box_rahvar').html(
    '<div class="alert alert-danger" role="alert">خطا در اتصال به سامانه</div>'
    );
}

});




function form_submit() {

  $.ajax
  ({
  type: "POST",
  url: "https://farmooon.com/rahvar/result_rahvar.php",
  data: $("#js-wizard-form").serialize(),

  beforeSend: function() {
  $('.message_box').html(
  '<div class="result_rahvar"><img src="https://farmooon.com/wp-content/uploads/2019/07/preloader-priceNew.gif" width="50" height="50"/>لطفا منتظر بمانید ...</div>'
  );
  },		 
  success: function(data)
  {

 $( '#result_table' ).html(data);
 
 $("#result_table style").remove();
 $("#result_table link").remove();


 var captcha_valid =$('#result_table').html();



  var t1 =$('#result_table table').html();
 
  if (!t1) {
    
    if (captcha_valid == 1) {
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
      url: "https://farmooon.com/rahvar/function-rahvar.php",
      data: {hashtraghami:hashtraghami,mobile:mobile,table_final:table_final},
      });
  }

  }
  
  });
  
}


$(".wizard-container input").keyup(function(event) {
  if (event.keyCode === 13) {
      $(".btn--next").click();
  }
});



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