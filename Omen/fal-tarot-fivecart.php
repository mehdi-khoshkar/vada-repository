<?php /* Template Name: FaleTarot Five */ ?>

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
<div class="row">

<div class="col-lg-8 col-md-8 col-xs-12">
<center>
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart5.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت پنج کارتی</h2>
<p>
فال تاروت با پنج کارت که هر یک دارای تعابیر متفاوت و مربوط به زمان ها و احوالات مختلف است.در فال تاروت 5 کارتی شما از زمان حال نیت خویش آگاه می شوید و همچنین در خصوص زمان گذشته و تاثیراتی که از اتفاق های افتاده در آن هنوز باقی است اطلاعاتی بدست می آورید و درباره ی آینده نیز ، تاروت به شما خواهد گفت که چه پیش می آید. در فال تاروت پنج کارته دلایل و اتفاقات پنهان نیز نمایان می شود و در نهایت تاروت به نیت شما پاسخ مناسبی خواهد داد.کافی است که نیت کرده و 5 کارت از کارت های زیر را انتخاب کنید ، سعی کنید در هنگام انتخاب کارت سکوت برقرار باشد و قبل از انتخاب اولین کارت ، نیت کنید و سپس به انتخاب کارت های فال تاروت بپردازید.
</p>


  <div id="selected-cart"></div>

 





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
    
    <select class="image-picker-5 show-html" id="image-picker-4" data-limit="5" multiple="multiple">

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
    <div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div> 


    </div>
    </section>


     
</div>


<script>
  jQuery("select").imagepicker();


</script>

<?php  get_footer(); ?>



