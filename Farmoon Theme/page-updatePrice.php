<?php /* Template Name: Update Price */ ?>

<style>
.panel-heading {
    color: #333;
    background-color: #f5f5f5;
    border-color: #ddd;
    font-size: 32px;
    text-align: center;
}

table {
    display: inline-table !important;
}

td {
    text-align: right;
    max-width: 50px;
}
</style>
<?php  get_header(); ?>



<div class="bg-titlebar">
		<div class="container titlebar">

		
				<h1 class="entry-title">به روز رسانی قیمت  روز خودرو  </h1>			
	
		
		</div>
	</div>

   
<div class="container-fluid section-home">

<div class="container">

<?php
 require_once('functions_price.php');
$carBrand = getCarBrand();

$i = 0;
?>

<!--set pre price-->
<?php while ($i <= 53) { ?>


</div>
<?php

    $makeId = $carBrand[$i]->makeid;
    $carModel = getCarModel($makeId);
    $countModel = count($carModel) -1;



?>


    <?php for ($c = 0; $c <= $countModel; $c++) { ?>
       <?php
        $carModel = getCarModel($makeId);
        $modelId = $carModel[$c]->modelid;
        $year_tip = getTips($makeId,$modelId);
        $tipId= $year_tip[0]->tipid;
        $yearName= $year_tip[0]->yearname;
        $price=getPrice($tipId,$yearName);
    
       $Brands =$carBrand[$i]->name;
         $model= $carModel[$c]->modelname; 
     $tip=$year_tip[0]->tipname;
        $year = $year_tip[0]->yearname;
       $car_price=$price->Price;



       
//        $table = $wpdb->prefix.'price';
//        $data = array( 
//        'brand' => $Brands,
//        'model' => $model,
//        'countModel' =>$countModel +1,
//        'tip' => $tip,
//        'year' =>  $year,
//        'price' => $car_price,
//     );
//        $wpdb->insert($table,$data);
//        $my_id = $wpdb->insert_id; 
    
   global $wpdb;
        $table = $wpdb->prefix.'price';
        $data = array( 
        
            'price' => $car_price, 
        );
      
        $where= array( 'model' => $model );
        $wpdb->update($table,$data,$where);

        $wpdb->show_errors(); 
     
    
        ?>
    <?php } ?>
</table>
</div>
</div>

<?php
    $i++;
}

if($wpdb)
{
    echo 'قیمت خودرو ها به روزرسانی  شد';
}
?>

</div>


</div>



<!-- <script  src="<?php echo get_template_directory_uri(); ?>/price/price.js"></script> -->



<?php get_footer(); ?>




