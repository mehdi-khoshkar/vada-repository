<?php
function omen_register_nav_menu() {
    register_nav_menu('primary','Header navigation menu');
    register_nav_menu('Footer','footer navigation menu');
}
add_action('after_setup_theme','omen_register_nav_menu');

add_theme_support( 'post-thumbnails');



add_filter( 'get_comment_author_link', 'rv_remove_comment_author_link', 10, 3 );
function rv_remove_comment_author_link( $return, $author, $comment_ID ) {
	return $author;
}



function pagination_bar( $custom_query ) {

    $total_pages = $custom_query->max_num_pages;
    $big = 999999999; // need an unlikely integer

    if ($total_pages > 1){
        $current_page = max(1, get_query_var('paged'));

        echo paginate_links(array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => $current_page,
            'total' => $total_pages,
        ));
    }
	
	$output = '';

    if ( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var( 'paged' );

        $output .=  '<ul class="pagination">';
        foreach ( $pages as $page ) {
            $output .= "<li>$page</li>";
        }
        $output .= '</ul>';

        // Create an instance of DOMDocument 
        $dom = new \DOMDocument();

        // Populate $dom with $output, making sure to handle UTF-8, otherwise
        // problems will occur with UTF-8 characters.
        $dom->loadHTML( mb_convert_encoding( $output, 'HTML-ENTITIES', 'UTF-8' ) );

        // Create an instance of DOMXpath and all elements with the class 'page-numbers' 
        $xpath = new \DOMXpath( $dom );

        // http://stackoverflow.com/a/26126336/3059883
        $page_numbers = $xpath->query( "//*[contains(concat(' ', normalize-space(@class), ' '), ' page-numbers ')]" );

        // Iterate over the $page_numbers node...
        foreach ( $page_numbers as $page_numbers_item ) {

            // Add class="mynewclass" to the <li> when its child contains the current item.
            $page_numbers_item_classes = explode( ' ', $page_numbers_item->attributes->item(0)->value );
            if ( in_array( 'current', $page_numbers_item_classes ) ) {          
                $list_item_attr_class = $dom->createAttribute( 'class' );
                $list_item_attr_class->value = 'mynewclass';
                $page_numbers_item->parentNode->appendChild( $list_item_attr_class );
            }

            // Replace the class 'current' with 'active'
            $page_numbers_item->attributes->item(0)->value = str_replace( 
                            'current',
                            'active',
                            $page_numbers_item->attributes->item(0)->value );

            // Replace the class 'page-numbers' with 'page-link'
            $page_numbers_item->attributes->item(0)->value = str_replace( 
                            'page-numbers',
                            'page-link',
                            $page_numbers_item->attributes->item(0)->value );
        }

        // Save the updated HTML and output it.
        $output = $dom->saveHTML();
    }

    return $output;
}




/*Register tag cloud filter callback*/

add_filter('widget_tag_cloud_args', 'tag_widget_limit');
 
//Limit number of tags inside widget
function tag_widget_limit($args){
 
//Check if taxonomy option inside widget is set to tags
if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
  $args['number'] = 10; //Limit number of tags
}
 
return $args;
}


function custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );








function misha_my_load_more_scripts() {
 
	global $wp_query; 
 
	// In most cases it is already included on the page and this line can be removed
	wp_enqueue_script('jquery');
 
	// register our main script but do not enqueue it yet
	wp_register_script( 'my_loadmore', get_template_directory_uri() . '/js/myloadmore.js', array('jquery') );
 
	// now the most interesting part
	// we have to pass parameters to myloadmore.js script but we can get the parameters values only in PHP
	// you can define variables directly in your HTML but I decided that the most proper way is wp_localize_script()
	wp_localize_script( 'my_loadmore', 'misha_loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 
 	wp_enqueue_script( 'my_loadmore' );
}
 
add_action( 'wp_enqueue_scripts', 'misha_my_load_more_scripts' );


function misha_loadmore_ajax_handler(){
 
	// prepare our arguments for the query
	$args = json_decode( stripslashes( $_POST['query'] ), true );
	$args['paged'] = $_POST['page']+1 ; // we need next page to be loaded
	$args['post_status'] = 'publish';
	
	

	
 
	// it is always better to use WP_Query but not here
	query_posts( $args );
 
	if( have_posts() ) :
 
		// run the loop
		while( have_posts() ): the_post();
 
			// look into your theme code how the posts are inserted, but you can use your own HTML of course
			// do you remember? - my example is adapted for Twenty Seventeen theme
			get_template_part( 'template-parts/post/content', get_post_format() );
			// for the test purposes comment the line above and uncomment the below one
			// the_title();
 
 
		endwhile;
 
	endif;
	die; // here we exit the script and even no wp_reset_query() required!
}
 
 
 
add_action('wp_ajax_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_{action}
add_action('wp_ajax_nopriv_loadmore', 'misha_loadmore_ajax_handler'); // wp_ajax_nopriv_{action}







remove_action( 'wp_head', 'feed_links_extra', 3 ); // Display the links to the extra feeds such as category feeds
remove_action( 'wp_head', 'feed_links', 2 ); // Display the links to the general feeds: Post and Comment Feed
remove_action( 'wp_head', 'rsd_link' ); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action( 'wp_head', 'wlwmanifest_link' ); // Display the link to the Windows Live Writer manifest file.
remove_action( 'wp_head', 'index_rel_link' ); // index link
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); // prev link
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // start link
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 ); // Display relational links for the posts adjacent to the current post.
remove_action( 'wp_head', 'wp_generator' ); // Display the XHTML generator that is generated on the wp_head hook, WP version