<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );


$table = $wpdb->prefix.'rahvar';

$data = array(     
	'barcode' =>$_POST['hashtraghami'],
	'mobile' =>$_POST['mobile'],
	'total' =>$_POST['total'],
	'total_price' =>$_POST['total_price'],
	'pelak' =>$_POST['pelak'],
	'tools' =>$_POST['tools'],
	'result' =>$_POST['table_final'],

   
);

$wpdb->insert($table,$data);
  