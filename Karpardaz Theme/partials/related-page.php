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
	
	if( $my_query->have_posts() ) { ?>

            <div class="panel-heading">
                <h3>مطالب مرتبط</h3>
            </div>

            <?php }
	?>

                <?php
if( $my_query->have_posts() ) { ?>
			
			            <div class="panel-body row">

	

	  
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <!-- Grid column -->
                    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">
                       <div class="card">
                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail('array(150, 150)', ['class' => 'card-img-top']); ?>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <!-- Post data -->
                                    <div class="title-post-related">
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                            <?php the_title();?>

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <!-- Grid column -->



                    <?php
endwhile;
	?>
            </div>
        <?php
}
	else { 	  echo '<div class="panel-heading"><h3>مطالب پربازدید</h3></div>';
 ?>
	
<div class="panel-body row">
			      <!-- Grid column -->
	

	
	
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

	                <div class="card">
                    <!-- Featured image -->
                  <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://kaarpardaz.com/2018/11/14/%D9%88%D8%A7%D9%85-%D8%A8%D8%AF%D9%88%D9%86-%D8%B3%D9%BE%D8%B1%D8%AF%D9%87-%D9%81%D9%88%D8%B1%DB%8C-%D8%A8%D8%A7%D9%86%DA%A9-%D9%85%D9%87%D8%B1-%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/" rel="bookmark" title="وام بدون سپرده فوری بانک مهر اقتصاد">
<img width="150" height="150" src="https://kaarpardaz.com/wp-content/uploads/2018/11/mehreghtesad.jpg" class="img-fluid card-img-top wp-post-image" >		  			

			 </a>
      </div>
						
                    <div class="card-body">
                        <div class="card-title">

                            <a href="https://kaarpardaz.com/2018/11/14/%D9%88%D8%A7%D9%85-%D8%A8%D8%AF%D9%88%D9%86-%D8%B3%D9%BE%D8%B1%D8%AF%D9%87-%D9%81%D9%88%D8%B1%DB%8C-%D8%A8%D8%A7%D9%86%DA%A9-%D9%85%D9%87%D8%B1-%D8%A7%D9%82%D8%AA%D8%B5%D8%A7%D8%AF/" rel="bookmark" title="وام بدون سپرده فوری بانک مهر اقتصاد">
<p>
وام بدون سپرده فوری بانک مهر اقتصاد

		  </p>					  
			 </a>
                        </div>

                    </div>
                </div>



    </div>
		    <!-- Grid column -->

			      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

<div class="card">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://kaarpardaz.com/2018/12/29/%D9%86%D8%AD%D9%88%D9%87-%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA-%DA%A9%D8%AF-%D9%85%D9%84%DB%8C/" rel="bookmark" title="نحوه دریافت کد ملی
">
<img width="150" height="150" src="https://kaarpardaz.com/wp-content/uploads/2018/12/%D9%81%D8%B1%D9%85%D9%88%D9%84-%D8%A8%D8%AF%D8%B3%D8%AA-%D8%A2%D9%88%D8%B1%D8%AF%D9%86-%DA%A9%D8%AF-%D9%85%D9%84%DB%8C.jpg" class="img-fluid card-img-top  wp-post-image" >		  			

			 </a>
      </div>

						
                    <div class="card-body">
                        <div class="card-title">


      <a href="https://kaarpardaz.com/2018/12/29/%D9%86%D8%AD%D9%88%D9%87-%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA-%DA%A9%D8%AF-%D9%85%D9%84%DB%8C/" rel="bookmark" title="نحوه دریافت کد ملی
">
<p>
نحوه دریافت کد ملی

		  </p>					  
			 </a>
	

                        </div>

                    </div>
                </div>



    </div>
		    <!-- Grid column -->


			      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

<div class="card">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
      <a href="https://kaarpardaz.com/2018/10/17/%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA-%D9%87%D8%AF%DB%8C%D9%87-%D8%A7%D8%B2%D8%AF%D9%88%D8%A7%D8%AC-%D8%AA%D8%A7%D9%85%DB%8C%D9%86-%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%DB%8C/" rel="bookmark" title="هدیه ازدواج تامین اجتماعی (راهنمای دریافت)">
<img width="150" height="150" src="https://kaarpardaz.com/wp-content/uploads/2018/10/%DA%A9%D9%85%DA%A9-%D9%87%D8%B2%DB%8C%D9%86%D9%87-%D8%A7%D8%B2%D8%AF%D9%88%D8%A7%D8%AC-%D8%AA%D8%A7%D9%85%DB%8C%D9%86-%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%DB%8C-1.jpg" class="img-fluid card-img-top  wp-post-image" >		  			

			 </a>
      </div>


						
                    <div class="card-body">
                        <div class="card-title">


      <a href="https://kaarpardaz.com/2018/10/17/%D8%AF%D8%B1%DB%8C%D8%A7%D9%81%D8%AA-%D9%87%D8%AF%DB%8C%D9%87-%D8%A7%D8%B2%D8%AF%D9%88%D8%A7%D8%AC-%D8%AA%D8%A7%D9%85%DB%8C%D9%86-%D8%A7%D8%AC%D8%AA%D9%85%D8%A7%D8%B9%DB%8C/" rel="bookmark" title="هدیه ازدواج تامین اجتماعی (راهنمای دریافت)">
<p>
هدیه ازدواج تامین اجتماعی (راهنمای دریافت)
 </p>					  
			 </a>
	

                        </div>

                    </div>
                </div>



    </div>
		    <!-- Grid column -->
	</div>	
	<?php } 
wp_reset_query();
}
?>
	 