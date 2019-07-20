<?php
/*
Plugin Name: فال حافظ

Author: Vada

*/
global $tdata;

 // create post type falehafez 

function create_falehafez() {
    register_post_type( 'falehafez',
        array(
            'labels' => array(
                'name' => 'فال ها',
                'singular_name' => 'falehafez',
                'add_new' => 'افزودن فال جدید',
                'add_new_item' => ' افزودن فال جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش فال',
                'new_item' => 'فال حافظ جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش فال حافظ',
                'search_items' => 'جستجوی فال حافظ',
                'not_found' => 'فالی یافت نشد',
                'not_found_in_trash' => 'فالی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent falehafez'
            ),
 
            'public' => true,
            'menu_position' => 5,
            'supports' => array( 'title', 'editor', 'revisions', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'FaleHafez/images/fallehafez.png'),
            'has_archive' => true
        )
    );
	
     
}


add_action( 'init', 'create_falehafez' );







 function add_taxonomies_to_falehafez() {
      register_taxonomy_for_object_type( 'post_tag', 'falehafez' );
      register_taxonomy_for_object_type( 'category', 'falehafez' );
  } 

 add_action( 'init', 'add_taxonomies_to_falehafez');



/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 */


function my_falehafez() {
    add_meta_box( 'falehafez_meta_box',
        'جزییات فال حافظ',
        'display_falehafez_meta_box',
        'falehafez', 'normal', 'high'
    );
}

add_action( 'admin_init', 'my_falehafez' );





function display_falehafez_meta_box( $falehafez ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
 
    $tabir_falehafez = esc_html( get_post_meta( $falehafez->ID, 'tabir_falehafez', true ) );

    ?>


    <table>
    
        <tr>
            <td style="width: 150px">
				<h1>تعبیر فال</h1>
			</td>
   <td>
         <?php

			wp_editor(
				$tabir_falehafez,
				'tabir_falehafez',
				array(
				  'media_buttons' => false,
				  'textarea_rows' => 8,
				  'tabindex' => 4,

				)
			);

			?>

   </td>
			
   
                           
        </tr>
     
    </table>
    <?php
}



function add_falehafez_fields( $falehafez_id, $falehafez) {
    // Check post type for channel
    if ( $falehafez->post_type == 'falehafez' ) {
        // Store data in post meta table if present in post data
      
        if ( isset( $_POST['tabir_falehafez'] ) && $_POST['tabir_falehafez'] != '' ) {
            update_post_meta( $falehafez_id, 'tabir_falehafez', $_POST['tabir_falehafez'] );
        }
    }
}


add_action( 'save_post', 'add_falehafez_fields', 10, 2 );



function enqueue_plugin_scripts($plugin_array)
{
    //enqueue TinyMCE plugin script with its ID.
    $plugin_array["fal_button_plugin"] =  plugin_dir_url(__FILE__) . "index.js";

    return $plugin_array;
}

add_filter("mce_external_plugins", "enqueue_plugin_scripts");

function register_buttons_editor($buttons)
{
    //register buttons with their id.
    array_push($buttons, "fal");

    
    return $buttons;
}

add_filter("mce_buttons", "register_buttons_editor");
