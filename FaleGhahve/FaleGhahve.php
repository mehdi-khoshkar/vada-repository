<?php
/*
Plugin Name: فال قهوه

Author: Vada

*/


 // create post type faleghahve

function create_faleghahve() {
    register_post_type( 'faleghahve',
        array(
            'labels' => array(
                'name' => 'فال قهوه',
                'singular_name' => 'faleghahve',
                'add_new' => 'افزودن فال جدید',
                'add_new_item' => ' افزودن فال جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش فال',
                'new_item' => 'فال قهوه جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش فال قهوه',
                'search_items' => 'جستجوی فال قهوه',
                'not_found' => 'فالی یافت نشد',
                'not_found_in_trash' => 'فالی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent faleghahve'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'revisions', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'FaleGhahve/images/faleghahve.png'),
            'has_archive' => true,

        )
    );
	
     
}


add_action( 'init', 'create_faleghahve' );




 function add_taxonomies_to_faleghahve() {
      register_taxonomy_for_object_type( 'post_tag', 'faleghahve' );
      register_taxonomy_for_object_type( 'category', 'faleghahve' );
  } 

 add_action( 'init', 'add_taxonomies_to_faleghahve');




 function enqueue_plugin_ghahve_scripts($plugin_array)
 {
     //enqueue TinyMCE plugin script with its ID.
     $plugin_array["faleghahve_button_plugin"] =  plugin_dir_url(__FILE__) ."index.js";
     return $plugin_array;
 }
  
 add_filter("mce_external_plugins", "enqueue_plugin_ghahve_scripts");


function register_buttons_ghahve_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "faleghahve");
    return $buttons;
}
 
add_filter("mce_buttons", "register_buttons_ghahve_editor");