function result_rahvar() {

    var barcode = 'M' + $('#hashtraghami').val();
    $.ajax
    ({
    type: "POST",
    url: "https://farmooon.com/rahvar120/function_Mresult.php",
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
 
