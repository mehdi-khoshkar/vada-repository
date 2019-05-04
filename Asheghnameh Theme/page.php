<?php get_header();  ?>

<div class="container">
	

<!-- Section: Blog v.4 -->
<section class="section-single-falehafez">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
		
      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view overlay">
<!--           <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/falehafez.jpg" alt="Sample image"> -->
					  		 <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-single-blog card-img-top"']); ?>

			
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

      

          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title(); ?></a></h2>
          <!-- Data -->


        </div>
        <!-- Card content -->

      </div>
      <!-- Card -->

      <!-- Excerpt -->
      <div class="mt-5">
               <?php  the_content(); ?>

      </div>
  
    </div>
    <!-- Grid column -->

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
	
	  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php  get_footer(); ?>