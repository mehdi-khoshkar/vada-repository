<?php
/*
Plugin Name:  پاپ آپ

Author: Vada

*/

require_once('factory.php');
 // create post type popup 



function create_popup() {
    register_post_type( 'popup',
        array(
            'labels' => array(
                'name' => 'پاپ آپ ',
                'singular_name' => 'popup',
                'add_new' => 'افزودن پاپ آپ جدید',
                'add_new_item' => ' افزودن پاپ آپ جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش پاپ آپ',
                'new_item' => 'پاپ آپ  جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش پاپ آپ ',
                'search_items' => 'جستجوی پاپ آپ ',
                'not_found' => 'پاپ آپی یافت نشد',
                'not_found_in_trash' => 'پاپ آپی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent popup'
            ),
 
            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor', 'revisions','custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'popup/images/popup.png'),
            'has_archive' => true
        )
    );
	
     
}


add_action( 'init', 'create_popup' );



function popup_enqueue_script() {   
    wp_enqueue_style( 'sweetalert2', plugin_dir_url( __FILE__ ) . 'popup.css' );
    wp_enqueue_script( 'sweetalert2', plugin_dir_url( __FILE__ ) . 'sweetalert2.all.min.js' );


}
add_action('wp_enqueue_scripts', 'popup_enqueue_script');





add_action( 'wp_head', 'my_header_scripts' );
function my_header_scripts(){

    $my_postid = 2785;//This is page id or post id
    $content_post = get_post($my_postid);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', '<div id="popup_container" style="display:none;">'.$content.'</div>');
    echo $content;

    if(!is_front_page() && !isset($_COOKIE['asheghnameh'])){
  ?>
  <script>
  
  jQuery( document ).ready(function() {
    if (-1 === document.cookie.indexOf('returning_asheghnameh')) {

        var content_popup = $( "#popup_container" ).html();
  Swal.fire({

  html:content_popup,
  showCloseButton: true,
  showCancelButton: false,
  focusConfirm: false,
  confirmButtonText:
    'ممنون',

})
document.cookie = 'asheghnameh=returning_asheghnameh;  max-age=86400;path=/;'


    }

});
  
</script>


  <?php
}
}



