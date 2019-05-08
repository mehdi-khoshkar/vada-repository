<?php /* Template Name: FaleTarot Ten */ ?>

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
<img src="https://asheghnameh.com/wp-content/uploads/2019/05/cart10.png" alt="">
</center>
<h2 class="h1-responsive blog-title text-center font-weight-bold my-5"> فال تاروت ده  کارتی</h2>
<p>
فال تاروت ده کارتی ، همانطور که از اسمش پیداست بایستی 10 کارت تاروت را انتخاب نمایید ، مشاهده شده که برخی سایت ها اینکار را به صورت اتوماتیک انجام می دهند که اساسا غلط است و حتما بایستی کارت ها توسط شخص انتخاب شوند تا فال تاروت شخص به درستی به نمایش در بیاید که اگر اتوماتیک انتخاب شوند ، در اصل فال تاروت سیستم را نمایش می دهد و نه شخصی که قصد گرفتن فال تاروت واقعی برای خود دارد.کارت اول فال تاروت موقعیت و جایگاه فعلی شما را نشان می دهد و کارت دوم فال تاروت به شما می گوید چه موانع و اتفاقاتی پیش روی شماست ، به نوعی از آینده ای نزدیک خبر می دهد ، کارت سوم فال تاروت ، اتفاقاتی را نشان می دهد که قبلا افتاده اما در موقعیت فعلی شما بی تاثیر نبوده است ، کارت چهارم فال تاروت بیان می کند رخدادی را که به وقوع پیوسته و الان درحال پایان یافتن است ، کارت پنجم فال تاروت ، از اهداف و مقصد نیت شما می گوید ، کارت ششم اما از آینده خبر می دهد که چه خواهد شد ، کارت هفتم فال تاروت یک کارت احساسی است و از احساسات شما خواهد گفت ، کارت هشتم به شما خواهد گفت اگر نیت خود را عملی سازید چه تاثیری روی دوستان و خانواده تان خواهد داشت ، کارت نهم فال تاروت نیز یک کارت احساسی است و در نهایت آخرین کارت یعنی کارت دهم فال تاروت شما را از نتیجه ی نیتتان آگاه می سازد.
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
    
    <select class="image-picker-10 show-html" id="image-picker-10" data-limit="10" multiple="multiple">

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



