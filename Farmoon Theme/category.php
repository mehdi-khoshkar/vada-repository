<?php get_header(); ?>

<div class="container">
	

<!-- Section: Blog v.2 -->
<section id ="arshive" class="text-center my-5 ">
	<?php
$categories = get_the_category();
 
if ( $categories[1]->term_id == 837) { ?>
   
   <div class="card category-price">
  <h5 class="card-header h5">قیمت روز خودرو</h5>
  <div class="card-body">

 
  <div class="row category-price">
		  	  
			<div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4099">
				  <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/ikco.png">
                  <div class="caption-brand">ایران خودرو</div>

                  </a>
		
			
		</div>
		<div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4106">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/Saipa.png">
                 <div class="caption-brand">سایپا</div>

                  </a>
		
			
		</div>

		<div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4109">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/Parskhodro.png">
                 <div class="caption-brand">پارس خودرو</div>

                  </a>
		
			
		</div>

        
		<div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4111">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/kmc-logo.png">
                 <div class="caption-brand">کرمان موتور</div>

                  </a>
		
			
		</div>

        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4113">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/mvmlogo.png">
                 <div class="caption-brand">مدیران خودرو</div>

                  </a>
		
			
		</div>

        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4115">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/logo-bahman.png">
                 <div class="caption-brand">گروه بهمن</div>

                  </a>
		
			
		</div>


        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4133">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/mg.png">
                 <div class="caption-brand">ام جی</div>

                  </a>
		
			
		</div>


        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4135">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/toyota.png">
                 <div class="caption-brand">تویوتا</div>

                  </a>
		
			
		</div>

        
        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4137">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/mercedes-benz.png">
                 <div class="caption-brand">مرسدس بنز</div>

                  </a>
		
			
		</div>

        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4139">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/bmw.png">
                 <div class="caption-brand">بی ام و</div>

                  </a>
		
			
		</div>

        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4141">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/renault.png">
                 <div class="caption-brand">رنو</div>

                  </a>
		
			
		</div>


        <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=4143">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/audi.png">
                 <div class="caption-brand">آئودی</div>

                  </a>
		
			
		</div>


    <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=6340">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/peugeot.png">
                 <div class="caption-brand">پژو</div>

                  </a>
		
			
		</div>
    <div class="brand-car category-price col-md-2 col-4">
                 <a href="https://farmooon.com/?page_id=6344">
                 <img class="brand-img category-price" src="https://farmooon.com/wp-content/themes/Farmoon%20Theme/BrandsCar/kia.png">
                 <div class="caption-brand">کیا</div>

                  </a>
		
			
		</div>

			</div>

      <!-- <a href="#!" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>
      <?php
}
	?>

<?php
   
   $categories = get_the_category();
$category = get_queried_object();
if($category->term_id == 8 || $category->term_id == 1)
{
   $category_id = $categories[0]->cat_ID;

}


else
{
  $category_id = $categories[1]->cat_ID;

} ?>



<?php echo get_post_meta( get_the_ID(),'meta-box-checkbox', true ); 
?>
<?php

// WP_Query arguments
$args = array (
'post_type'              => array( 'post' ),
'post_status'            => array( 'publish' ),
'cat'                    => array($category_id),
'meta_query'             => array(
    array(
        'key'       => 'meta-box-checkbox',
        'value'     => 'true',
    ),
),
);
    
    $loop = new WP_Query( $args ); 
    ?>
<?php if ( $loop->have_posts() ) : ?>

<div class="col-md-12">
<section class="special_post">
<h2 class="spicial-title"><i class="fas fa-star"></i>مطالب ویژه<i class="fas fa-star"></i></h2>
<!-- Set up your HTML -->
<div class="owl-carousel owl-special owl-theme">
<?php while ($loop->have_posts() ) :$loop->the_post(); ?>
<div class="item">
<a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid']); ?>
</a>
<div class="title-special-post">
<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>
</a>
</div>
 </div>

<?php endwhile; ?>

 
</div>


<section>
</div>

  <?php wp_reset_postdata();?>
      <?php endif ?>


  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب مربوط به : <?php single_tag_title(); ?></h2>
 
 

  <!-- Grid row -->
  <div class="row">
	   <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	  


  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->




</div>
<?php get_footer(); ?>