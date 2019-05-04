<?php get_header(); ?>
	



  <div class="bg-titlebar">
		<div class="container titlebar">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1 class="entry-title"><?php the_title(); ?> </h1>			
	
		

		</div>
	</div>
  <div class="container">

<div class="row">
	
	<div class="col-lg-8  col-md-8 col-xs-12">



	<section id="main-blog">
				
	<?php	the_post_thumbnail('post-full', ['class' => 'thubmnail-single']); ?>







					 <div class="entry-content">

						<?php the_content(); ?>
					 </div>


		
					 <?php endwhile; ?>
   
	 <?php endif; ?>
	 

	</section>

</div>
<div class="col-lg-4 col-md-4 col-xs-12">
	<section id="sidebar-blog">
			<div class="sidebar-inner">
   <aside>

	 <?php if ( is_active_sidebar( 'sidebar-blog' ) ) { ?>
    <ul id="sidebar">
        <?php dynamic_sidebar('sidebar-blog'); ?>
    </ul>
<?php } ?>

	 </aside>
		

	</section>
	</div>
		
</div>
	

	
<?php
	

	// If comments are open or we have at least one comment, load up the comment template.
	 if ( comments_open() || get_comments_number() ) {
		 comments_template();
	 }

?>
</div>

<?php get_footer(); ?>