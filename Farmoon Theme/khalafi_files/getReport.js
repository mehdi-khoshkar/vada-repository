
jQuery(window).on("load",function(){

    jQuery.ajax({
        type: "GET",
        headers:{
            "Accept":"application/json",//depends on your api
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
        },
        url:"https://api.farmooon.ir/api/Report/AllTimeReport",

        success:function(response){
            console.log((response[0]));
            // var transform =
            //     {"tag":"tr","children":[
            //         {"tag":"td","html":"${description}"},
            //         {"tag":"td","html":"${type}"},
            //         {"tag":"td","html":"${code}"},
            //         {"tag":"td","html":"${amount}"},
            //         {"tag":"td","html":"${location}"},
            //         {"tag":"td","html":"${city}"},
            //         {"tag":"td","html":"${created_at}"}
            //     ]};

            document.getElementById("estelam-number").innerHTML = response[0].count ;
            document.getElementById("estelam-amount").innerHTML = response[0].amount ;

            

        }
    });
    jQuery.ajax({
        type: "GET",
        headers:{
            "Accept":"application/json",//depends on your api
            "Content-type":"application/x-www-form-urlencoded"//depends on your api
        },
        url:"https://api.farmooon.ir/api/Report/TopCodes",

        success:function(response){
            console.log((response));

            document.getElementById("noe-takhalof").innerHTML = response.description;
            document.getElementById("tedad").innerHTML = response['amount'];

        }
    });
    jQuery.ajax({
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


















