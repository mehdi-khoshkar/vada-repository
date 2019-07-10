<?php /* Template Name: Search Price   */ ?>



<?php
global $wpdb;

$Brand=$_POST['Brand'];

$Model = $_POST['Model'];


$table_name = $wpdb->prefix.'price';


if(isset($_POST['Brand']) && !isset($_POST['Model']))
{
$results_search = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand ='$Brand' "); // Query to fetch data from database table and storing in $results


		
for($i=0;$i <= count($results_search);$i++)
{
    echo '<option>'.$results_search[$i]->model.'</option>';
}

}
if(isset($_POST['Brand']) && isset($_POST['Model']))
{
 
   $Model = $_POST['Model'];

    $results_search_car = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand ='$Brand' AND model = '$Model' "); // Query to fetch data from database table and storing in $results

    var_dump($results_search_car[0]->model);
    echo '<td>'.$results_search_car[0]->model.'</td>';
    echo '<td>'.$results_search_car[0]->tip.'</td>';
    echo '<td>'.$results_search_car[0]->price.'</td>';

 

}






