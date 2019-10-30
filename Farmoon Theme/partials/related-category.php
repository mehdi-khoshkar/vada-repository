<?php 
if(is_single(303)) {
    $category_name = 'استعلام خلافی خودرو';  
} 
if(is_single(502)) {
    $category_name = 'طرح ترافیک و زوج و فرد';  
} 
if(is_single(540)) {
    $category_name = 'معاینه فنی';  
} 
if(is_single(1438)) {
    $category_name = 'کارت سوخت';  
} 
if(is_single(552)) {
    $category_name = 'تعویض پلاک';  
} 

if(is_single(1168)) {
    $category_name = 'اخبار';  
} 
if(is_single(386)) {
    $category_name = 'استعلام خلافی خودرو';  
}

 ?>



<section class="col-lg-12  background  col-md-12 col-sm-12 col-xs-12 custom_tag no-pad">

<div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading heading-default"><span class="blink">آخرین اخبار<span></div>
  <div class="panel-body">
   

		   <ul class="p_t_list">
       <?php
       
           $args = array(
            'posts_per_page' => 10,
            'post_type'      => 'post',
            'category_name'  => $category_name,
            'orderby'        => 'date',
            'order'          => 'DESC'
            );
            $loop = new WP_Query( $args ); 
        ?>
        <?php if ( $loop->have_posts() ) : ?>
    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
               <li class="title">
                   <a href="<?php the_permalink(); ?>">
                   <?php the_title();?> 
                    </a>
                    <span class="date"><?php echo get_the_date(); ?></span> 
            </li>

                <?php endwhile; ?>
	  

      <?php wp_reset_postdata();?>
            <?php endif ?>
        </ul>
        </div>

</div>
         
 </section>



 