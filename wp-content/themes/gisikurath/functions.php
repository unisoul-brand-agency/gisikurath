<?php
/**
 * gisikurath functions and definitions
 *
 * @package gisikurath
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'gisikurath_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

function gisikurath_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on gisikurath, use a find and replace
	 * to change 'gisikurath' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'gisikurath', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'gisikurath' ),
		'secondary' => __( 'Secondary Menu', 'gisikurath' ),
		'tertiary' => __( 'Tertiary Menu', 'gisikurath' ),
		'quaternary' => __( 'Quaternary Menu', 'gisikurath' ),
		'quinary' => __( 'Quinary Menu', 'gisikurath' ),
		'top' => __( 'Top Menu', 'gisikurath' ),
		'bottom' => __( 'Bottom Menu', 'gisikurath' ),

	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'gisikurath_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // gisikurath_setup
add_action( 'after_setup_theme', 'gisikurath_setup' );

/*
*  Register Jqeury
*/
function register_jquery() {
	wp_deregister_script('jquery');
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js' );
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'register_jquery' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function gisikurath_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'gisikurath' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar2', 'gisikurath' ),
		'id'            => 'sidebar-2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar3', 'gisikurath' ),
		'id'            => 'sidebar-3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar4', 'gisikurath' ),
		'id'            => 'sidebar-4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

}
add_action( 'widgets_init', 'gisikurath_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'gisikurath_scripts' );
function gisikurath_scripts() {
	wp_enqueue_style( 'gisikurath-style', get_stylesheet_uri() );

	wp_enqueue_script( 'ajax-mason', get_template_directory_uri() . '/js/ajax-mason.js', array(), '1.0.0', true );

	wp_enqueue_script( 'isotope.min', get_template_directory_uri() . '/js/isotope.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'jquery.infinitescroll', get_template_directory_uri() . '/js/jquery.infinitescroll.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'manual-trigger', get_template_directory_uri() . '/js/manual-trigger.js', array(), '1.0.0', true );

	wp_enqueue_script( 'imagesloaded.pkgd.min', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'functions', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );

	wp_enqueue_script( 'gisikurath-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'gisikurath-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	wp_enqueue_script( 'ScrollToFixed', get_template_directory_uri() . '/js/ScrollToFixed.js', array(), '1.0.0', true );

	wp_enqueue_script( 'ajaxcomments', get_template_directory_uri() . '/js/ajaxcomments.js', array(), '1.0.0', true );

	wp_enqueue_script( 'sizzle', get_template_directory_uri() . '/js/sizzle.js', array(), '1.0.0', true );

	wp_enqueue_script( 'elementQuery', get_template_directory_uri() . '/js/elementQuery.min.js', array(), '1.0.0', true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gisikurath_scripts' );
/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

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
 * excerpt_length
 */
function custom_excerpt_length( $length ) {
	return 0;
	}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/**
 * excerpt.
 */
//function new_excerpt_more( $more ) {
//	return '[.....]';
//}
//add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Read More.
 */
function new_excerpt_more( $more ) {
	return '<span class="read-more-btn"><a class="read-more" href="' . get_permalink( get_the_ID() ) . '">' . __( 'lesen', 'your-text-domain' ) . '</a></span>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/*
* Featured Images
*/
add_theme_support( 'post-thumbnails' ); 
set_post_thumbnail_size( 600, 600);
/*
* mason posts
*/
function mason_script() {
    wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'mason_script' );

require 'ajax-like-post.php';


function _remove_script_version( $src ){
 $parts = explode( '?', $src );
 return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

add_filter( 'comment_form_defaults', 't5_move_textarea', 100 );
add_action( 'comment_form_top',      't5_move_textarea' );

/**
 * Take the textarea code out of the default fields and print it on top.
 *
 * @wp-hook comment_form_defaults 100
 * @wp-hook comment_form_top
 * @param   array $input Default fields if called as filter
 * @return  string|void
 */
function t5_move_textarea( $input = array () )
{
    static $textarea = '';

    if ( 'comment_form_defaults' === current_filter() )
    {
        // Copy the field to our internal variable …
        $textarea               = $input['comment_field'];
        // … and remove it from the defaults array.
        $input['comment_field'] = '';
        return $input;
    }

    // Now called on comment_form_top, $textarea is filled.
    print apply_filters( 'comment_form_field_comment', $textarea );
}

/**
 * Load ajax script comments.
 */
require get_template_directory() . '/inc/ajaxcomments.php';
?>
