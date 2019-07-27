<?php get_header();  ?>

<div class="container">
	

<!-- Section: Blog v.4 -->
<section class="section-single-falday">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-8 col-md-8 col-xs-12">
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
		
      <!-- Card -->
      <div class="card card-cascade wider reverse">

        <!-- Card image -->
        <div class="view overlay">
        <?php if(in_category( 'فال روزانه' )){ ?>
       <img class="card-img-top" src="https://asheghnameh.com/wp-content/uploads/2019/04/daily-fal.jpg" alt="فال روزانه"> 

			
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        <?php } if(in_category('فال pmc')){?>
    <img class="card-img-top" src="https://asheghnameh.com/wp-content/uploads/2019/05/pmc-fal-compressor.png" alt="فال pmc"> 

			
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        <?php } ?>
			

<?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top"']); ?>

			
          <a href="<?php echo get_permalink();?>">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">

      

          <!-- Title -->
          <h2 class="font-weight-bold"><a><?php the_title(); ?></a></h2>
          <!-- Data -->


        </div>
        <!-- Card content -->

      </div>
      <!-- Card -->

      <!-- Excerpt -->
      <div class="mt-5">
               <?php  the_content(); ?>

      </div>
  
      <div class="card text-white bg-success my-5">
<div class="card-body">
<p class="card-text text-white">انواع فال و طالع بینی (فال حافظ روزانه، استخاره ازدواج،فال ماه و سال تولد، فال ابجد، فال انبیاء و ... ) در اپلیکیشن عاشقنامه</p>
<p style="text-align: center;"><a class="btn btn-light-ads green-text font-weight-bold wow fadeIn waves-effect waves-light" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.3s;" href="https://uzee.ir/asheghnamehsite" data-wow-delay="0.3s">دانلود مستقیم عاشقنامه</a></p>
</div>
</div>
    </div>
    <!-- Grid column -->

<div class="col-lg-4 col-md-4 col-xs-12">
     <?php get_sidebar(); ?>
</div> 

  </div>
  <!-- Grid row -->

 



</section>
<!-- Section: Blog v.4 -->


	
		<div class="card-body card-body-cascade text-center">
			   
      
   <?php the_tags( 'برچسب ها: ', ', ' ); ?>

       
</div>	

	



		<?php
	

			// If comments are open or we have at least one comment, load up the comment template.
 			if ( comments_open() || get_comments_number() ) {
 				comments_template();
 			}
	
	?>
	
	  <?php endwhile; ?>
<?php endif; ?>
	


	 </div>

<script>
jQuery(document).ready(function(){
$("table").addClass("table");
$("table").addClass("table-responsive");	
	$("table").addClass("table-striped ");
	
});
</script>


<?php  get_footer(); ?>