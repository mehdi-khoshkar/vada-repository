<?php get_header();  ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize-loader.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-loader.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>

<div class="container">



<!-- Section: Blog v.4 -->
<section class="section-single-faleshame">

  <!-- Grid row -->
  <div class="row">

  <div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>
    <!-- Grid column -->
    <div class="col-lg-8 col-md-8 col-xs-12">


      <!-- Card -->
      <div class="card card-cascade wider reverse">
      <?php if (have_posts() ) : ?>
        <!-- Card image -->
        <div class="view view-cascade overlay">
        <?php the_post_thumbnail(); ?>
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
	

   
      

          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title(); ?></a></h2>
			
			
	
			
         
			
         


        </div>
        <!-- Card content -->

      </div>
      <!-- Card -->

      <!-- Excerpt -->
      <div class="mt-5 content-excerpt">
               <?php  the_content(); ?>

      </div>
  
      <div class="card-body card-body-cascade text-center">

	
		   	      


			
			
<!-- Social shares -->

 
 <!-- Telegram -->

<a class="btn btn-tw waves-effect waves-light" target="_blank" rel="nofollow" href="tg://msg_url?url=<?php the_permalink(); ?>&text=<?php the_title();?>">
   <i class="fab fa-telegram pr-2"></i>
   <span class="clearfix  d-md-inline-block">اشتراک در تلگرام</span>
 </a>


<a class="btn purple-gradient my-0 waves-effect waves-light"  href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D8%AA%D8%A7%D8%B1%D9%88%D8%AA-%DB%8C%DA%A9-%DA%A9%D8%A7%D8%B1%D8%AA%DB%8C/">
   <i class="fab fa-phoenix-framework pr-2"></i>
   <span class="clearfix  d-md-inline-block">فال تاروت جدید</span>
 </a>



</div>
<!-- Social shares -->

    </div>
    <!-- Grid column -->

  
            <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div> 

  </div>
  <!-- Grid row -->



</section>
<!-- Section: Blog v.4 -->
	

		
	<div class="card-body card-body-cascade text-center">
			   
      
   <?php the_tags( 'برچسب ها: ', ', ' ); ?>

        </div>
	

	
		<?php
	

			// If comments are open or we have at least one comment, load up the comment template.
 			if ( comments_open() || get_comments_number() ) {
 				comments_template();
 			}
	
	?>
	
	<?php endif; ?>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/main-loader.js"></script>

<?php  get_footer(); ?>