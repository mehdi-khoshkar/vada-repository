<?php /* Template Name: Search Model   */ ?>

<?php
global $wpdb;

$Brand=$_POST['Brand'];



$table_name = $wpdb->prefix.'price';

$results_search = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand ='$Brand' "); // Query to fetch data from database table and storing in $results

var_dump($results_search);
		
for($i=0;$i <= count($results_search);$i++)
{
    echo '<option>'.$results_search[$i]->model.'</option>';
}









