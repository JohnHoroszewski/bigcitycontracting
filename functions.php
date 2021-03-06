<?php
/**
 * Big City Contracting functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Big_City_Contracting
 */

@include 'includes/customizer.php';

if ( ! function_exists( 'big_city_contracting_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function big_city_contracting_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Big City Contracting, use a find and replace
		 * to change 'big-city-contracting' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'big-city-contracting', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'big-city-contracting' ),
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

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'big_city_contracting_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'big_city_contracting_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function big_city_contracting_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'big_city_contracting_content_width', 640 );
}
add_action( 'after_setup_theme', 'big_city_contracting_content_width', 0 );

/**
 * Register widget areas.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

function bigCity_sidebars() {
	
	$args = array(
		'id'            => 'footer_col1',
		'class'         => 'footer-col',
		'name'          => __( 'Footer Column 1', 'text_domain' ),
		'description'   => __( 'First Column in the Footer Area', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_col2',
		'class'         => 'footer-col',
		'name'          => __( 'Footer Column 2', 'text_domain' ),
		'description'   => __( 'Second Column in the Footer Area', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_col3',
		'class'         => 'footer-col',
		'name'          => __( 'Footer Column 3', 'text_domain' ),
		'description'   => __( 'Third Column in the Footer Area', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

	$args = array(
		'id'            => 'footer_col4',
		'class'         => 'footer-col',
		'name'          => __( 'Footer Column 4', 'text_domain' ),
		'description'   => __( 'Fourth Column in the Footer Area', 'text_domain' ),
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => ' ',
		'after_widget'  => ' ',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'bigCity_sidebars' );


/**
 * Enqueue scripts and styles.
 */
function big_city_contracting_scripts() {
	wp_enqueue_style( 'big-city-contracting-style', get_stylesheet_uri() );

	// Enqueue custom.js
	wp_enqueue_script( 'big-city-contracting-navigation', get_template_directory_uri() . '/js/custom.js', array( 'jquery' ), '20151215', true );

	wp_enqueue_script( 'big-city-contracting-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'big-city-contracting-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'big_city_contracting_scripts' );

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

// Remove Admin Bar
add_filter('show_admin_bar', '__return_false');

// Load custom functions
@include 'includes/functions.php';