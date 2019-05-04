<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);
if ($tags) {

$first_tag = $tags[0]->term_id;
$args=array(
'tag__in' => array($first_tag),
'post__not_in' => array($post->ID),
'posts_per_page'=>4,
'caller_get_posts'=>1
);
$my_query = new WP_Query($args); ?>
  <!-- Grid row -->
<?php
	
	if( $my_query->have_posts() ) {
	
	  echo '<h3>مطالب مرتبط</h3>';
}
	?>

	  <?php
if( $my_query->have_posts() ) {
	

	  
while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    
	      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		  		 <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid']); ?>
		  			

			 </a>
      </div>

   
      <!-- Post data -->
		<div class="title-post-related">
			      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title();?>
					  
			 </a>
		</div>



    </div>
    <!-- Grid column -->
 
<?php
endwhile;
	
}
	else { 	  echo '<h3>مطالب پربازدید</h3>';
 ?>
		
			      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://farmooon.com/?p=303" rel="bookmark" title="۷روش سریع استعلام و پرداخت جریمه و خلافی خودرو">
<img width="150" height="150" src="https://farmooon.ir/wp-content/uploads/2018/06/pay-ticket.jpg" class="img-fluid wp-post-image" >		  			

			 </a>
      </div>

   
      <!-- Post data -->
		<div class="title-post-related">
      <a href="https://farmooon.com/?p=303" rel="bookmark" title="۷روش سریع استعلام و پرداخت جریمه و خلافی خودرو">
<p>
	۷روش سریع استعلام و پرداخت جریمه و خلافی خودرو
		  </p>					  
			 </a>
		</div>



    </div>
		    <!-- Grid column -->

			      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://farmooon.com/?p=502" rel="bookmark" title="خرید طرح ترافیک ۹۸ (روزانه، هفتگی، ماهیانه، سالیانه)">
<img width="150" height="150" src="https://farmooon.com/wp-content/uploads/2018/07/tarh3.jpg" class="img-fluid wp-post-image" >		  			

			 </a>
      </div>

   
      <!-- Post data -->
		<div class="title-post-related">
      <a href="https://farmooon.com/?p=502" rel="bookmark" title="خرید طرح ترافیک ۹۸ (روزانه، هفتگی، ماهیانه، سالیانه)">
<p>
خرید طرح ترافیک ۹۸ (روزانه، هفتگی، ماهیانه، سالیانه)		  </p>					  
			 </a>
		</div>



    </div>
		    <!-- Grid column -->


			      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://farmooon.com/?p=364" rel="bookmark" title="استعلام و پرداخت خلافی موتور سیکلت با VIN
">
<img width="150" height="150" src="https://farmooon.com/wp-content/uploads/2018/07/motor.jpg" class="img-fluid wp-post-image" >		  			

			 </a>
      </div>

   
      <!-- Post data -->
		<div class="title-post-related">
      <a href="https://farmooon.com/?p=364" rel="bookmark" title="استعلام و پرداخت خلافی موتور سیکلت با VIN
">
<p>	استعلام و پرداخت خلافی موتور سیکلت با VIN
 </p>					  
			 </a>
		</div>



    </div>
		    <!-- Grid column -->
		
	<?php } 
wp_reset_query();
}
?>
	 