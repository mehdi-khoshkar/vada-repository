


<?php



global $wpdb;

$table_name = $wpdb->prefix.'price';

$results_search = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = '$Brand' "); // Query to fetch data from database table and storing in $results


foreach($results_searc as $row){

    echo"<option > $row->model</option>";


?>






