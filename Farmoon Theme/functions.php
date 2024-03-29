<?php

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/functions_device.php';


// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';


// add_filter( 'amp_post_status_default_enabled', '__return_false' );


function replace_text($text) {
	$text = str_replace('display_rich_snippet', '', $text);

	return $text;
}
add_filter('my_snippet', 'replace_text');

function custom_menu_page_removing() {
    global $pagenow;

    if ( get_currentuserinfo()->user_email == 'Davoodhasanvand.1969@gmail.com' ) {
        $menu = array(
            'edit.php',
            'edit.php?post_type=page',
            'upload.php',
            'edit.php?post_type=popupbuilder'
            );
        foreach ( $menu as $main ) {
            remove_menu_page( $main );
        }
        if ( in_array( $pagenow, $menu, true ) && ( !isset( $_GET['post_type'] ) || isset( $_GET['post_type'] ) && $_GET['post_type'] == 'post' ) ) {
            wp_die( 'Access denied...' );
            exit;
        }
    }
}

add_action( 'admin_menu', 'custom_menu_page_removing' );





//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}


function mrcode_edd_rial_currency_sign( $formatted, $currency, $price ) {
return $price . ' ریال';
}
add_filter( 'edd_rial_currency_filter_after', 'mrcode_edd_rial_currency_sign', 10, 3 );
add_filter( 'edd_rial_currency_filter_before', 'mrcode_edd_rial_currency_sign', 10, 3 );


// Scheduled Action Hook
// function run_my_script( ) {
//     require_once('https://farmooon.ir/?page_id=4088');
// }
// Schedule Cron Job Event
// function USERS_MONITORING() {
//     if ( ! wp_next_scheduled( 'USERS_MONITORING' ) ) {
//         wp_schedule_event( strtotime('03:00:00'), 'daily', 'USERS_MONITORING' );
//     }
// }
// add_action( 'USERS_MONITORING', 'run_my_script' );


// add_action('USERS_MONITORING', 'isa_test_cron_job_send_mail');
 
// function isa_test_cron_job_send_mail() {
//     $to = 'khoshkar.mehdi@gmail.com';
//     $subject = 'Test my 1-day cron job';
// 	$message = 'If you received this message, it means that your 1 day cron job has worked! <img draggable="false" class="emoji" alt="🙂" src="https://s.w.org/images/core/emoji/11.2.0/svg/1f642.svg"> ' ; 
//     wp_mail( $to, $subject, $message );
 
// }
// 
// 


?>