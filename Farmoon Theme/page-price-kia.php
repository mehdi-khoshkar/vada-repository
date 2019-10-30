<?php /* Template Name: Car Price kia */ ?>


<?php  get_header(); ?>



<div class="bg-titlebar">
		<div class="container titlebar">

		
        <h1 class="entry-title"> <?php echo get_the_title(); ?></h1>
	
		
		</div>
	</div>

   

<div class="container">
<div class="col-md-12 car-price" style="padding-top:15px">

	  
		  	  
			<div class="brand-car">
        
				  <img class="brand-img" src="<?php echo get_template_directory_uri();?>/BrandsCar/kia.png" />
			
	
			
			
		</div>
	
			

<?php
$i=7;
$table_name = $wpdb->prefix.'price';
$results = $wpdb->get_results( "SELECT * FROM $table_name WHERE brand =  'کیا' "); // Query to fetch data from database table and storing in $results
?>



<table class="table  table-responsive table-striped">
    <tr>
        <th>مدل</th>
        <th> تیپ</th>
        <th> سال</th>
        <th>قیمت</th>
    </tr>
   

    <?php  
    
    foreach($results as $row){ $i++  ?>
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
   
   <div class="box-price-page">
<div class="panel box-download-farmoon">
<div class="panel-body">برای کارشناسی قیمت خودرو می توانید با نصب برنامه فرمون قیمت روز خودرو نو و کارکرده را استعلام کنید. برای استفاده از این قابلیت کافیست سازنده، مدل خودرو، سال تولید و تنوع مدل، کیلومتر کارکرد، وضعیت بیمه و قسمت های رنگ شده را وارد کنید.<p></p>
<div class="btn-box-download"><button class="btn btn-primary aos-init aos-animate" type="button" data-toggle="modal" data-target="#basicExampleModal">دانلود فرمون</button><a class="btn btn-primary btn-lg android btn-plugin aos-init aos-animate" href="https://uzee.ir/farmooonir" data-aos="zoom-in" style="display: none;"><i class="fab fa-android "></i>&nbsp;دانلود فرمون – اندروید</a><a class="btn btn-primary btn-lg ios btn-plugin aos-init aos-animate" href="https://uzee.ir/sibche" data-aos="zoom-in" style="display: none;"><i class="fab fa-apple"></i>&nbsp;دانلود فرمون – iOS</a></div>
</div>
</div>
</div>


</div>




</div>



<!-- <script  src="<?php echo get_template_directory_uri(); ?>/price/price.js"></script> -->



<?php get_footer(); ?>




