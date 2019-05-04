<?php
function dream_load_scripts() {


    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.1.0','all');
    wp_enqueue_style('mdb',get_template_directory_uri().'/css/mdb.min.css');
    wp_enqueue_style('style',get_stylesheet_uri() );
	

    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.1.0',true);
    wp_enqueue_script('jquery-3.3.1',get_template_directory_uri().'/js/jquery-3.3.1.min.js',array('jquery'),'3.3.1',true);
    wp_enqueue_script('mdb',get_template_directory_uri().'/js/mdb.min.js',array('jquery'),'4.9.7',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js');

   }
add_action('wp_enqueue_scripts','dream_load_scripts');
 ?>