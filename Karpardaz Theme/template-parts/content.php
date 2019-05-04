	  <?php
	  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
   
	   $categories = get_the_category();
$category_id = $categories[1]->cat_ID;
	  	$args = array('post_type' => 'post','posts_per_page' => 9,'paged' => $paged,'cat'=>$category_id);
			
			$loop = new WP_Query( $args ); 
	  
	  ?>
<?php if ( $loop->have_posts() ) : ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
	  

<?php wp_reset_postdata();?>
	  <?php endif ?>
   











