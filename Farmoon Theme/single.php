<?php get_header(); ?>
	


<!-- 
  <div class="bg-titlebar">
		<div class="container titlebar"> -->
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		
<!-- 		</div>
	</div> -->
  <div class="container">

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
		
			   				<div class="instagram-singlePost">
			
				    <a href="http://instagram.com/farmoun_khalafi" target="_blank"  class="btn-info" >
						<img src="https://farmooon.com/wp-content/uploads/2019/01/instagram-2.png" />
						اخبار ما را دراینستاگرام دنبال کنید
				
                 </a>
			</div>
	 
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
			   
		
				<div class="rate-post">
				
				 <?php if(function_exists('the_ratings')) { the_ratings(); } ?>
				</div>
			   
     <?php  if(is_single(4771)) { ?>
			   			   <div class="ads-farmooon-app">
		<a href="http://uzee.ir/farmooonir3" target="_blank"> <img src="https://farmooon.com/wp-content/uploads/2019/06/farmooon-post-2.jpg" /></a>
	
		</div>
			   <?php } else { ?>
			   
			   		   			   <div class="ads-farmooon-app">
		<a href="http://uzee.ir/farmooonir3" target="_blank"> <img src="https://farmooon.com/wp-content/uploads/2019/06/farmooon-post-2.jpg" /></a>
	
		</div>
			   
			   <?php } ?>
			   <div class="panel panel-default">

		<?php get_template_part( 'partials/related', 'page' ); ?>
		
			   </div>

	
<?php
	

	// If comments are open or we have at least one comment, load up the comment template.
	 if ( comments_open() || get_comments_number() ) {
		 comments_template();
	 }

?>
	
<div class="my_snippet">
			    <?php
			   
    echo apply_filters('my_snippet','display_rich_snippet');
    ?>
			   </div>
	</article>

	
<div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div>
		
</div>
	
</div>

<script>
// jQuery(document).ready(function($) {

//   if (window.history && window.history.pushState) {

//     $(window).on('popstate', function() {
//       var hashLocation = location.hash;
//       var hashSplit = hashLocation.split("#!/");
//       var hashName = hashSplit[1];

//       if (hashName !== '') {
//         var hash = window.location.hash;
//         if (hash === '') {
        
// 			window.location.replace("https://farmooon.com");
//         }
//       }
//     });

//     window.history.pushState('forward', null);
//   }

// });
</script>
<script>
jQuery(document).ready(function(){
$("table").addClass("table");
$("table").addClass("table-responsive");	
	$("table").addClass("table-striped ");
	
});
</script>
<?php get_footer(); ?>