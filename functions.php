<?php
/**
 * Funiro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Funiro
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'funiro_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function funiro_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Funiro, use a find and replace
		 * to change 'funiro' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'funiro', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'funiro' ),
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
				'funiro_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'funiro_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function funiro_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'funiro_content_width', 640 );
}
add_action( 'after_setup_theme', 'funiro_content_width', 0 );

// Global variables define
define('FUNIRO_TEMPLATE_DIR_URI', get_template_directory_uri());
define('FUNIRO_TEMPLATE_DIR', get_template_directory());
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

require ( FUNIRO_TEMPLATE_DIR . '/inc/widgets/sidebars.php');

/**
 * Enqueue scripts and styles.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/scripts/scripts.php');

/**
 * Implement the Custom Header feature.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/custom-header.php');
/**
 * Implement the Breadcrumbs feature.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/breadcrumbs/breadcrumbs.php');

/**
 * Custom template tags for this theme.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/template-tags.php');

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/template-functions.php');

/**
 * Customizer Repeater.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/customizer-repeater/inc/customizer.php');

/**
 * Customizer additions.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/customizer/customizer.php');

/**
 * Shortcode additions.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/sections/shortcodes.php');


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require ( FUNIRO_TEMPLATE_DIR . '/inc/jetpack.php');
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require ( FUNIRO_TEMPLATE_DIR . '/inc/woocommerce.php');
}

/**
 * Load Welcome-bar compatibility file.
 */
require ( FUNIRO_TEMPLATE_DIR . '/inc/welcome-bar/welcome-bar.php');


//helper function 
/* Excerpt Length Limit Fuctions */
function funiro_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
} 