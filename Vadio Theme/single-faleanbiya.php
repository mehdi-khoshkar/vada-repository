<?php get_header();  ?>

<div class="container">

<!-- Section: Blog v.4 -->
<section class="section-single-faleanbiya">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">


      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/faleanbiya.jpg" alt="Sample image">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
			<?php
			
			$post_tags = get_the_tags();
			 $postid = get_the_ID(); 
			$args = array('post_type' => 'faleanbiya');
			
			$loop = new WP_Query( $args ); 
			?>
<?php if ( $loop->have_posts() ) : ?>
   
      

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
  

    </div>
    <!-- Grid column -->

  

  </div>
  <!-- Grid row -->

<div class="card-body card-body-cascade text-center">

	
		   	      
	  <div class="previous_post">
		  	  <button type="button" class="btn purple-gradient"><?php previous_post_link(); ?> </button>

	  </div>
	
	  <div class="next_post">
	   <button type="button" class="btn purple-gradient"> <?php next_post_link(); ?> </button>
	  </div>

			
			
			     <!-- Social shares -->

            
            <!-- Telegram -->
			  
 <a class="btn btn-tw waves-effect waves-light" target="_blank" rel="nofollow" href="tg://msg_url?url=<?php the_permalink(); ?>&text=<?php the_title();?>">
              <i class="fab fa-telegram pr-2"></i>
              <span class="clearfix  d-md-inline-block">اشتراک در تلگرام</span>
            </a>
 
			  
           
        
          </div>
          <!-- Social shares -->
			
         


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

<?php  get_footer(); ?>