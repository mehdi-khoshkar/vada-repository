<?php get_header(); ?>
	


<!-- 
  <div class="bg-titlebar">
		<div class="container titlebar">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<h1 class="entry-title"><?php the_title(); ?> </h1>			
	
		

		</div>
	</div> -->
  <div class="container single-blog">

<div class="row">
	       <article id="post-<?php the_ID(); ?>" class="col-lg-8 col-md-8 col-xs-12">




	<section id="main-blog">
				<div class="single-post-thumbnail">
					<?php	the_post_thumbnail('post-full', ['class' => 'thubmnail-single']); ?>
	
		</div>
      <div class="single-title">

						<h1 class="entry-title"><?php the_title(); ?> </h1>			

           		<?php
		$updated_day = get_the_modified_time('y/m/d');
$modified_content .= '<div class="last-modified">( آخرین به روزرسانی :  '. $updated_day . ' ) </div>';
		echo $modified_content;
		?>


		</div>
			





					 <div class="entry-content">

						<?php the_content(); ?>
					 </div>


		
					 <?php endwhile; ?>
   
	 <?php endif; ?>
	 
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
	 echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a> ,';
    echo '<a href="' . esc_url( get_category_link( $categories[1]->term_id ) ) . '">' . esc_html( $categories[1]->name ) . '</a>';
}									?>
</span>
						
						<?php $post_tags = get_the_tags(); ?>
						<?php if ( $post_tags ) { ?>
								<span class="tags-links"><i class="fas fa-tag"></i> <a href="" rel="tag"><?php the_tags( 'برچسب ها: ', ', ' );  ?></a></span>
						<?php } ?>
<!--                         <span class="author vcard">
												<i class="fas fa-user-tie"></i>
													<a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php echo esc_attr( get_the_author() ); ?>"  rel="author"><?php the_author(); ?></a>
												</span>            -->
					 </div><!-- .entry-meta -->

	</section>
			   

			   
			   <div class="panel panel-default">
		<?php get_template_part( 'partials/related', 'page' ); ?>
			</div>
		


<?php
	

	// If comments are open or we have at least one comment, load up the comment template.
	 if ( comments_open() || get_comments_number() ) {
		 comments_template();
	 }

?>
	
	
	</article>
	
	

	
<?php
	
	global $wpdb;
	
	$result = $wpdb->get_results( "SELECT * FROM wp_posts WHERE post_content LIKE '%sg_popup%'" );
  if (!$result){
	  
				// Use shortcodes in form like Landing Page Template.
echo do_shortcode( '[sg_popup id="1107" event="inherit"][/sg_popup]' );

  }



	
			?>
	
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
		
		</div>
	</section>
	</div>
		
</div>
	


</div>



<script>

jQuery(document).ready(function(){
$("table").addClass("table");
$("table").addClass("table-responsive");	
	$("table").addClass("table-striped ");
	
});
</script>

<?php get_footer(); ?>