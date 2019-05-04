$(window).on("load",function(){

    $.ajax({
        type: "GET",
        headers:{
            "Accept":"application/json",//depends on your api
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
        },
        url:"https://api.farmooon.ir/api/Report/AllTimeReport",

        success:function(response){

            document.getElementById("estelam-number").innerHTML = response[0].count ;
            document.getElementById("estelam-amount").innerHTML = response[0].amount ;

        }
    });
    $.ajax({
        type: "GET",
        headers:{
            "Accept":"application/json",//depends on your api
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
        },
        url:"https://api.farmooon.ir/api/Report/TopCodes",

        success:function(response){
            
            document.getElementById("noe-takhalof").innerHTML = response.description;
            document.getElementById("tedad").innerHTML = response['amount'];

        }
    });
    $.ajax({
        type: "GET",
        headers:{
            "Accept":"application/json",//depends on your api
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
        },
        url:"https://api.farmooon.ir/api/Report/TopLocations",

        success:function(response){

            document.getElementById("por-takhalof").innerHTML = response['location'];
            document.getElementById("count-takhalof").innerHTML = response['count'];

        }
    });





});











