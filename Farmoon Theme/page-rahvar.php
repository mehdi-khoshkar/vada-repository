<?php /* Template Name: Rahvar */ ?>


<?php  get_header(); ?>

<div class="container">

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
if(count($_POST)<2) {
print "<PRE>";
print_r($_POST);
print "</PRE>";
}
}
?>
<?php 
 //Gets the users IP address
 $ip = getenv("REMOTE_ADDR") ; 
 Echo "Your IP is " . $ip; 
 ?>

<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
$uri = $_SERVER['REQUEST_URI'];
$ip = $_SERVER['REMOTE_ADDR'];
$ref = $_SERVER['HTTP_REFERER'];
$visitTime = date("r"); //Example: Thu, 21 Dec 2000 16:01:07 +0200
$logLine = "$visitTime - IP: $ip || User Agent: $agent || Page: $uri || Referrer: $ref\n";

$fp = fopen("visitorLog.txt", "a+");
fputs($fp, $logLine);
fclose($fp);
?>

<form method="POST">
First Name: <input type="text" name="txt_first_name"></br>
<input type="submit" name="submit" value="Submit">
</form>


</div>



<?php get_footer(); ?>




