<?php get_header();  ?>

<div class="container">
	
	
	<!-- Section: Blog v.1 -->
<section class="my-5">



  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-12">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <!-- Featured image -->
      <div class="view img-singlePost overlay rounded  mb-lg-0 mb-4">
		  	 <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid','z-depth-2']); ?>

        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->


	  
	  
    <!-- Grid column -->

  </div>
  <!-- Grid row -->
	  <!-- Grid row -->
  <div class="row">
	    <!-- Grid column -->
    <div class="col-lg-12">


      <!-- Post title -->
      <h3 class="font-weight-bold mb-3 post-title"><strong><?php the_title(); ?></strong></h3>
      <!-- Excerpt -->
      <div class="content-post">
		  		 <?php  the_content(); ?>

		</div>


    </div>
	

  </div>
  <!-- Grid row -->
    <?php the_tags( 'برچسب ها: ', ', ' ); ?>

      
	

	
		<?php
	

			// If comments are open or we have at least one comment, load up the comment template.
 			if ( comments_open() || get_comments_number() ) {
 				comments_template();
 			}
	
	?>
	
	  <?php endwhile; ?>
<?php endif; ?>


</section>
<!-- Section: Blog v.1 -->

</div>

<?php  get_footer(); ?>