<?php /* Template Name: Car Price ُSaipa */ ?>


<?php  get_header(); ?>



<div class="bg-titlebar">
		<div class="container titlebar">

		
        <h1 class="entry-title"> <?php echo get_the_title(); ?></h1>
	
		
		</div>
	</div>

   

<div class="container">
<div class="col-md-12 car-price" style="padding-top:15px">

		  

			<div class="brand-car">
        
				  <img class="brand-img" src="<?php echo get_template_directory_uri();?>/BrandsCar/Saipa.png" />
			
	
			
			
		</div>
	
			

<?php
$i=1;
$table_name = $wpdb->prefix.'price';
$results = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand = 'سایپا' "); // Query to fetch data from database table and storing in $results
?>


<table class="table  table-responsive table-striped">
    <tr>
        <th>مدل</th>
        <th> تیپ</th>
        <th> سال</th>
        <th>قیمت</th>
    </tr>
   

    <?php  
    
    foreach($results as $row){  $i++ ?>
        <tr>
             <td> <?php echo $row->model; ?></td>
            <td> <?php echo  $row->tip; ?></td>
            <td> <?php echo  $row->year; ?></td>
            <td> <?php echo  $row->price; ?>&nbsp;تومان</td>
            <?php if($i == $row->countModel) break; ?>
        </tr>
        <?php 
         }
          
          ?>

   
</table>

<div class="btn-top-price">
<a href="https://farmooon.ir/?page_id=3572" class="btn btn-primary"> سایر خودرو ها</a>
        </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="box-price-page">
<?php the_content(); ?>
</div>
<?php endwhile; ?>
   
   <?php endif; ?>
</div>




</div>



<!-- <script  src="<?php echo get_template_directory_uri(); ?>/price/price.js"></script> -->



<?php get_footer(); ?>




