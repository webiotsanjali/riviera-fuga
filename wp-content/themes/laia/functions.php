<?php
/**
 * laia functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package laia
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'laia_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function laia_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on laia, use a find and replace
		 * to change 'laia' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'laia', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'laia' ),
			)
		);
		register_nav_menus(
			array(
				'food-menu' => esc_html__( 'Food Menu', 'laia' ),
			)
		);
		register_nav_menus(
			array(
				'food-menu-en' => esc_html__( 'Food Menu En', 'laia' ),
			)
		);
		register_nav_menus(
			array(
				'footer-menu' => esc_html__( 'Footer', 'laia' ),
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
				'laia_custom_background_args',
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
add_action( 'after_setup_theme', 'laia_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function laia_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'laia_content_width', 640 );
}
add_action( 'after_setup_theme', 'laia_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function laia_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'laia' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'laia_widgets_init' );

function laia_header_address_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Address', 'laia' ),
			'id'            => 'header-1',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	); 
}
add_action( 'widgets_init', 'laia_header_address_widgets_init' );
function laia_header_location_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Location', 'laia' ),
			'id'            => 'header-2',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_header_location_widgets_init' );

function laia_header_address_en_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Address En', 'laia' ),
			'id'            => 'header-en-1',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	); 
}
add_action( 'widgets_init', 'laia_header_address_en_widgets_init' );
function laia_header_location_en_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Location En', 'laia' ),
			'id'            => 'header-en-2',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_header_location_en_widgets_init' );

function laia_header_phone_icon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Phone Icon', 'laia' ),
			'id'            => 'header-phone-icon',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_header_phone_icon_widgets_init' );

function laia_header_insta_icon_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Insta Icon', 'laia' ),
			'id'            => 'header-insta-icon',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_header_insta_icon_widgets_init' );

function laia_header_transalator_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Header Transalator', 'laia' ),
			'id'            => 'header-3',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_header_transalator_widgets_init' );
function laia_footer_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'laia' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'laia' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		)
	);
}
add_action( 'widgets_init', 'laia_footer_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function laia_scripts() {
	wp_enqueue_style( 'laia-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'laia-style', 'rtl', 'replace' );


		// Styles
		
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css' );	

		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );

		wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
		

		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' );
		
		wp_enqueue_style( 'resopnsive', get_template_directory_uri() . '/assets/css/responsive.css' );
	
		// Scripts
		
		wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery-3.5.1.min.js', array('jquery'), '3.5.1', true );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.bundle.min.js', array('jquery'), false, true );

		wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/js/bootstrap/popper.min.js', array('jquery'), false, true );

		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick/slick.js', array('jquery'), false, true );
		
		wp_enqueue_script( 'slick-animation', get_template_directory_uri() . '/assets/js/slick/slick-animation.min.js', array('jquery'), false, true );
		
		wp_enqueue_script( 'custom-slick', get_template_directory_uri() . '/assets/js/slick/custom_slick.js', array('jquery'), false, true );

		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), false, true );
		
	    // wp_enqueue_script( 'laia-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'laia_scripts' );

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
 * Bootstrap walker.
 */
require get_template_directory() . '/inc/bootstrap-walker/class-bootstrap-navwalker.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function food_menu_shortcode($attr){
    $args = shortcode_atts(
		array(
		'name'  => '',
		'container'       => 'section',
		'menu_class' => 'menu-wrapper container tab-content tab-pane fade menu-listing menu-wrap menu-sub-list',        
		),
		$attr
	);
    return wp_nav_menu( 
		array(
			'menu'         => $args['name'],
			'container'       => $args['container'],
			'menu_class'   => $args['menu_class']
		)
	);
}
add_shortcode('addmenu', 'food_menu_shortcode');