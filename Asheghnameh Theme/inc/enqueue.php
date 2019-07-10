<?php


function omen_load_scripts() {


    wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',array(),'4.1.0','all');
    wp_enqueue_style('mdb',get_template_directory_uri().'/css/mdb.min.css');
    wp_enqueue_style('style',get_stylesheet_uri() );
	
    wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array(),'4.1.0',true);
    wp_enqueue_script('jquery-3.2.1',get_template_directory_uri().'/js/jquery-3.3.1.min.js',array('jquery'),'3.3.1',true);
    wp_enqueue_script('mdb',get_template_directory_uri().'/js/mdb.min.js',array('jquery'),'4.9.7',true);
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js');
    wp_enqueue_script('customize',get_template_directory_uri().'/js/customize.js');
   }
add_action('wp_enqueue_scripts','omen_load_scripts');



add_action('wp_enqueue_scripts', 'enqueue_magnificpopup_styles');
function enqueue_magnificpopup_styles() {
	if ( is_single() ) {
    wp_register_style('magnific_popup_style', get_stylesheet_directory_uri().'/magnific-popup/magnific-popup.css', array('style'));
    wp_enqueue_style('magnific_popup_style');
}
} 
add_action('wp_enqueue_scripts', 'enqueue_magnificpopup_scripts');
function enqueue_magnificpopup_scripts() {
	if ( is_single() ) {
    wp_register_script('magnific_popup_script', get_stylesheet_directory_uri().'/magnific-popup/jquery.magnific-popup.min.js', array('jquery'));
    wp_enqueue_script('magnific_popup_script');
    wp_register_script('magnific_init_script', get_stylesheet_directory_uri().'/magnific-popup/jquery.magnific-popup-init.js', array('jquery'));
    wp_enqueue_script('magnific_init_script');
}
}
 ?>