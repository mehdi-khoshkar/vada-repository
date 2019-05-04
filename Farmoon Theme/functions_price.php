<?php

function callCURL($url) {



    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => "$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "APIkey: farmoonytwezerSDcHJLezhxuI",
            "cache-control: no-cache"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        $data = json_decode($response) ;
        return $data;
    }


}

function getCarBrand()
{
    $carName = callCURL('https://www.hamrah-mechanic.com/api/makers/');
    return $carName;
}
function getCarModel($makeId)
{
    $carModel = callCURL("https://www.hamrah-mechanic.com/api/models/$makeId/");
    return $carModel;
}

function getTips($makeId,$modelId)
{
    $carTips = callCURL("https://www.hamrah-mechanic.com/api/yearsandtips/?makeid=$makeId&modelid=$modelId");
    return $carTips;
}


function getPrice($tipId,$yearName)
{
    $carPrice = callCURL("https://www.hamrah-mechanic.com/api/price/?tip_id=$tipId&year=$yearName");
    return $carPrice;
}


function getBrandName($i)
{
       $carBrand = getCarBrand();
       $carBrand =$carBrand[$i]->name;
       echo $carBrand ;
}


