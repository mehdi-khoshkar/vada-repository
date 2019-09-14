<?php

 
$barcode = $_POST['barcode'];
$mobile = $_POST['mobile'];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.alopark.com/Estelam/SendBarCode?barcode=$barcode&mobile=$mobile",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Accept: */*",
    "Cache-Control: no-cache",
    "Connection: keep-alive",
    "Host: www.alopark.com",
    "Postman-Token: 5d93fffd-66b2-401b-8d4f-ef7e656a8993,207b8884-d0d8-45fb-911a-323e238ec5c0",
    "User-Agent: PostmanRuntime/7.15.0",
    "accept-encoding: gzip, deflate",
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {

  return captcha($response);
}




function captcha($response){

  $captcha = json_decode($response);
 $data=$captcha->data;
 $img_url =json_decode($data);
 
   echo json_encode($img_url);


  
 
}


