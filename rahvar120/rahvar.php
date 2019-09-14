<?php


$url = "http://estelam.rahvar120.ir/index.jsp?siteid=1&fkeyid=&siteid=1&pageid=2371666";
   
  
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


