<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );


$table = $wpdb->prefix.'Mrahvar';
$static_string = 'M';
$bar_code = $static_string.$_POST['hashtraghami'];
$data = array(     
	'barcode' =>$bar_code,
	'mobile' =>$_POST['mobile'],
	'total' =>$_POST['total'],
	'total_price' =>$_POST['total_price'],
	'pelak' =>$_POST['pelak'],
	'result' =>$_POST['table_final'],

   
);

$wpdb->insert($table,$data);
  