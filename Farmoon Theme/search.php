<?php get_header(); ?>

<div class="container">
	


<!-- Section: Blog v.2 -->
<section class="text-center my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب مربوط به : <?php echo $s ?></h2>
 


  <!-- Grid row -->
  <div class="row">

<?php if (have_posts() ) : ?>
	  
    <?php while (have_posts() ) : the_post(); ?>
    <!-- Grid column -->
       <article id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-12 mb-lg-0 mb-4 post-arshive">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-2 mb-4">
        <a href="<?php the_permalink(); ?>">
		  		 <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
				 </a>

		 
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

   
      <!-- Post data -->
		
     <div class="post-title">
		 
		
		<h3>
			<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
		</h3>
		 </div>
      <!-- Excerpt -->
      <div class="dark-grey-tex excerpt-content"><?php the_excerpt(); ?></div>
      <!-- Read more button -->
      <a href="<?php the_permalink(); ?>" class="btn btn-primary">مشاهده</a>

</article>
    <!-- Grid column -->

   <?php endwhile; ?>
	  
	  <?php else: ?>
	  <h2 class="h1-responsive blog-title font-weight-bold my-5"> متاسفانه مطلبی یافت نشد </h2>
	  <?php endif ?>
   
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->

</div>
<?php get_footer(); ?>