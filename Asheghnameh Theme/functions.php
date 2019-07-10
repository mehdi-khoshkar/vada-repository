<?php

require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/theme-support.php';
require get_template_directory() . '/inc/widgets.php';
// Register Custom Navigation Walker
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';



function mrcode_edd_rial_currency_sign( $formatted, $currency, $price ) {
return $price . ' ریال';
}
add_filter( 'edd_rial_currency_filter_after', 'mrcode_edd_rial_currency_sign', 10, 3 );
add_filter( 'edd_rial_currency_filter_before', 'mrcode_edd_rial_currency_sign', 10, 3 );


?>