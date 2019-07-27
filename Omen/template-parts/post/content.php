
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

