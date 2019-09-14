<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );


$table_name  = $wpdb->prefix.'rahvar';
$barcode = $_POST['barcode'];

if($_POST['barcode'])
{
	$results_search_barcode = $wpdb->get_results( "SELECT * FROM $table_name WHERE barcode = $barcode"); // Query to fetch data from database table and storing in $results


	$i = 1;

	foreach($results_search_barcode as $row){?>
			<tr>
			<td> <?php echo $i++; ?></td>
					<td> <?php echo $row->barcode; ?></td>
					<td> <?php echo  $row->mobile; ?></td>
					<td> <?php echo  $row->date; ?></td>
					<td> <a  target="_blank" class="btn btn-success" href="https://farmooon.com/rahvar120/result.php?id=<?php echo $row->id; ?>">مشاهده</a></td>
			</tr>
			<?php 
			}
				
				
}  

