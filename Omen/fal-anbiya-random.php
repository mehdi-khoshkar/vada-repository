<?php /* Template Name: FaleAnbiya Random */ ?>

<?php get_header();  ?>

<div id="loader-wrapper">
    <div id="loader"></div>
 
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
 
</div>

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
			
			
		// Query random posts
		$the_query = new WP_Query( array(
			'post_type'      => 'faleanbiya',
			'orderby'        => 'rand',
			'posts_per_page' => 1,
		) ); ?>

		<?php
		// If we have posts lets show them
		if ( $the_query->have_posts() ) : ?>
   	<?php
			// Loop through the posts
			while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
      
	<!-- Central Modal Medium Success -->
<div class="modal fade" id="centralModalSuccessOmen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
          <img src="https://asheghnameh.com/wp-content/uploads/2019/04/icone-falanbiya.png" />
          <p><?php echo get_post_meta( get_the_ID(),'tabir_faleanbiya',true ); ?></p>
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
			<p class="number_id">
			<?php 
			global $post;
 $current_post = $post; // remember the current post
       
        ?>
     </p>

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
<div class="modal fade" id="centralModalSuccessNewFalAnbiya" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
          <img src="https://asheghnameh.com/wp-content/uploads/2019/04/icone-falanbiya.png" />
          <p>
			  چشمان خود را بسته و با حضور ذهن سوره حمد را بخوانید حال آنچه را که مایلید قصد و نیت کنید آنگاه برای گرفتن فال را کلیک کنید.

			</p>
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
         <a href="http://asheghnameh.com/view-fale-anbiya/" type="button" class="btn pink-gradient white-text waves-effect" >مشاهده فال</a>
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Medium Success-->	   	      

     
			
			
			     <!-- Social shares -->
          <div class="social-counters">
			  
			  
			 
<!--          
			  <button type="button" class="btn pink-gradient white-text waves-effect waves-light" data-toggle="modal" data-target="#centralModalSuccessOmen">
				  <i class="fab fa-phoenix-framework pl-2"></i>تعبیر فال</button> -->

		
		
            


							  
  <a class="btn btn-gplus waves-effect waves-light" data-toggle="modal" data-target="#centralModalSuccessNewFalAnbiya" rel="nofollow" href="https://asheghnameh.com/view-fale-anbiya/">
              <i class="fab fa-phoenix-framework pr-2"></i>
              <span class="clearfix  d-md-inline-block">فال جدید</span>
            </a>
			              <!-- Telegram -->
<!--  <a class="btn btn-tw waves-effect waves-light" target="_blank" rel="nofollow" href="tg://msg_url?url=<?php the_permalink(); ?>&text=<?php the_title();?>">
              <i class="fab fa-telegram pr-2"></i>
              <span class="clearfix  d-md-inline-block">ارسال</span>
            </a> -->
 
        
          </div>
          <!-- Social shares -->
			
         
			
         


        </div>
  
	<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
	
	<?php endif; ?>
</div>


<?php  get_footer(); ?>



