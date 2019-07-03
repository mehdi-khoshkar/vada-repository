<?php

$number_android= $_POST['number_android'];
$number_ios= $_POST['number_ios'];

function SendSmsAndroid($number_android){
  global $wpdb;
// turn off the WSDL cache


ini_set("soap.wsdl_cache_enabled", "0");
  try {
    $table = $wpdb->prefix.'sms';
    $count = $wpdb->get_var("SELECT COUNT(*) FROM $table WHERE phone = '$number_android'");
    if($count < 3){
    $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
    $parameters['username'] = "9192381591";
    $parameters['password'] = "9192381591Ab$";
    $parameters['to'] = "$number_android";
    $parameters['from'] = "300012304020";
    $parameters['text'] ="لینک دانلود فرمون برای کاربران اندروید :
    http://uzee.ir/farmooonir";
    $parameters['isflash'] =false;
   
      $data = array(     
        'phone' =>$number_android,
       
    );
    $wpdb->insert($table,$data);
    $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
    echo '<div class="alert alert-success" role="alert">
    لینک دانلود فرمون  ارسال شد</div>';
    
  }
    else{
      echo '<div class="alert alert-danger" role="alert">
      شماره موبایل وارد شده بیشتر از حد مجاز می باشد</div>';


    }
  
 
 } catch (SoapFault $ex) {
    echo $ex->faultstring;
}

}

function SendSmsiOS($number_ios){
  global $wpdb;
// turn off the WSDL cache

ini_set("soap.wsdl_cache_enabled", "0");
  try {
    $table = $wpdb->prefix.'sms';
    $count = $wpdb->get_var("SELECT COUNT(*) FROM $table WHERE phone = '$number_ios'");
    if($count < 3){
    $sms_client = new SoapClient('http://api.payamak-panel.com/post/send.asmx?wsdl', array('encoding'=>'UTF-8'));
    $parameters['username'] = "9192381591";
    $parameters['password'] = "9192381591Ab$";
    $parameters['to'] = "$number_ios";
    $parameters['from'] = "300012304020";
    $parameters['text'] ="لینک دانلود فرمون برای کاربران iOS : 
    https://uzee.ir/sibche";
    $parameters['isflash'] =false;
   
      $data = array(     
        'phone' =>$number_ios,
       
    );
    $wpdb->insert($table,$data);
    $sms_client->SendSimpleSMS2($parameters)->SendSimpleSMS2Result;
    echo '<div class="alert alert-success" role="alert">
    لینک دانلود فرمون  ارسال شد</div>';
    
  }
    else{
      echo '<div class="alert alert-danger" role="alert">
      شماره موبایل وارد شده بیشتر از حد مجاز می باشد</div>';


    }
  
 
 } catch (SoapFault $ex) {
    echo $ex->faultstring;
}

}


function valid_number(){


  if(isset($_POST['number_android'])) { 
  if($_POST['number_android'] == null){ 
   echo '<div class="alert alert-danger" role="alert">
  لطفا شماره موبایل خود را وارد کنید</div>';
  return false;
  } 
  
   if($_POST['number_android'] !=null && !is_numeric($_POST['number_android'])){ 
    echo '<div class="alert alert-danger" role="alert">
  شماره موبایل صحیح  نمی باشد</div>';
  return false;
   } 
  
   if($_POST['number_android'] !=null && is_numeric($_POST['number_android']) && strlen($_POST['number_android']) < 11 || strlen($_POST['number_android']) > 11 ){ 
    echo '<div class="alert alert-danger" role="alert">
  شماره موبایل 11 رقمی  می باشد</div>';
  return false;
   } 
  

    return true;
  
   }

   
  if(isset($_POST['number_ios'])) { 
    if($_POST['number_ios'] == null){ 
     echo '<div class="alert alert-danger" role="alert">
    لطفا شماره موبایل خود را وارد کنید</div>';
    return false;
    } 
    
     if($_POST['number_ios'] !=null && !is_numeric($_POST['number_ios'])){ 
      echo '<div class="alert alert-danger" role="alert">
    شماره موبایل صحیح  نمی باشد</div>';
    return false;
     } 
    
     if($_POST['number_ios'] !=null && is_numeric($_POST['number_ios']) && strlen($_POST['number_ios']) < 11 || strlen($_POST['number_ios']) > 11 ){ 
      echo '<div class="alert alert-danger" role="alert">
    شماره موبایل 11 رقمی  می باشد</div>';
    return false;
     } 
    
  
      return true;
    
     }
  }
   