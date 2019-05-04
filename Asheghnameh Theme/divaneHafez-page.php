<?php /* Template Name: Divane Hafez */ ?>

<?php get_header();  ?>





<div class="container">
				<?php
		// If we have posts lets show them
		if (have_posts() ) : ?>
	  <!-- Section heading -->
  <h2 class="h1-responsive blog-title text-center font-weight-bold my-5"><?php the_title(); ?></h2>

	
		
   	<?php the_content(); ?>
	

	
		<?php endif; ?>

<section class="text-center my-5 divane-hafez">

	


  <!-- Grid row -->
  <div class="row">


    

			<?php
			
			
		
		// Query random posts
		$the_query = new WP_Query( array(
			'post_type'      => 'falehafez',
			'posts_per_page' => -1,
			'order'   => 'ASC'
		) ); ?>

		<?php
		// If we have posts lets show them
		if ( $the_query->have_posts() ) : ?>
	
		
   	<?php
	
	
			// Loop through the posts
			while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
		      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 mb-lg-0 mb-4">
			   <a href="<?php the_permalink(); ?>">

		<div class="card-body card-body-cascade text-center card-divane-hafez">
          <!-- Title -->
				 <?php the_title();?>

		</div>
			 </a>
    </div>
		  
    <!-- Grid column -->


	<?php endwhile; ?>
		
			<?php wp_reset_postdata(); ?>


	<?php endif; ?>
	  
	    </div>
  <!-- Grid row -->

</section>
</div>

	
	 
<?php  get_footer(); ?>



