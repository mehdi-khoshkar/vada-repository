
jQuery(window).on("load",function(){

    jQuery.ajax({
        type: "GET",
        headers:{
            'Access-Control-Allow-Origin': '*',
            "Accept":"application/json",//depends on your api
            "Apikey": "farmoonytwezerSDcHJLezhxuI",
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
            
        },
        url:"https://www.hamrah-mechanic.com/api/makers/",

        success: function(data) {
            successmessage = 'Data was succesfully captured';
        }



});




});


