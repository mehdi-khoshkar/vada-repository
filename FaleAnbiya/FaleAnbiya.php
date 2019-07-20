<?php
/*
Plugin Name: فال انبیا

Author: Vada

*/
global $tdata;

 // create post type faleanbiya

function create_faleanbiya() {
    register_post_type( 'faleanbiya',
        array(
            'labels' => array(
                'name' => 'فال انبیا',
                'singular_name' => 'faleanbiya',
                'add_new' => 'افزودن فال جدید',
                'add_new_item' => ' افزودن فال جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش فال',
                'new_item' => 'فال انبیا جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش فال انبیا',
                'search_items' => 'جستجوی فال انبیا',
                'not_found' => 'فالی یافت نشد',
                'not_found_in_trash' => 'فالی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent faleanbiya'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'revisions', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'FaleAnbiya/images/faleanbiya.png'),
            'has_archive' => true,

        )
    );
	
     
}


add_action( 'init', 'create_faleanbiya' );




 function add_taxonomies_to_faleanbiya() {
      register_taxonomy_for_object_type( 'post_tag', 'faleanbiya' );
      register_taxonomy_for_object_type( 'category', 'faleanbiya' );
  } 

 add_action( 'init', 'add_taxonomies_to_faleanbiya');




 function enqueue_plugin_anbiya_scripts($plugin_array)
 {
     //enqueue TinyMCE plugin script with its ID.
     $plugin_array["falAnbiya_button_plugin"] =  plugin_dir_url(__FILE__) ."index.js";
     return $plugin_array;
 }
  
 add_filter("mce_external_plugins", "enqueue_plugin_anbiya_scripts");


function register_buttons_anbiya_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "falAnbiya");
    return $buttons;
}
 
add_filter("mce_buttons", "register_buttons_anbiya_editor");