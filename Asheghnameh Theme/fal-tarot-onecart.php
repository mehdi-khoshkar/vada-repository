<?php /* Template Name: FaleTarot One */ ?>

<?php get_header();  ?>



<div class="container">
	


	
<section class="fale-tarot">
<center>
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart1.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت تک کارتی</h2>
<p>فال تاروت یک کارتی بدین صورت است که شما نیت کرده و 1 کارت انتخاب می کنید ، سیستم کارت انتخابی را همراه پاسخ فال تاروت به شما نمایش می دهد.</p>
  <!-- Grid row -->
  <div class="row">

  <?php
			
			
		
      // Query random posts
      $the_query = new WP_Query( array(
        'post_type'      => 'faletarot',
        'posts_per_page' => -1,
        'orderby'  => 'rand',
      ) ); ?>
  
      <?php
      // If we have posts lets show them
      if ( $the_query->have_posts() ) : ?>
    
      
       <?php
    
    
        // Loop through the posts
        while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <!-- Grid column -->
      <div class="col-lg-1 col-md-1 col-sm-6 col-xs-6 mb-lg-0 mb-4">
           <a href="<?php echo wp_get_shortlink(); ?>">
  
             <img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart1.png" alt="">
         </a>
      </div>
        
      <!-- Grid column -->
  
  
    <?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>
  
  
    <?php endif; ?>




    </div>
    </section>
     
</div>


<?php  get_footer(); ?>



