<?php


function mario_load_scripts() {


    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css',array(),'4.0','all');
    wp_enqueue_style('themify',get_template_directory_uri().'/css/themify-icons.css');
	wp_enqueue_style('linearicons',get_template_directory_uri().'/css/linearicons.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
	wp_enqueue_style('magnific',get_template_directory_uri().'/css/magnific-popup.css');
	wp_enqueue_style('nice-select',get_template_directory_uri().'/css/nice-select.css');
	wp_enqueue_style('animate',get_template_directory_uri().'/css/animate.min.css"');
	wp_enqueue_style('owl-carousel',get_template_directory_uri().'/css/owl.carousel.css');
	wp_enqueue_style('main',get_template_directory_uri().'/css/main.css');
	wp_enqueue_style('rtl',get_template_directory_uri().'/rtl.css');
	
    wp_enqueue_style('style',get_stylesheet_uri() );
	

    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.1.0',true);
    wp_enqueue_script('jquery-2.2.4',get_template_directory_uri().'/js/jquery-2.2.4.min.js');
 
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js');
	 wp_enqueue_script('easing',get_template_directory_uri().'/js/easing.min.js');
	 wp_enqueue_script('superfish',get_template_directory_uri().'/js/superfish.min.js');
	 wp_enqueue_script('ajaxchimp',get_template_directory_uri().'/js/jquery.ajaxchimp.min.js');
	 wp_enqueue_script('magnific-popup',get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
	 wp_enqueue_script('owl-carousel',get_template_directory_uri().'/js/owl.carousel.min.js');
	 wp_enqueue_script('tabs',get_template_directory_uri().'/js/jquery.tabs.min.js');
	 wp_enqueue_script('accordion',get_template_directory_uri().'/js/mn-accordion.js"');
	 wp_enqueue_script('nice-select',get_template_directory_uri().'/js/jquery.nice-select.min.js');
	 wp_enqueue_script('mail-scrip',get_template_directory_uri().'/js/mail-script.js"');
	 wp_enqueue_script('main',get_template_directory_uri().'/js/main.js"');
	
 

    


   }
add_action('wp_enqueue_scripts','mario_load_scripts');
 ?>