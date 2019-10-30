<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );


$table_name = $wpdb->prefix.'rahvar';



$pelak =urldecode($_POST['pelak']);

if($_POST['pelak'])
{

    $results_search_barcode = $wpdb->get_results( "SELECT barcode FROM $table_name WHERE pelak = '$pelak' ORDER BY id DESC "); // Query to fetch data from database table and storing in $results
   
    if($results_search_barcode)
    {
     
        $barcode = $results_search_barcode[0]->barcode;
        echo $barcode;

    }
    else{
        echo 'none';
    }


}

