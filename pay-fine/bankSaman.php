<?php
$url = "https://bill.samanepay.com/Public/BillPay.aspx?rand=1";
   
  
            $content = strip_html_tags(file_url_contents($url));
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

//To remove all the hidden text not displayed on a webpage
function strip_html_tags($str){
    $str = preg_replace('/(<|>)\1{2}/is', '', $str);
    $str = preg_replace(
        array(// Remove invisible content
            '@<script[^>]*?.*?</script>@siu',
            ),
        "", //replace above with nothing
        $str );
    $str = replaceWhitespace($str);
    $str = strip_tags($str,'<form><input><img>');
    return $str;
} //function strip_html_tags ENDS

//To replace all types of whitespace with a single space
function replaceWhitespace($str) {
    $result = $str;
    foreach (array(
    "  ", " \t",  " \r",  " \n",
    "\t\t", "\t ", "\t\r", "\t\n",
    "\r\r", "\r ", "\r\t", "\r\n",
    "\n\n", "\n ", "\n\t", "\n\r",
    ) as $replacement) {
    $result = str_replace($replacement, $replacement[0], $result);
    }
    return $str !== $result ? replaceWhitespace($result) : $result;
  }