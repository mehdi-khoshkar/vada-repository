<?php
$url = 'http://estelam.rahvar120.ir/index.jsp?siteid=1,1&fkeyid=&pageid=2542';


// use key 'http' even if you send the request to https://...

$url2 = "http://estelam.rahvar120.ir/?sideid=1&fkeyid=&siteid=1&fkeyid=&siteid=1&pageid=2371666";

$_POST['submit']= 'submit' ;

$headers = array(
	"Accept-Language: en-us",
	"Content-type: application/x-www-form-urlencoded",
	"User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)",
	"Connection: Keep-Alive",
	"Cache-Control: no-cache"
);
/*$options2 = array(
	'http' => array(
		'header'  => $headers,
		'method'  => 'POST',
		'content' => $_POST
	)
);
var_dump($options2);

$context  = stream_context_create($options2);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error  }*/
$fields_string="";

foreach($_POST as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
//var_dump($fields_string );
curl_close ($ch);

	if(strpos($server_output,'متن درون تصویر اشتباه وارد شده است!'))
	{
		echo "1";
		exit();
	}

// further processing ....
//if ($server_output == "OK") {  echo "" } else { ... }



$arr['BAR_KD']=$_POST['hashtraghami'];
$arr['capcha']=$_POST['capcha'];
$arr['cptchid']=$_POST['cptchid'];
unset($_POST['refno']);
unset($_POST['submit']);
/*
$options = array(
	'http' => array(
		'header'  => "Content-type: application/x-www-form-urlencoded, Cache-Control: no-cache",
		'method'  => 'POST',
	 	'content' => $arr
	)
);*/
//var_dump($arr);
/*$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === FALSE) { /* Handle error  }*/

foreach($arr as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);


// receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec ($ch);
echo $server_output;
 echo (mb_strpos($server_output,"<table")-6);
 echo "\n";
echo (mb_strpos($server_output,"</table")+8);
$res = mb_substr($server_output,(mb_strpos($server_output,'<table')),(mb_strpos($server_output,'m=$("#p1")')));
$res = mb_substr($server_output,(mb_strpos($server_output,'m=$("#p1")')), (mb_strpos($server_output,'</table')+7));

echo $res;
curl_close ($ch);
?>

																																																																								↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵
																																																																																↵"