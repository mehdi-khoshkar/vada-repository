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





			
					<div class="entry-meta">
							<span class="date">
							<i class="fas fa-clock"></i>
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>" rel="bookmark">
								<time class="entry-date" datetime="<?php echo get_the_date('c'); ?>"> <?php echo get_the_date( 'l j F, Y' ); ?></time></a></span>
								<span class="categories-links">
								<i class="fas fa-folder-open"></i>
									<?php
								$categories = get_the_category();
if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
}									?>
</span>
								<span class="tags-links"><i class="fas fa-tag"></i> <a href="" rel="tag"><?php the_tags( 'برچسب ها: ', ', ' );  ?></a></span>
                        <span class="author vcard">
												<i class="fas fa-user-tie"></i>
													<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"  rel="author"><?php the_author(); ?></a>
												</span>           
					 </div><!-- .entry-meta -->




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