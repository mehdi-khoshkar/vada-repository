<?php get_header(); ?>

<div class="container">
	


<!-- Section: Blog v.2 -->
<section class="text-center my-5 arshive-blog">
<?php if (have_posts() ) : ?>
	
  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب مربوط به : <?php echo $s ?></h2>
 


  <!-- Grid row -->
  <div class="row">


	  
	
    <?php while (have_posts() ) : the_post(); ?>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        
		  		 <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>

		 
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

   
      <!-- Post title -->
      <h4 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h4>
      <!-- Post data -->
		

      <p>منتشر شده در تاریخ :   <?php echo get_the_date('l  j F, Y' );?></p>
      <!-- Excerpt -->
      <p class="dark-grey-text"><?php the_excerpt(); ?></p>
      <!-- Read more button -->
      <a href="<?php the_permalink(); ?>" class="btn btn-pink btn-rounded btn-md">مشاهده</a>

    </div>
    <!-- Grid column -->

   <?php endwhile; ?>
	  
	  <?php else:?>
	    <h2 class="h1-responsive blog-title font-weight-bold my-5"> متاسفانه کلمه مورد نظر "<?php echo $s ?>" یافت نشد</h2>

	  <?php endif ?>
   
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->

</div>
<?php get_footer(); ?>