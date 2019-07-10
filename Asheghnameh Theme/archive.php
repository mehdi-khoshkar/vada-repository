<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<div class="container">
	

<!-- Section: Blog v.2 -->
<section class="text-center my-5 arshive-blog">

  <!-- Section heading -->
  <h2 class="h1-responsive blog-title font-weight-bold my-5">مطالب مربوط به : <?php single_tag_title(); ?></h2>
 
 

  <!-- Grid row -->
  <div class="row">

<?php if ( have_posts() ) : ?>
    <?php while (have_posts() ) : the_post(); ?>
    <!-- Grid column -->
    <div class="col-lg-4 col-md-12 mb-lg-0 mb-5">

      <!-- Featured image -->
		<a href="<?php the_permalink(); ?>" >
      <div class="view overlay rounded z-depth-2 mb-4">
        <?php if(is_category( 'فال روزانه' )){ ?>
          <img class="card-img-top" src="https://asheghnameh.com/wp-content/uploads/2019/04/daily-fal.jpg" alt="فال روزانه"> 

		 
     
          <div class="mask rgba-white-slight"></div>
                 <?php }  ?>
                 <?php if(is_category( 'متن عاشقانه جدید' )){ ?>
          <img class="card-img-top" src="https://asheghnameh.com/wp-content/uploads/2019/06/jadid-compressor.jpg" alt="متن عاشقانه جدید"> 

<div class="mask rgba-white-slight"></div>

        <?php } ?>
		  

      </div>
 </a>
   
      <!-- Post title -->
				<a href="<?php the_permalink(); ?>" >

      <h4 class="font-weight-bold mb-3"><strong><?php the_title(); ?></strong></h4>
		</a>
      <!-- Post data -->
		

<!--       <p>منتشر شده در تاریخ :   <?php echo get_the_date('l  j F, Y' );?></p> -->
      <!-- Excerpt -->
      <p class="dark-grey-text"><?php the_excerpt(); ?></p>
      <!-- Read more button -->
      <a href="<?php the_permalink(); ?>" class="btn btn-pink btn-rounded btn-md">مشاهده</a>

    </div>
    <!-- Grid column -->

   <?php endwhile; ?>
	  <?php the_posts_pagination(   array(
                'mid_size'           => 1,
                'prev_text'          => _x( 'Previous', 'previous set of posts' ),
                'next_text'          => _x( 'Next', 'next set of posts' ),
                'screen_reader_text' => __( ' ' ),
            )); ?>
	  
<?php wp_reset_postdata();?>
	  
	  <?php else : ?>
	  
	  <h2>
		  مطلبی یافت نشد
	  </h2>
	  <?php endif ?>
   
  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.2 -->


	
</div>
<?php get_footer(); ?>