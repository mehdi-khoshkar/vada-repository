<?php /* Template Name: Get FaleTarot */ ?>

<?php get_header();  ?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize-loader.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main-loader.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>

<div class="container">



<!-- Section: Blog v.4 -->
<section class="section-single-Getfaletarot">

  <!-- Grid row -->
  <div class="row">

  <div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<div class="col-lg-8 col-md-8 col-xs-12">


    <?php


           $tarot_id = filter_input(INPUT_GET, 'Tarot_ID');
      
            $tarot_ids = explode(",", $tarot_id);

		
								// Query  posts
		$the_query = new WP_Query(array(
            'post_type' => array( 'faletarot' ),
            'orderby' => 'ASC',
            'post__in' => $tarot_ids,
        ) );
			
			?>

  
      <?php if ($the_query->have_posts() ) : ?>

        <?php
      $i = 1;
			// Loop through the posts
			while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
    <!-- Card -->

                <!-- Grid column -->
                <div class="alert alert-danger text-center" role="alert">
                کارت شماره : <?php echo $i++; ?>
                </div>
            
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

     
      <!-- Card -->

      <!-- Excerpt -->
      <div class="content-excerpt">
               <?php  the_content(); ?>

      </div>
  

 
    <!-- Grid column -->

  

    		
  <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>    

      </div> 

      <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div> 

            </div>
  <!-- Grid row -->

	</div>
</section>
<!-- Section: Blog v.4 -->
	

		
          
	<?php endif; ?>
</div>


<script src="<?php echo get_template_directory_uri(); ?>/js/main-loader.js"></script>


<?php  get_footer(); ?>
