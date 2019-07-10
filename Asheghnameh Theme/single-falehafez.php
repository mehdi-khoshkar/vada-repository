<?php get_header();  ?>

<div class="container">

<!-- Section: Blog v.4 -->
<section class="section-single-falehafez">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-12">
<!-- 		<div class="btn-single-hafez">
			<a href="https://asheghnameh.com/?page_id=1622" class="btn btn-download  white-text font-weight-bold wow fadeIn waves-effect waves-light" data-wow-delay="0.3s"  style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">فال حافظ صوتی</a>
		</div> -->

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
			
			$post_tags = get_the_tags();
			 $postid = get_the_ID(); 
			$args = array('post_type' => 'falehafez');
			
			$loop = new WP_Query( $args ); 
			?>
<?php if ( $loop->have_posts() ) : ?>
   
      

          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title(); ?> حافظ</a></h2>
			
			
	
			
         
			
         


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
    <?php echo do_shortcode('[post_gallery]'); ?>

  

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
			  
 <!-- <a class="btn btn-tw waves-effect waves-light" target="_blank" rel="nofollow" href="tg://msg_url?url=<?php the_permalink(); ?>&text=<?php the_title();?>">
              <i class="fab fa-telegram pr-2"></i>
              <span class="clearfix  d-md-inline-block">اشتراک در تلگرام</span>
            </a> -->
 
			  

            <div class="card text-white bg-success box-ads-falehafez">
      <!-- <div class="card-header">اپلیکیشن عاشقنامه</div> -->
      <div class="card-body">
        <p class="card-text text-white">با نصب برنامه عاشقنامه فال حافظ صوتی بگیرید. همینطور می توانید در دسته بندی غزلیات عاشقانه، مشکل گشا و روزانه از میان غزلیات حافظ، فال بگیرید.</p>
        <a href="http://uzee.ir/asheghnamehsite" class="btn btn-light-ads green-text font-weight-bold wow fadeIn waves-effect waves-light" data-wow-delay="0.3s" onclick="return gtag_report_conversion('http://uzee.ir/asheghnamehsite');" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;">دانلود مستقیم عاشقنامه</a>      </div>
    </div>

           
        
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