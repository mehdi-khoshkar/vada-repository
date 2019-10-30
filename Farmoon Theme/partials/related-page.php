<?php

   $categories = get_the_category();

if($categories[1]->cat_ID)
{
   $category_id = $categories[1]->cat_ID;

}


else
{
  $category_id = $categories[0]->cat_ID;

} 


    $args = array (
'post_type'              => array( 'post' ),
'post_status'            => array( 'publish' ),
'cat'                    => array($category_id),
'meta_query'             => array(
    array(
        'key'       => 'meta-box-checkbox',
        'value'     => 'true',
    ),
),
);
$my_query = new WP_Query($args); 

if( !$my_query->have_posts() ){
    $args_main = array (
        'post_type'              => array( 'post' ),
        'post_status'            => array( 'publish' ),
        'cat'                    => array(8),
        'meta_query'             => array(
            array(
                'key'       => 'meta-box-checkbox',
                'value'     => 'true',
            ),
        ),
        );
        $my_query = new WP_Query($args_main); 

} 

?>
    <?php
    
    if(!is_single(303)){
	if( $my_query->have_posts() ) { ?>

            <div class="panel-heading">
                <h3>مطالب ویژه</h3>
            </div>

            <?php }
	?>

                <?php
if( $my_query->have_posts() ) { ?>
	

	    <div class="owl-carousel owl-special-single owl-theme">

	  
<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                    <div class="item">
                       <div class="card">
                            <!-- Featured image -->
                            <div class="view overlay rounded z-depth-2 mb-4">
                                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                <?php  the_post_thumbnail( 'thumbnail', ['class' => 'card-img-top'] ); ?>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-title">
                                    <!-- Post data -->
                                    <div class="title-post-related">
                                        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
                                            <?php the_title();?>

                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>



                    <?php
endwhile;
	?>
            </div>
        <?php

}
wp_reset_query();

    }
	
?>