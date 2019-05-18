<?php
/*
Plugin Name: فال شمع

Author: Vada

*/


 // create post type faleshame

function create_faleshame() {
    register_post_type( 'faleshame',
        array(
            'labels' => array(
                'name' => 'فال شمع',
                'singular_name' => 'faleshame',
                'add_new' => 'افزودن فال جدید',
                'add_new_item' => ' افزودن فال جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش فال',
                'new_item' => 'فال شمع جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش فال شمع',
                'search_items' => 'جستجوی فال شمع',
                'not_found' => 'فالی یافت نشد',
                'not_found_in_trash' => 'فالی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent faleshame'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'revisions', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'FaleShame/images/faleshame.png'),
            'has_archive' => true,

        )
    );
	
     
}


add_action( 'init', 'create_faleshame' );




 function add_taxonomies_to_faleshame() {
      register_taxonomy_for_object_type( 'post_tag', 'faleshame' );
      register_taxonomy_for_object_type( 'category', 'faleshame' );
  } 

 add_action( 'init', 'add_taxonomies_to_faleshame');




 function enqueue_plugin_shame_scripts($plugin_array)
 {
     //enqueue TinyMCE plugin script with its ID.
     $plugin_array["faleshame_button_plugin"] =  plugin_dir_url(__FILE__) ."index.js";
     return $plugin_array;
 }
  
 add_filter("mce_external_plugins", "enqueue_plugin_shame_scripts");


function register_buttons_shame_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "faleshame");
    return $buttons;
}
 
add_filter("mce_buttons", "register_buttons_shame_editor");