<?php


$url = "https://etore.me/pages/how-to-pay-bills-fines.html";
   
  
            $content = file_url_contents($url);
            echo $content;
       
############################################
//To fetch the $url by using cURL
function file_url_contents($url){

 
    $crl = curl_init();
    $timeout = 30;
    curl_setopt ($crl, CURLOPT_URL,$url);
    curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $ret = curl_exec($crl);
    curl_close($crl);
    return $ret;
} //file_url_contents ENDS


