<?php

//extract data from the post
//set POST variables
$url = 'http://estelam.rahvar120.ir/index.jsp?siteid=1&fkeyid=&siteid=1&pageid=2542';

$url2 = "http://estelam.rahvar120.ir/index.jsp?siteid=1&fkeyid=&siteid=1&pageid=2371666";

$fields_string="";

foreach($_POST as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

$headers = array(
	"Accept-Language: en-us",
	"Content-type: application/x-www-form-urlencoded",
	"User-Agent: Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.1.4322; .NET CLR 2.0.50727; .NET CLR 3.0.04506.30)",
	"Connection: Keep-Alive",
	"Cache-Control: no-cache"
);



$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30);
curl_setopt($ch, CURLOPT_TIMEOUT,30);
curl_setopt($ch, CURLOPT_FRESH_CONNECT,TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_COOKIESESSION, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
    curl_setopt($ch, CURLOPT_FORBID_REUSE, true);





$server_output = curl_exec ($ch);
//var_dump($fields_string );
curl_close ($ch);

	if(strpos($server_output,'متن درون تصویر اشتباه وارد شده است!'))
	{
		echo 1;
		exit();
	}


$static_string = 'M';

$bar_code = $static_string.$_POST['hashtraghami'];

$fields = array(
	'BAR_KD' => urlencode($bar_code),
	'capcha' => urlencode($_POST['capcha']),
	'cptchid' => urlencode($_POST['cptchid']),

);

//url-ify the data for the POST
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string, '&');

//open connection
$ch = curl_init();

	
//set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, count($fields));
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,30);
curl_setopt($ch, CURLOPT_TIMEOUT,30);
curl_setopt($ch, CURLOPT_FRESH_CONNECT,TRUE);



//execute post
 $result = curl_exec($ch);

 echo htmlentities($result);

//close connection
curl_close($ch);


