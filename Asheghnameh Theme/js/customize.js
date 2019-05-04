jQuery( document ).ready(function() {
  $(".dropdown").mouseover(function(){
    $( ".dropdown" ).addClass( "show" );
    $( ".dropdown-menu" ).addClass( "show" );

  });
  
  $(".dropdown").mouseout(function(){
    $(".dropdown").removeClass("show");
    $(".dropdown-menu").removeClass("show");
  })

});



