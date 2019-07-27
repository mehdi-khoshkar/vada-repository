<?php /* Template Name: FaleTarot Four */ ?>

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
  <!-- Grid row -->
  <div class="row">

  <div class="col-lg-8 col-md-8 col-xs-12">
<center>
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart4.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت چهار کارتی</h2>
<p>شما ، در فال تاروت چهار کارتی ، همانطور که از اسمش پیداست بایستی 4 کارت تاروت را انتخاب کنید. پس از انتخاب هر کارت ، در پایین لیست کارت ها ، آن کارت را می بینید.بعد از اینکه انتخاب کارت ها به اتمام رسید ، سیستم ، فال تاروت 4 کارتی شما را نمایان می کنددر فال تاروت چهار کارته ، کارت اول درباره نیتی که دارید توضیحاتی را ارائه می کند ، کارت دوم در خصوص احساسات است پس جنبه های احساسی نیت شما را نمایان خواهد کرد ، کارت سوم مشخص خواهد کرد که درباره نیت خود چه افکاری دارید یا خواهید داشت و اما آخرین کارت یعنی کارت چهارم در فال تاروت چهار کارتی نتیجه یا همان پاسخ نیت شما را نمایان خواهد نمود.</p>
  <!-- Grid row -->

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
    
    <select class="image-picker-4 show-html" id="image-picker-4" data-limit="4" multiple="multiple">

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



