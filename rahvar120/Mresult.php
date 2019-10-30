<? include_once('Mheader.php'); ?>


<body>

<div class="container p-t-275 p-b-100">
<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );

$id  = filter_input(INPUT_GET, 'id');



if($id)
{
    $table_name = $wpdb->prefix.'Mrahvar';
	$results_search_id = $wpdb->get_results( "SELECT * FROM $table_name WHERE id = $id "); // Query to fetch data from database table and storing in $results

?>
   
   <div class="alert alert-success" role="alert">
           شماره پلاک :  <?php   echo $results_search_id[0]->pelak; ?>
        </div>

  <div class="alert alert-danger" role="alert">
            تعداد کل تخلفات :  <?php  echo $results_search_id[0]->total; ?>
        </div>
       
            <div class="alert alert-danger" role="alert">
            مبلغ کل تخلفات :  <?php  echo $results_search_id[0]->total_price; ?>
        </div>
        	
   <div id="tab4">
    <table class="table table-striped table-responsive" id="table_final" style="">
    <thead>
                                            <tr>
                                            <th scope="col">شرح تخلف</th>
                                            <th scope="col">نوع</th>
                                            <th scope="col">کد تخلف	</th>
                                            <th scope="col">مبلغ(ریال)	</th>
                                            <th scope="col">محل تخلف</th>
                                            <th scope="col">شهر	</th>
                                            <th scope="col">تاریخ</th>
                                            <th scope="col">سریال</th>
                                            <th scope="col">بارکد</th>
                                            <th scope="col">پلاک</th>
                                            <th scope="col">شناسه پرداخت</th>
                                            <th scope="col">شناسه قبض</th>
                                            </tr>
     </thead>
    <tbody id="result_table">
    <?php
	foreach($results_search_id as $row){?>


			 <?php echo $row->result; ?>
				
			<?php 
            } 
            ?>
            <tbody>
            </table>
            </div>
           			
<?php				
} 
?>

</div>



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/jquery-validate/jquery.validate.js"></script>
    
    <script src="vendor/bootstrap-wizard/popper.min.js"></script>

    <script src="vendor/bootstrap-wizard/bootstrap.min.js"></script>
    <script src="vendor/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
    <script src="js/khalafi.js"></script>
    <script src="js/khalafi_result.js"></script>
  <script type="text/javascript" src="js/printPreview.js"></script>
  <script type="text/javascript" src="js/customize.js"></script>






    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->