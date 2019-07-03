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


		<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
دانلود فرمون</button> -->

<!-- Modal -->
 <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">دانلود فرمون | استعلام خلافی </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<a href="http://uzee.ir/farmooonir" class="btn btn-primary">دانلود مستقیم</a>
		  
		   <a class="btn btn-primary" target="_blank" rel="nofollow" href="tg://msg_url?url=http://uzee.ir/farmooonir&text=دانلود فرمون | استعلام خلافی">
اشتراک در تلگرام	 
		  </a>
		  
<a href="https://api.whatsapp.com/send?text=دانلود فرمون | استعلام خلافی - http://uzee.ir/farmooonir" class="btn btn-primary"  > اشتراک در واتس اپ </a>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
      </div>
    </div>
  </div>
</div> 
		

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