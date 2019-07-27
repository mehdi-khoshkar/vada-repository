<?php /* Template Name: Fale Ghahve Random */ ?>

<?php get_header();  ?>

<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<div class="container">
	

<!-- Section: Blog v.4 -->
<section class="section-single-faleghahve">

	

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-8">

      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/faleghahve.jpg" alt="Sample image">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <?php
        $NfaleGhahve = filter_input(INPUT_GET, 'faleGhahve');
		
        // Query  posts
            $the_query = new WP_Query( array(
            'post_type'      => 'faleghahve',
            'orderby'        => 'rand',
            'posts_per_page' => $NfaleGhahve,

            ) );

            ?>
<?php
// If we have posts lets show them
if ( $the_query->have_posts() ) : ?>
<?php


// Loop through the posts
while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

			

			
          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title();?> </a></h2>
	
			

        </div>
        <!-- Card content -->

   
      <!-- Card -->

      <!-- Excerpt -->
      <div class="mt-5 mb-5 content-excerpt">
               <?php  the_content(); ?>

      </div>
  
	
                   <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
    </div>

  

    <!-- Grid column -->
    <div class="card-body card-body-cascade text-center">
			
			
			
			     <!-- Social shares -->
          <div class="social-counters">
			  

							  
  <a class="btn btn-gplus waves-effect waves-light"  href="https://asheghnameh.com/%D9%81%D8%A7%D9%84-%D9%82%D9%87%D9%88%D9%87/">
              <i class="fab fa-phoenix-framework pr-2"></i>
              <span class="clearfix  d-md-inline-block">فال جدید</span>
            </a>

 
        
          </div>
          <!-- Social shares -->
			

        </div>

        <?php include_once('abzar-page.php'); ?>
	<?php endif; ?>
            </div>

    <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div>

  </div>
  <!-- Grid row -->

 



</section>
<!-- Section: Blog v.4 -->
	

		

        
  
	

	
</div>


<?php  get_footer(); ?>



