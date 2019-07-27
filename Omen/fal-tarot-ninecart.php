<?php /* Template Name: FaleTarot Nine */ ?>

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
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart9.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت نه کارتی</h2>
<p>
فال تاروت 9 کارتی ، تمام اتفاق های مرتبط با نیت شما را از گذشته های دور ( کارت تاروت یک ) تا زمان آینده ی دور ( کارت تاروت نه ) بیان خواهد کرد.سه کارت اول فال تاروت شما ، مربوط به زمان گذشته است و سه کارت بعدی آن ، زمان حال نیت شما را بیان می کند و در نهایت سه کارت آخر ، آینده ی نیت شما را نمایان خواهد نمود.لازم به توضیح است که کارت شماره پنج زمان حال و فعلی که در آن قرار دارید را بیان می کند و کارت تاروت آخری یعنی کارت شماره نه ، نتیجه و پاسخ فال تاروت شما است.برای گرفتن فال تاروت خود ابتدا نیت کرده و 9 کارت انتخاب نمایید ، سپس کمی صبر کنید تا سیستم نتیجه ی فال تاروت شما را برایتان آشکار سازد. انشاالله که هر چه خیر است همان شود.
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
    
    <select class="image-picker-9 show-html" id="image-picker-4" data-limit="9" multiple="multiple">

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



