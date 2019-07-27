<?php /* Template Name: Picture Love */ ?>

<?php get_header();  ?>

<div class="container">

<h2 class="font-weight-bold my-5 text-center">عکس عاشقانه</h2>


<!-- First row -->
<div class="row">

  <!-- First column -->
  <div class="col-md-12">

    <div id="mdb-lightbox-ui"></div>

    <div class="mdb-lightbox">

	  <?php

 	  	$args = array('post_type' => 'gallery');
			
		$loop = new WP_Query( $args ); 
	  
	  ?>
<?php if ( $loop->have_posts() ) : ?>
    <?php while ($loop->have_posts() ) : $loop->the_post(); ?>

    <figure class="col-md-4">
        <a href="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" data-size="1000x800">
          <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>" class="img-fluid">
        </a>
        <figcaption>
        <?php echo get_post_meta( get_the_ID(),'caption_gallery',true ); ?>
        </figcaption>
      </figure>
      

      <?php endwhile; ?>
	  
	  <?php endif ?>
   

    </div>

  </div>
  <!-- First column -->

</div>
<!-- First row -->


	

</div>
<script>
// MDB Lightbox Init
jQuery(function () {
$("#mdb-lightbox-ui").load("https://asheghnameh.com/wp-content/themes/Omen/mdb-addons/mdb-lightbox-ui.html");
});
</script>





<?php get_footer();  ?>