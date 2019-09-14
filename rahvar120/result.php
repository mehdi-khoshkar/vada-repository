

<!DOCTYPE html>
<html lang="fa">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="از همینجا خلافی بگیرید.در این بخش می‌توانید خلافی خودروی خود را استعلام بگیرید و در صورت لزوم اقدام به چاپ خلافی خودرو نمایید. کافیست کد 8 یا 9 رقمی کارت ماشین را وارد نمایید. ⭐️⭐️⭐️⭐️⭐️">
    <meta name="author" content="فرمون">
    <meta name="keywords" content="خلافی خودرو,استعلام خلافی,استعلام خلافی خودرو,استعلام خلافی خودرو از طریق اینترنت,خلافی ماشین,جریمه خودرو,خلافی,rahvar120,دریافت خلافی خودرو,خلافي ماشين,گرفتن خلافی ماشین,خلافي خودرو,گرفتن خلافی,راهور 120 خلافی ماشین,عدم خلافی,پرداخت جریمه رانندگی,پرداخت خلافی خودرو,استعلام تخلفات رانندگی,استعلام جریمه خودرو,گرفتن خلافی خودرو,پرداخت جریمه خودرو,راهور۱۲۰">
        <link rel="icon" href="https://farmooon.com/wp-content/uploads/2018/02/cropped-namadak-32x32.png" type="image/png" sizes="16x16">

    
    <!-- Title Page-->
    <title>استعلام آنلاین خلافی خودرو</title>

    <!-- Icons font CSS-->
   

    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  
<!-- Latest compiled and minified CSS -->
<link href="vendor/bootstrap-wizard/bootstrap.min.css" rel="stylesheet" media="all">

    <link href="css/main.css" rel="stylesheet" media="all">



</head>

<body>

<div class="container p-t-275 p-b-100">
<?php

define( 'SHORTINIT', true );

require($_SERVER['DOCUMENT_ROOT'] .'/wp-load.php' );

$id  = filter_input(INPUT_GET, 'id');



if($id)
{
    $table_name = $wpdb->prefix.'rahvar';
	$results_search_id = $wpdb->get_results( "SELECT * FROM $table_name WHERE id = $id "); // Query to fetch data from database table and storing in $results

?>
   
   <a id="btnPrint" class="btn btn-success">چاپ</a>	
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