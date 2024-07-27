<?php
/**
 * Throne Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Throne_Systems
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function throne_systems_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Throne Systems, use a find and replace
		* to change 'throne-systems' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'throne-systems', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	add_theme_support( 'woocommerce' );

	add_action( 'wp', 'mageplaza_remove_sidebar_product_pages' );
	function mageplaza_remove_sidebar_product_pages() {
		if ( is_product() ) {
			remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
			remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
			remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40, 0);
		}
	}


	add_action( 'woocommerce_before_single_product', function() {
		add_filter( 'woocommerce_product_get_gallery_image_ids', '__return_empty_array' );
	} );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'throne-systems' ),
			'menu-2' => esc_html__( 'Shop Menu', 'throne-systems' )
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'throne_systems_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'throne_systems_setup' );


add_action("wp_enqueue_scripts", function() {
	wp_enqueue_script( 'wc-cart-fragments' );
});

add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function throne_systems_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'throne_systems_content_width', 640 );
}
add_action( 'after_setup_theme', 'throne_systems_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function throne_systems_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'throne-systems' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'throne-systems' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'throne_systems_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

function throne_systems_scripts() {
	wp_enqueue_style( 'throne-systems-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_enqueue_style( 'styles', get_template_directory_uri() . '/compiled/throne.css' );
    wp_enqueue_script( 'throne-script', get_stylesheet_directory_uri() . '/compiled/throne.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'throne-systems-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'throne_systems_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

