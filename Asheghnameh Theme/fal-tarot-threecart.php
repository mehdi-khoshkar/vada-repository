<?php /* Template Name: FaleTarot Three */ ?>

<?php get_header();  ?>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/image-picker.css">
	<script src="<?php echo get_template_directory_uri(); ?>/js/image-picker.js"></script>

  <style>
div#selected-cart {
    text-align: center;
    margin: 22px;
}
  </style> 

<div class="container">
	


	
<section class="fale-tarot">
<center>
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart3.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت سه کارتی</h2>
<p>در فال تاروت سه کارتی ، کارت اول فال تاروت ، نشان دهنده زمان گذشته ی نیت شماست.کارت دوم فال تاروت سه کارتی ، زمان حال نیت شما را نشان می دهد و در نهایت آخرین کارت از فال تاروت سه کارتی ، مربوط به زمان آینده ی نیت شما می باشد.</p>
  <!-- Grid row -->

  <div id="selected-cart"></div>

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
    
    <select class="image-picker show-html" id="image-picker" data-limit="3" multiple="multiple">

       <?php
    
    
        // Loop through the posts
        while ( $the_query->have_posts() ) : $the_query->the_post();  ?>
            <!-- Grid column -->
            <option data-img-src="https://asheghnameh.com/wp-content/uploads/2019/05/cart1.png" value="<?php echo get_the_ID(); ?>"></option>

      <!-- Grid column -->
  
  
    <?php endwhile; ?>
      
        <?php wp_reset_postdata(); ?>
  
        </select> 
    <?php endif; ?>




    </div>
    </section>


     
</div>


<script>
  jQuery("select").imagepicker();


</script>

<?php  get_footer(); ?>



