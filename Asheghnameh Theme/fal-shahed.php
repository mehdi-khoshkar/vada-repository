<?php /* Template Name: FaleHafez Shahed */ ?>

<?php get_header();  ?>

<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

<div class="container">
	

<!-- Section: Blog v.4 -->
<section class="section-single-falehafez">

	

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">

      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/falehafez.jpg" alt="Sample image">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
     <?php
			
			$fal_id = filter_input(INPUT_GET, 'Fal_ID');
		
								// Query  posts
		$the_query = new WP_Query( array(
			'post_type'      => 'falehafez',
			'posts_per_page' => 1,
			'p' => $fal_id
			

		) );
			
			?>
		<?php
		// If we have posts lets show them
		if ( $the_query->have_posts() ) : ?>
   	<?php
			

			// Loop through the posts
			while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
      
	<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccessTabir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <p class="heading lead">تعبیر فال شما</p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <img src="https://asheghnameh.com/wp-content/uploads/2019/04/icone-falhafez.png" />
          <p><?php echo get_post_meta( get_the_ID(),'tabir_falehafez',true ); ?></p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        
        <a type="button" class="btn pink-gradient white-text waves-effect" data-dismiss="modal">ممنون</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->
			
          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title();?> </a></h2>
	
			

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

 



</section>
<!-- Section: Blog v.4 -->
	

		
	<div class="card-body card-body-cascade text-center">
			   
      
   <?php the_tags( 'برچسب ها: ', ', ' ); ?>

        </div>
	
<div class="card-body card-body-cascade text-center">
			
		<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccessNewFal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-success" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
        <p class="heading lead">نیت کنید و اشاره فرمایید</p>

      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <img src="https://asheghnameh.com/wp-content/uploads/2019/04/icone-falhafez.png" />
          <p> ای حافظ شیرازی! تو محرم هر رازی! تو را به خدا و به شاخ نباتت قسم می دهم که هر چه صلاح و مصلحت می بینی برایم آشکار و آرزوی مرا براورده سازی. ضمن اینکه شاید بهتر باشد برای شادی روح حافظ، صلوات یا فاتحه ای نثار نماییم!
			</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
         <a href="http://asheghnameh.com/view-fale-hafez/" type="button" class="btn pink-gradient white-text waves-effect" >مشاهده فال</a>
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->	   	      

     
			
			
			     <!-- Social shares -->
          <div class="social-counters">
			  
			  
			 
         
			  <button type="button" class="btn pink-gradient white-text waves-effect waves-light" data-toggle="modal" data-target="#centralModalSuccessTabir">
				  <i class="fab fa-phoenix-framework pl-2"></i>تعبیر فال</button>
			  
		
		
            


							  
  <a class="btn btn-gplus waves-effect waves-light" data-toggle="modal" data-target="#centralModalSuccessNewFal" rel="nofollow" href="http://asheghnameh.com/view-fale-hafez/">
              <i class="fab fa-phoenix-framework pr-2"></i>
              <span class="clearfix  d-md-inline-block">فال جدید</span>
            </a>
			              <!-- Telegram -->
 <a class="btn btn-tw waves-effect waves-light" target="_blank" rel="nofollow" href="tg://msg_url?url=<?php the_permalink(); ?>&text=<?php the_title();?>">
              <i class="fab fa-telegram pr-2"></i>
              <span class="clearfix  d-md-inline-block">ارسال</span>
            </a>
 
        
          </div>
          <!-- Social shares -->
			
         
			
         <?php endwhile; ?>
			<?php wp_reset_postdata(); ?>


        </div>

	
	<?php endif; ?>
	
</div>


<?php  get_footer(); ?>



