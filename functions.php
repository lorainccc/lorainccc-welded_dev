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
	add_theme_support( 'custom-background', apply_filters( 'lorainccc_welded_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
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
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lorainccc_welded' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Gateway Menu Sidebar', 'lorainccc_welded' ),
		'id'            => 'gateway-menu-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'Calendar Sidebar', 'lorainccc_welded' ),
		'id'            => 'calendar-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

		register_sidebar( array(
		'name'          => esc_html__( 'Sub Site Announcement Sidebar', 'lorainccc_welded' ),
		'id'            => 'sub-site-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'Dashboard Icons Sidebar', 'lorainccc_welded' ),
		'id'            => 'cta-icons-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'LCCC Spotlights Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-spotlights-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'LCCC Highlights Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-highlights-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Events Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-events-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Announcements Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-announcements-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC Badges Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-badges-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
		register_sidebar( array(
		'name'          => esc_html__( 'LCCC Program Pathways Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-programpathways-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
			register_sidebar( array(
		'name'          => esc_html__( 'LCCC 404 Sidebar', 'lorainccc_welded' ),
		'id'            => 'lccc-four-o-four-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc_welded' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
 	register_sidebar( array(
		'name'          => esc_html__( 'LCCC Search Sidebar', 'lorainccc' ),
		'id'            => 'lccc-search-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  	register_sidebar( array(
		'name'          => esc_html__( 'Presidents Twitter Feed', 'lorainccc' ),
		'id'            => 'lccc-president-twitter-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
  	register_sidebar( array(
		'name'          => esc_html__( 'Presidents in the News Section', 'lorainccc' ),
		'id'            => 'lccc-president-in-news',
		'description'   => esc_html__( 'Add widgets here.', 'lorainccc' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lorainccc_welded_widgets_init' );

/**
 * Enqueue google fonts.
 */
function add_google_fonts() {
wp_enqueue_style( 'open-sans-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic&dispay=swap', false );
wp_enqueue_style( 'raleway-google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700&dispay=swap', false );

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
	
	wp_enqueue_style( 'foundation',  get_template_directory_uri() . '/foundation-643/css/foundation.css' );

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

require get_stylesheet_directory() . '/inc/lc-calendar-add-buttons.php';

/* Use Paste As Text by default in the editor
----------------------------------------------------------------------------------------*/
add_filter('tiny_mce_before_init', 'lc_tinymce_paste_as_text', 1, 2);

function lc_tinymce_paste_as_text( $mceInit, $editor_id ) {
	$mceInit['paste_as_text'] = true;
	return $mceInit;
}

/* Menu Functions */

class lc_top_bar_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class and submenu data attribute to sub menus
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\" data-submenu>\n";
	}
}

//Optional fallback
function lc_topbar_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("<ul class='children'>", '<ul class="children submenu menu vertical" data-submenu>', $fallback);

	echo '<ul class="dropdown menu" data-dropdown-menu">'.$fallback.'</ul>';
}

class lc_drill_menu_walker extends Walker_Nav_Menu
{
	/*
	 * Add vertical menu class
	 */

	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

function lc_drill_menu_fallback($args)
{
	/*
	 * Instantiate new Page Walker class instead of applying a filter to the
	 * "wp_page_menu" function in the event there are multiple active menus in theme.
	 */

	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace("children", "children vertical menu", $fallback);
	echo '<ul class="vertical menu" data-drilldown="">'.$fallback.'</ul>';
}

/* End Menu Functions */
// CHANGE EXCERPT LENGTH FOR DIFFERENT POST TYPES

function custom_excerpt_length($length) {
    global $post;
    if ($post->post_type == 'lccc_event')
    return 30;
    else if ($post->post_type == 'lccc_announcement')
    return 70;
    else
    return 40;
}
add_filter('excerpt_length', 'custom_excerpt_length');

function lccc_custom_taxonomy_dropdown( $taxonomy ) {
	$currenttax = str_replace("%body%", "black", "<body text='%body%'>");
	$args = array(
				'orderby' => 'name',
				'order' => 'ASC',
	);
	$terms = get_terms( $taxonomy , $args );
	if ( $terms ) {
		printf( '<select name="%s" class="postform" onchange="location = this.options[this.selectedIndex].value;">', esc_attr( $taxonomy ) );
		printf('<option value="/security/daily-crime-log/">Select</option>');
		foreach ( $terms as $term ) {
			printf( '<option value="'.get_bloginfo('url').'/'.str_replace('_', '-', $taxonomy).'/%s">%s</option>', esc_attr( $term->slug ), esc_html( $term->name ) );
		}
		print( '</select>' );
	}
}

// Removing Default Jetpack Sharing Button Filters

function jptweak_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );


function add_paged_var($public_query_vars) {
    $public_query_vars[] = 'page';
    return $public_query_vars;
}
add_filter('query_vars', 'add_paged_var');

function do_rewrite() {
    add_rewrite_rule('day/([^/]+)/?$', 'index.php?pagename=day&d=$matches[1]','top');
}

add_action('init', 'do_rewrite');

function get_url_var($name)
{
    $strURL = $_SERVER['REQUEST_URI'];
    $arrVals = split("/",$strURL);
    $found = 0;
    foreach ($arrVals as $index => $value) 
    {
        if($value == $name) $found = $index;
    }
    $place = $found + 1;
   return $arrVals[$place];
}

function wpbeginner_numeric_posts_nav() {

	if( is_singular() )
		return;

	global $wp_query;

	/** Stop execution if there's only 1 page */
	if( $wp_query->max_num_pages <= 1 )
		return;

	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
	$max   = intval( $wp_query->max_num_pages );

	/**	Add current page to the array */
	if ( $paged >= 1 )
		$links[] = $paged;

	/**	Add the pages around the current page to the array */
	if ( $paged >= 3 ) {
		$links[] = $paged - 1;
		$links[] = $paged - 2;
	}

	if ( ( $paged + 2 ) <= $max ) {
		$links[] = $paged + 2;
		$links[] = $paged + 1;
	}

	echo '<div class="navigation"><ul>' . "\n";

	/**	Previous Post Link */
	if ( get_previous_posts_link() )
		printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

	/**	Link to first page, plus ellipses if necessary */
	if ( ! in_array( 1, $links ) ) {
		$class = 1 == $paged ? ' class="active"' : '';

		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

		if ( ! in_array( 2, $links ) )
			echo '<li>…</li>';
	}

	/**	Link to current page, plus 2 pages in either direction if necessary */
	sort( $links );
	foreach ( (array) $links as $link ) {
		$class = $paged == $link ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
	}

	/**	Link to last page, plus ellipses if necessary */
	if ( ! in_array( $max, $links ) ) {
		if ( ! in_array( $max - 1, $links ) )
			echo '<li>…</li>' . "\n";

		$class = $paged == $max ? ' class="active"' : '';
		printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
	}

	/**	Next Post Link */
	if ( get_next_posts_link() )
		printf( '<li>%s</li>' . "\n", get_next_posts_link() );

	echo '</ul></div>' . "\n";

}

 /** Custom posts per page limit for Student News */

	function lc_student_news_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'student_news' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 5 );
    }
	}
	add_action( 'pre_get_posts', 'lc_student_news_query' );

 /** End Custom posts per page limit for Student News */

 /** Custom posts per page limit for Faculty Staff Directory */

function lc_facstaff_directory_query( $query ){
    if( ! is_admin()
        && $query->is_post_type_archive( 'faculty_staff_dir' )
        && $query->is_main_query() ){
            $query->set( 'posts_per_page', 25 );
    }
	}
add_action( 'pre_get_posts', 'lc_facstaff_directory_query' );

function lc_facstaff_directory_order( $orderby ) {
	global $wpdb;
	
	// Check if the query is for an archive
	if ( is_archive() && get_query_var("post_type") == "faculty_staff_dir" ) {
		// Query was for archive, then set order
		return "$wpdb->posts.post_title ASC";
	}
	
	return $orderby;
}

if(is_admin()){
	add_filter( 'posts_orderby' , 'lc_facstaff_directory_order' );
}