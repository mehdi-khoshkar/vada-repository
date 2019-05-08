<?php /* Template Name: FaleTarot Six */ ?>

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
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart5.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت شش کارتی</h2>
<p>
فال تاروت شش کارتی نیز ریشه قدیمی دارد و جزو مهمترین فال های تاروت می باشد. در فال تاروت 6 کارته ، دو کارت اول مربوط به گذشته ی نیت شما است و کارت سوم فال تاروت و همچنین کارت چهارم ، بیانگر موقعیت فعلی و زمان حال نیت شما می باشد. در فال تاروت 6 کارتی ، کارت پنجم پاسخ فال شماست و کارت ششم از آینده ی نیت شما خبر خواهد داد.برای گرفتن فال تاروت 6 کارتی خود ، ابتدا نیت کرده و سپس شش کارت از کارت های زیر انتخاب نمایید ، با هربار انتخاب ، کارت انتخاب شده نمایان می شود ، پس لطفا موقع انتخاب کارت ها با تمرکز و صبر کافی اقدام نمایید. انشاالله که نتیجه ی فال تاروت شما خوش رقم بخورد.
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
    
    <select class="image-picker-6 show-html" id="image-picker-4" data-limit="6" multiple="multiple">

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



