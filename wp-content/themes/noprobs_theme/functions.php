<?php
/**
* We Need Support
*/
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');
add_theme_support( 'post-thumbnails' );
add_post_type_support( 'page', 'excerpt' );
add_image_size('big-thumbnail', 648, 431, ['left', 'top']);
add_image_size('small-thumbnail', 361, 241, ['left', 'top']);
add_image_size('blog-thumbnail', 690, 654, ['left', 'top']);

/**
* Remove unused emoji
*/
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

/**
* Hide Wordpress Admin Bar
*/
add_filter('show_admin_bar', '__return_false');
remove_action('personal_options','_admin_bar_preferences');

/**
* Security
*/
remove_action('wp_head','rsd_link');
remove_action('wp_head','wlwmanifest_link');
remove_action('wp_head','index_rel_link');
remove_action('wp_head','wp_generator');

/**
* Include all file requirement
*/
include_once('inc/tgm-plugin-activation/tgm-plugin-activation.php');
include_once('inc/redux.php');
include_once('inc/shortcodes.php');

/**
* Register Menu
*/
if (function_exists('register_nav_menus')) {
	register_nav_menus([
		'first-menu' => __('First Menu'),
	]);
}


/**
* Register Footer and Sidebar
*/
function premium_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'noprobs' ),
			'id'            => 'footer1',
			'description'   => __( 'Add widgets here to appear in your footer side.', 'noprobs' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 2', 'noprobs' ),
			'id'            => 'footer2',
			'description'   => __( 'Add widgets here to appear in your footer side.', 'noprobs' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer 3', 'noprobs' ),
			'id'            => 'footer3',
			'description'   => __( 'Add widgets here to appear in your footer side.', 'noprobs' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Sidebar Blog', 'noprobs' ),
			'id'            => 'sidebar-blog',
			'description'   => __( 'Add widgets here to appear in your footer side.', 'noprobs' ),
			'before_widget' => '<div id="%1$s" class=" %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'premium_widgets_init' );

/**
* One Punch Enqueue
*/
function theme_adding_scripts(){
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '4.4.1', 'all');
	wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), '4.7.0', 'all');
	wp_enqueue_style('superfish', get_template_directory_uri() . '/assets/css/superfish.css', array(), '4.7.0', 'all');
	wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), null, 'all');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('jquery-min', get_template_directory_uri().'/assets/js/jquery.min.js', array(), '3.2.1', true);
	wp_enqueue_script('popper', get_template_directory_uri().'/assets/js/popper.min.js', array(), '1.14.7', true);
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), '4.4.1', true);
	wp_enqueue_script('jquery-ui-min', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array(), '3.0.0', true);
	wp_enqueue_script('superfish', 'https://cdnjs.cloudflare.com/ajax/libs/superfish/1.7.10/js/superfish.min.js', array(), '3.0.0', true);
	wp_enqueue_script('theme-script', get_template_directory_uri().'/assets/js/script.js', array(), '1.0.0', true);

}
add_action( 'wp_enqueue_scripts', 'theme_adding_scripts' );

add_filter( 'get_the_archive_title', function ($title) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '', false );
    } elseif ( is_author() ) {
        $title = '<span class="vcard">' . get_the_author() . '</span>' ;
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '', false );
    }
    return $title;
});

add_filter( 'use_widgets_block_editor', '__return_false' );
