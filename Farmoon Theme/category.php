<?php get_header(); ?>

<div class="container">
	

<!-- Section: Blog v.2 -->
<section id ="arshive" class="text-center my-5 ">
	<?php

	?>
  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب مربوط به : <?php single_tag_title(); ?></h2>
 
 

  <!-- Grid row -->
  <div class="row">
	   <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
	  


  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->

</div>
<?php get_footer(); ?>