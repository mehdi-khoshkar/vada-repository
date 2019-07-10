<?php /* Template Name: Dream */ ?>

<?php get_header(); ?>
<section class="view dream-page intro-2" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg-header.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
  
            <div class="container h-100 d-flex justify-content-center align-items-center">
                <div class="row flex-center pt-2  app-ads-homepage">

            
              <div class="row features-small wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

                 
                <!-- Grid column -->
                <div class="col-lg-4 col-md-12">

       


         
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-12 col-md-12 mb-1 text-center text-md-center">
                    
            <?php echo do_shortcode( '[wd_asp id=2]' ); ?>

                </div>
                <!-- Grid column -->

               
            </div>
            </div>
        </div>

        </section>

<div class="container">

<!-- Section: Blog v.2 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">آخرین تعبیر خواب </h2>
 
 

  <!-- Grid row -->
  <div class="row">
	  <?php
	  
	    //Protect against arbitrary paged values
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	  	$args = array('post_type' => 'dream','posts_per_page' => 9,'paged' => $paged);
			
			$loop = new WP_Query( $args ); 
	
	  
	  ?>
<?php if ( $loop->have_posts() ) : ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">


      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        
		  		 <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>

		 
 <a href="<?php the_permalink(); ?>">
	 
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
   
      <!-- Post title -->
		<a href="<?php the_permalink(); ?>">
      <h4 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h4>
			 </a>
      <!-- Post data -->


      <!-- Excerpt -->
      <p class="dark-grey-text"><?php the_excerpt(); ?></p>
      <!-- Read more button -->
      <a href="<?php the_permalink(); ?>" class="btn btn-green btn-rounded btn-md">مشاهده</a>

    </div>
    <!-- Grid column -->
	  


   <?php endwhile; ?>
	  

<?php wp_reset_postdata();?>
	 
	  <?php endif ?>
	  
	  
   
  </div>
  <!-- Grid row -->



</section>
<!-- Section: Blog v.2 -->

<div class="pagination-blog">
		      <nav class="pagination pg-red">
			   <?php pagination_bar( $loop ); ?>
      
    </nav>
	</div>

</div>

<?php get_footer(); ?>