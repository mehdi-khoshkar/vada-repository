<?php /* Template Name: FaleTarot Love */ ?>

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
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/love.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت عشق  </h2>
<p>
در فال تاروت عشق شما نیت کرده و 7 کارت را انتخاب می کنید ، این کارت ها به شما خواهند گفت که در این رابطه عشق وجود خواهد داشت ؟ احساس امنیت خواهید کرد یا خیر ، همچنین با فال تاروت عشق می توانید متوجه شوید چقدر امکان ازدواج وجود دارد ، و در نهایت این رابطه به ثمر خواهد نشست یا خیر ، فال تاروت عشق یکی از صریح ترین و البته صحیح ترین فال های عشق موجود در اینترنت است که بیش از نود درصد به درستی کار می کند. در هنگام انتخاب کارت ها لطفا تمرکز خود را حفظ کرده و با صبر کافی بین انتخاب های خود ، کارت ها را انتخاب نمایید 
</p>
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
    
    <select class="image-picker-love show-html" id="image-picker-love" data-limit="7" multiple="multiple">

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



