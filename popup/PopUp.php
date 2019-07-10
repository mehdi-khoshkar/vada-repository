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



function my_popup() {
    add_meta_box( 'popup_meta_box',
        'تنظیمات پاپ آپ',
        'display_popup_meta_box',
        'popup', 'normal', 'high'
    );
}

add_action( 'admin_init', 'my_popup' );





function display_popup_meta_box( $popup ) {

   
    $type_popup = esc_html( get_post_meta( $popup->ID, 'type_popup ', true ) );

    $meta = get_post_meta(get_the_ID(), 'type_popup', true);

    if($meta == 'all'){
        $checked_all ='checked';
    }
    if($meta == 'all_post'){
        $checked_post ='checked';
    }
    if($meta == 'all_page'){
        $checked_page ='checked';
    }
    
$html = '<input type="radio" id="type_popup" name="type_popup" value="all" '.$checked_all .'/>';
    $html .= '<label for="type_popup">تمام صفحات</label>';
 
    echo $html;

    $html = '<input type="radio" id="type_popup" name="type_popup" value="all_post" '.$checked_post .'/>';
    $html .= '<label for="type_popup"> تعبیر خواب</label>';
    echo $html;

    
    $html = '<input type="radio" id="type_popup" name="type_popup" value="all_page" '.$checked_page .'/>';
    $html .= '<label for="type_popup"> برگه ها</label>';
    echo $html;
  
   
}


function add_popup_fields( $popup_id, $popup) {
    // Check post type for channel
   
    if ( $popup->post_type == 'popup' ) {
        // Store data in post meta table if present in post data
      
        if ( isset( $_POST['type_popup'] ) && $_POST['type_popup'] != '' ) {
            update_post_meta( $popup_id, 'type_popup', $_POST['type_popup'] );
           
        }
    }
  
    
}


add_action( 'save_post', 'add_popup_fields', 10, 2 );









add_action( 'wp_head', 'my_header_scripts' );
function my_header_scripts(){

    global $wpdb;
    $table_name = $wpdb->prefix.'postmeta';
    $result = $wpdb->get_results ( "
    SELECT * FROM $table_name WHERE meta_key = 'type_popup'
    " );
   
    set_valid($result);
?>
    <script>   
 
 function set_cookie(website) {

var cookie_name = website;
 if (-1 === document.cookie.indexOf(cookie_name)) {

     var content_popup = $( "#popup_container" ).html();
     setTimeout(function(){ 
 Swal.fire({

 html:content_popup,
 showCloseButton: true,
 showCancelButton: false,
 focusConfirm: false,
 confirmButtonText:
 'ممنون',

 })
 }, 3000);
 document.cookie = cookie_name +'=returning_'+cookie_name+';max-age=86400;path=/;'


 }
 }
 </script>

 <?php


}
    


function set_valid($result){

      
    global $wpdb;
    $table_name = $wpdb->prefix.'postmeta';
    $result = $wpdb->get_results ( "SELECT * FROM $table_name WHERE meta_key = 'type_popup' " );

        foreach ( $result as $popup ){
 

               if($popup->meta_value == 'all')
                    {
                    
                    if(!is_front_page() && !is_singular('dream') && !isset($_COOKIE['asaay']) ){ 
                    content_popup($popup->post_id)
                    ?>
                        <script>  
            
                    jQuery( document ).ready(function() {   
                                set_cookie('asaay'); 
                            });
                                </script>
            
                <?php   }  }

                if($popup->meta_value == 'all_post')
                {

                if(!is_front_page()  && is_singular('dream') && !isset($_COOKIE['asaay_post']) ){ 
                  content_popup($popup->post_id) ?>
                    <script>  

                    jQuery( document ).ready(function() {   
                                set_cookie('asaay_post'); 
                            });
                    </script>
                <?php  } }
                    if($popup->meta_value == 'all_page')
                    {

                    if(!is_front_page() && is_page() && !isset($_COOKIE['asaay_page']) ){ 

                  content_popup($popup->post_id) ?>
                        <script>  

                        jQuery( document ).ready(function() {   
                                    set_cookie('asaay_page'); 
                                });
                        </script>

                    <?php } }


        }


      
    
}


function content_popup($popup_id){

    $content_post = get_post($popup_id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', '<div id="popup_container"style="display:none">'.$content.'</div>');
    echo $content;    
}

