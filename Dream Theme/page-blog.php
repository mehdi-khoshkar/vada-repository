<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<div class="container">
	


<!-- Section: Blog v.2 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب اخیر</h2>
 
 

  <!-- Grid row -->
  <div class="row">
	  <?php
	  
	    //Protect against arbitrary paged values
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	  	$args = array('post_type' => 'post','posts_per_page' => 6,'paged' => $paged);
			
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
      <h4 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h4>
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