<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );

include_once('jdf.php');


$table_name  = $wpdb->prefix.'Mrahvar';
$barcode = $_POST['barcode'];

if($_POST['barcode'])
{
	$results_search_barcode = $wpdb->get_results( "SELECT * FROM $table_name WHERE barcode = '$barcode'"); // Query to fetch data from database table and storing in $results


	$i = 1;

	
function change_date($date)
{
	$array = explode(' ', $date);
	
	//print_r($array);
	list($year, $month, $day) = explode('-', $array[0]);
	list($hour, $minute, $second) = explode(':', $array[1]);
	$timestamp_date = mktime($hour, $minute, $second,$month, $day, $year);

	//echo $timestamp;
	$jalali_date = jdate("Y/m/d", $timestamp_date);
	$jalali_time = jdate("زمان:H:i:s", $timestamp_time);
	echo $jalali_date;
}


	foreach($results_search_barcode as $row){?>
			<tr>
			<td> <?php echo $i++; ?></td>
					<td> <?php echo $row->barcode; ?></td>
					<td> <?php echo  $row->mobile; ?></td>

			

			      <td> <?php change_date($row->date); ?></td>
					<td> <a  target="_blank" class="btn btn-success" href="https://farmooon.com/rahvar120/Mresult.php?id=<?php echo $row->id; ?>">مشاهده</a></td>
			</tr>
			<?php 
			}
				
				
}  

