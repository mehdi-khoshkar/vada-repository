<?php


function farmoon_load_scripts() {


    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.3.1','all');
    wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.css');
	    wp_enqueue_style('aos',get_template_directory_uri().'/css/aos.css');
	wp_enqueue_style('fontawesome',get_template_directory_uri().'/css/fontawesome.min.css');

    wp_enqueue_style('style',get_stylesheet_uri() );
	

   
    wp_enqueue_script('jquery-3.3.1',get_template_directory_uri().'/js/jquery-3.3.1.min.js',array('jquery'),'3.3.1',true);
	
	    wp_enqueue_script('aos',get_template_directory_uri().'/js/aos.js');
	    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js');
	 wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.3.1',true);

    wp_enqueue_script('customize',get_template_directory_uri().'/js/customize.js');
 


    


   }
add_action('wp_enqueue_scripts','farmoon_load_scripts');




 ?>