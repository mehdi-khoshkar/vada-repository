<?php
//for use in the loop, list 5 post titles related to first tag on current post
$tags = wp_get_post_tags($post->ID);


$first_tag = $tags[0]->term_id;
$args=array(
'post__not_in' => array($post->ID),
'post_type' => 'dream',
'posts_per_page'=>4,
'caller_get_posts'=>1,
	'orderby' => 'rand',
);
$my_query = new WP_Query($args); ?>
  <!-- Grid row -->
<?php
	
	if( $my_query->have_posts() ) {
	
	  echo '<h3>تعبیر خواب پیشنهادی</h3>';
}
	?>

	  <?php
if( $my_query->have_posts() ) { ?>

<div class="row">
	
	
<?php
	  
while ($my_query->have_posts()) : $my_query->the_post(); ?>
	    
	      <!-- Grid column -->
    <div class="col-lg-3 col-md-3 col-xs-12 mb-lg-0 mb-4 ">

      <!-- Featured image -->
 
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
		  		 <?php the_post_thumbnail('thumbnail', ['class' => 'img-fluid']); ?>
		  			

			 </a>
   
   
      <!-- Post data -->
		<div class="title-post-related">
			      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
			<?php the_title();?>		  
			 </a>
			<?php the_excerpt(); ?>
		</div>



    </div>
    <!-- Grid column -->

<?php
endwhile;
	
}
	
wp_reset_query();

?>
	 </div>
 