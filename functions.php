<?php
/**
 * autohouse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autohouse
 */

function get_breadcrumb() {
    echo '<a href="'.home_url().'" rel="nofollow">Главная</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    }
}

if ( ! function_exists( 'autohouse_setup' ) ) :

function additional_custom_styles() {

    /*Enqueue The Styles*/
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.css' );
	//wp_enqueue_style( 'foundation-min', get_template_directory_uri() . '/css/foundation.min.css' );
	wp_enqueue_style( 'amimate', get_template_directory_uri() . '/css/magnific-popup.css' );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/css/animate.css' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobile.css' );
}

add_action( 'wp_enqueue_scripts', 'additional_custom_styles' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function autohouse_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on autohouse, use a find and replace
	 * to change 'autohouse' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'autohouse', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'autohouse' ),
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
	add_theme_support( 'custom-background', apply_filters( 'autohouse_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'autohouse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autohouse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'autohouse_content_width', 640 );
}
add_action( 'after_setup_theme', 'autohouse_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autohouse_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'autohouse' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'autohouse' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'autohouse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function autohouse_scripts() {
	wp_enqueue_style( 'autohouse-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery.min', get_template_directory_uri() . '/js/jquery/3.1.1/jquery.min.js', array(), '3.1.1', true );
	
	wp_enqueue_script( 'autohouse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'autohouse-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '001', true );

	wp_enqueue_script( 'what-input', get_template_directory_uri() . '/js/vendor/what-input.js', array(), '001', true );

	wp_enqueue_script( 'magnific-popup-min', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array(), '001', true );

	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/js/vendor/foundation.min.js', array(), '001', true );
	
	wp_enqueue_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(), '001', true );
	    
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'autohouse_scripts' );

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





