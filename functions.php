<?php
/**
 * lorainccc_welded functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lorainccc_welded
 */

if ( ! function_exists( 'lorainccc_welded_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lorainccc_welded_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lorainccc_welded, use a find and replace
	 * to change 'lorainccc_welded' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lorainccc_welded', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'lorainccc_welded' ),
		'left-nav' => esc_html__( 'Left Nav', 'lorainccc_welded' ),
		'footer-quicklinks-nav' => esc_html__( 'Footer Quicklinks', 'lorainccc' ),
		'footer-campus-location-nav' => esc_html__( 'Footer Campus Locations', 'lorainccc' ),
		'mobile-primary' => esc_html__( 'Mobile Primary Menu', 'lorainccc_welded' ),
  		'header-shortcuts' => esc_html__( 'Header Shortcuts Menu', 'lorainccc' ),
		'mobile-header-shortcuts' => esc_html__( 'Mobile Header Shortcuts Menu', 'lorainccc' ),
		'page-top-buttons' => esc_html__( 'Page Top Buttons Menu', 'lorainccc' ),
		'page-top-second-menu' => esc_html__( 'Page Top Secondary Menu', 'lorainccc' ),
		/** Keep the above menu positions we use a plugin to cache the first 9 menus defined across the site.
		 *  Anything defined below these positions will be accessible to the site and this site only on the network.
		*/
		'menu-1' => esc_html__( 'Primary', 'lorainccc_welded' ),

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
		'style',
		'script',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lorainccc_welded_custom_background_args', array(
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
add_action( 'after_setup_theme', 'lorainccc_welded_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lorainccc_welded_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lorainccc_welded_content_width', 640 );
}
add_action( 'after_setup_theme', 'lorainccc_welded_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lorainccc_welded_widgets_init() {
	register_sidebar
		( array(
			'name'          => esc_html__( 'Sidebar', 'lorainccc_welded' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		) 
	);
	register_sidebar( 
		array(
			'name'          => 'Custom Header Widget Area',
			'id'            => 'header-widgets',
			'before_widget' => '<div class="header__widgets">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="header__widgets__title">',
			'after_title'   => '</h2>',
		) 
	);
	register_sidebar(
		array(
			'name' 			=> 'Custom Footer Widget Area',
			'id' 			=> 'footer-widgets',
			'before_widget'	=> '<div class="footer__widgets">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h2 class="footer__widgets__title">',
			'after_title'	=> '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lorainccc_welded_widgets_init' );

/**
 * Enqueue google fonts.
 */
function add_google_fonts() {
	wp_enqueue_style( 'open-sans-google-fonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap', [], null );
	wp_enqueue_style( 'lato-google-fonts', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap', [], null );
	
}

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );

/**
 * Enqueue scripts and styles.
 */

function lorainccc_welded_foundation_scripts() {
 
	/* ----- Add Foundation Support ----- */
	/* Add Foundation CSS */
	
	wp_enqueue_style( 'genericons', get_stylesheet_directory_uri() . '/genericons/genericons.css', array(), '3.4.1' );
 
	/* Add Foundation JS */
	
	wp_enqueue_style( 'foundation',  get_template_directory_uri() . '/foundation-643/css/foundation.css' ); /* flexbox */

	wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/foundation-643/js/vendor/foundation.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'foundation-whatinput', get_template_directory_uri() . '/foundation-643/js/vendor/what-input.js', array( 'jquery' ), '1', true);
	/* Foundation Init JS */
	
	wp_enqueue_script( 'foundation-init-js', get_stylesheet_directory_uri() . '/foundation.js', array( 'jquery' ), '1', true );
	
	/* Foundation Icons */
	if ( wp_style_is( 'foundation_font_icon_css', 'enqueued' ) ) {
		return;
	}else{
			wp_enqueue_style('foundation_font_icon_css', get_template_directory_uri() . '/foundation-icons/foundation-icons.css');
	}
	/* ----- End Foundation Support ----- */

	wp_enqueue_script( 'lorainccc_welded-function-script', get_stylesheet_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true );
	/** Custom jQuery script that reformats the dropdown menu to a drilldown when viewed on a smaller screen size than desktop */
	wp_enqueue_script( 'lc_menu-cleanup-script', get_stylesheet_directory_uri() . '/js/menu-cleanup.js', array( 'jquery' ), '20190329', true );
		//Adds Google Analytics, Google Tag, Hotjar and Eloqua to header
	wp_enqueue_script( 'wd-google-analytics-scripts', get_stylesheet_directory_uri() . '/js/lc-google-analytics.js', array(), '20180828', false);
	
wp_localize_script( 'lorainccc_welded-function-script', 'screenReaderText', array(
		'expand'   => '<span class="screen-reader-text">' . __( 'expand child menu', 'twentyfifteen' ) . '</span>',
		'collapse' => '<span class="screen-reader-text">' . __( 'collapse child menu', 'twentyfifteen' ) . '</span>',
	) );

}
add_action( 'wp_enqueue_scripts', 'lorainccc_welded_foundation_scripts' );

function lorainccc_welded_scripts() {
	wp_enqueue_style( 'lorainccc_welded-style', get_stylesheet_uri() );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lorainccc_welded_scripts', 99 );

/**
 * Implement the Custom Header feature.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_stylesheet_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_stylesheet_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_stylesheet_directory() . '/inc/jetpack.php';


/* Use Paste As Text by default in the editor
----------------------------------------------------------------------------------------*/
add_filter('tiny_mce_before_init', 'lc_tinymce_paste_as_text', 1, 2);

function lc_tinymce_paste_as_text( $mceInit, $editor_id ) {
	$mceInit['paste_as_text'] = true;
	return $mceInit;
}