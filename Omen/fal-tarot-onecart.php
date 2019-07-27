<?php /* Template Name: FaleTarot One */ ?>

<?php get_header();  ?>



<div class="container">
	


	
<section class="fale-tarot">
  <!-- Grid row -->
  <div class="row">

  <div class="col-lg-8 col-md-8 col-xs-12">
<center>
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart1.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت تک کارتی</h2>
<p>فال تاروت یک کارتی بدین صورت است که شما نیت کرده و 1 کارت انتخاب می کنید ، سیستم کارت انتخابی را همراه پاسخ فال تاروت به شما نمایش می دهد.</p>


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
           <a href="<?php echo wp_get_shortlink(); ?>">
  
             <img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart1.png" alt="">
         </a>
        
      <!-- Grid column -->
  
  
    <?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>
  
  
    <?php endif; ?>


</div>
    <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div> 



    </div>
    </section>
     
</div>


<?php  get_footer(); ?>



