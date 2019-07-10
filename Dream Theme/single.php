<?php get_header();  ?>

<div class="container">
	
	
	<!-- Section: Blog v.1 -->
<section class="my-5">



  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <article id="post-<?php the_ID(); ?>" class="col-lg-8 col-md-8 col-xs-12">
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

 
  <!-- Grid row -->
	  <!-- Grid row -->
  <div class="row">
	    <!-- Grid column -->
    <div class="col-lg-8 col-md-8 col-xs-12">


      <!-- Post title -->
      <div class="single-title">
      <h1 class="entry-title"><?php the_title(); ?></h1>

		</div>
      <!-- Excerpt -->
      <div class="content-post">
		  		 <?php  the_content(); ?>

		</div>




    </div>
    <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
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
</article>


</section>
<!-- Section: Blog v.1 -->

</div>


<?php  get_footer(); ?>