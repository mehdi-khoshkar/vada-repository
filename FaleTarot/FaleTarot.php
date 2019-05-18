<?php
/*
Plugin Name: فال تاروت

Author: Vada

*/
global $tdata;

 // create post type faleTarot

function create_faleTarot() {
    register_post_type( 'faleTarot',
        array(
            'labels' => array(
                'name' => 'فال تاروت',
                'singular_name' => 'faleTarot',
                'add_new' => 'افزودن فال جدید',
                'add_new_item' => ' افزودن فال جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش فال',
                'new_item' => 'فال تاروت جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش فال تاروت',
                'search_items' => 'جستجوی فال تاروت',
                'not_found' => 'فالی یافت نشد',
                'not_found_in_trash' => 'فالی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent faleTarot'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'revisions', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'FaleTarot/images/faletarot.png'),
            'has_archive' => true,

        )
    );
	
     
}


add_action( 'init', 'create_faleTarot' );




 function add_taxonomies_to_faleTarot() {
      register_taxonomy_for_object_type( 'post_tag', 'faleTarot' );
      register_taxonomy_for_object_type( 'category', 'faleTarot' );
  } 

 add_action( 'init', 'add_taxonomies_to_faleTarot');




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