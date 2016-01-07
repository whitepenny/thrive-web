<?php

if ( ! function_exists( 'thrive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function thrive_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on thrive, use a find and replace
	 * to change 'thrive' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'thrive', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
        add_image_size( 'blog-size', 690, 448 );
        add_image_size( 'archive-size', 720, 444, array('center', 'center') );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'thrive' ),
                'mobile' => esc_html__( 'Mobile', 'thrive' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'thrive_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // thrive_setup
add_action( 'after_setup_theme', 'thrive_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function thrive_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'thrive_content_width', 640 );
}
add_action( 'after_setup_theme', 'thrive_content_width', 0 );

function thrive_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'thrive_excerpt_length', 999 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function thrive_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'thrive' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
        register_sidebar( array(
                 'id' => 'footer_sidebar-1',
                 'name' => __( 'Footer Sidebar 1' ),
                 'description' => __( 'Menu for the footer.' ),
                 'before_widget' => '<div id="%1$s" class="widget %2$s">',
                 'after_widget' => '</div>',
                 'before_title' => '<h3 class="widget-title">',
                 'after_title' => '</h3>'
        ) );

}
add_action( 'widgets_init', 'thrive_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function thrive_scripts() {
	wp_enqueue_style( 'thrive-style', get_stylesheet_uri() );

	wp_enqueue_script( 'thrive-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'thrive-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'thrive_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * Remove automatic paragraph tags from Get Started Custom fields
 */

function the_field_without_wpautop() {
	
	remove_filter('acf_the_content', 'wpautop');
	
	the_field('get_started_addresses'); the_sub_field('contact_info');
	
	add_filter('acf_the_content', 'wpautop');
	
}
/**
 * Custom exceprt length
 *
 */
function ld_custom_excerpt_length( $length ) {
    return 22;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );

/**
 * Custom exceprt
 *
**/
function new_excerpt_more($more) {
       global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Temp fix for HTTPS and 4.4 srcset grabbing from HTTP
 * Related to responsive images
 * New fix coming in later versions of WP, this can be removed later
 */
add_filter('wp_get_attachment_image_attributes', function($attr) {
    if (isset($attr['sizes'])) unset($attr['sizes']);
    if (isset($attr['srcset'])) unset($attr['srcset']);
    return $attr;
}, PHP_INT_MAX);
add_filter('wp_calculate_image_sizes', '__return_false', PHP_INT_MAX);
add_filter('wp_calculate_image_srcset', '__return_false', PHP_INT_MAX);
remove_filter('the_content', 'wp_make_content_images_responsive');
