<?php
add_filter( 'avatar_defaults', 'wpb_new_gravatar' );
function wpb_new_gravatar ($avatar_defaults) {
$myavatar = 'http://asheghnameh.com/wp-content/themes/Omen/img/ic_launcher.png';
$avatar_defaults[$myavatar] = "Default Gravatar";
return $avatar_defaults;
}


function wpb_image_editor_default_to_gd( $editors ) {
    $gd_editor = 'WP_Image_Editor_GD';
    $editors = array_diff( $editors, array( $gd_editor ) );
    array_unshift( $editors, $gd_editor );
    return $editors;
}
add_filter( 'wp_image_editors', 'wpb_image_editor_default_to_gd' );


/**
 * Add a sidebar.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'سایدبار بلاگ', 'textdomain' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'سایدبار کناری صفحات.', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );


function wpdocs_theme_footer_one_init() {
    register_sidebar( array(
        'name'          => __( 'فوتر اول', 'textdomain' ),
        'id'            => 'footer-one',
        'description'   => __( 'فوتر سایت - بخش اول', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_footer_one_init' );


function wpdocs_theme_footer_two_init() {
    register_sidebar( array(
        'name'          => __( 'فوتر دوم', 'textdomain' ),
        'id'            => 'footer-two',
        'description'   => __( 'فوتر سایت - بخش  دوم', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_footer_two_init' );


function wpdocs_theme_footer_three_init() {
    register_sidebar( array(
        'name'          => __( 'فوتر سوم', 'textdomain' ),
        'id'            => 'footer-three',
        'description'   => __( 'فوتر سایت - بخش سوم', 'textdomain' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_footer_three_init' );