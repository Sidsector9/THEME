<?php
/**
 * Euclid functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Euclid
 */

if ( ! function_exists( 'euclid_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function euclid_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Euclid, use a find and replace
	 * to change 'euclid' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'euclid', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'euclid' ),
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
	add_theme_support( 'custom-background', apply_filters( 'euclid_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'euclid_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function euclid_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'euclid_content_width', 640 );
}
add_action( 'after_setup_theme', 'euclid_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function euclid_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'euclid' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'euclid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'euclid' ),
		'id'            => 'footer-one',
		'description'   => esc_html__( 'Add widgets here.', 'euclid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'euclid' ),
		'id'            => 'footer-two',
		'description'   => esc_html__( 'Add widgets here.', 'euclid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'euclid' ),
		'id'            => 'footer-three',
		'description'   => esc_html__( 'Add widgets here.', 'euclid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'euclid' ),
		'id'            => 'footer-four',
		'description'   => esc_html__( 'Add widgets here.', 'euclid' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'euclid_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function euclid_scripts() {
	wp_enqueue_style( 'euclid-style', get_stylesheet_uri() );

	wp_enqueue_style( 'euclid-main', get_template_directory_uri() . '/lib/css/main.css' );

	wp_enqueue_style( 'euclid-bootstrap-css', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap-theme.min.css' );

	wp_enqueue_style( 'euclid-bootstrap-css2', get_template_directory_uri() . '/lib/bootstrap/css/bootstrap.min.css' );

	wp_enqueue_script( 'euclid-custom-script', get_template_directory_uri() . '/lib/js/euclid-custom-script.js', array( 'jquery' ) );

	wp_enqueue_script( 'euclid-bootstrap-js', get_template_directory_uri() . '/lib/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '20151215',true );

	wp_enqueue_script( 'euclid-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'euclid-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'euclid_scripts' );

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
 * Load Bootstrap Navwalker file.
 */
require get_template_directory() . '/lib/bootstrap/php/wp_bootstrap_navwalker.php';

/**
 * Add support for excerpt in pages.
 */
add_action( 'init', 'my_add_excerpts_to_pages' );
function my_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}

/**
 * WordPress customizer setting for footer logo.
 */
add_action( 'customize_register', 'euclid_theme_customize_register' );
function euclid_theme_customize_register( $wp_customize ) {
	/*
	* Header/Footer logo
    */
	$wp_customize->add_section( 'header_footer_logo_upload' , array(
	    'title'      => __( 'Header/Footer Logo', 'euclid' ),
	    'priority'   => 30,
	) );

	$wp_customize->add_setting( 'header_logo_setting' , array(
	    'default'     => get_template_directory_uri() . '/images/recent-pro-1.jpg',
	    'transport'   => 'refresh',
	), array( 'sanitize_callback' => '__return_false' ) );

   $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'header_logo_control', array(
			'label'       =>  __( 'Header Logo', 'euclid' ),
			'description' =>  __( 'A resolution of 277 x 85 is recommended.', 'euclid' ),
			'section'     =>  'header_footer_logo_upload',
			'settings'    =>  'header_logo_setting',
		) ) 
	);

   $wp_customize->add_setting( 'footer_logo_setting' , array(
	    'default'     => get_template_directory_uri() . '/images/recent-pro-1.jpg',
	    'transport'   => 'refresh',
	), array( 'sanitize_callback' => '__return_false' ) );

   $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'footer_logo_control', array(
			'label'       =>  __( 'Footer Logo', 'euclid' ),
			'description' =>  __( 'A resolution of 194 x 60 is recommended.', 'euclid' ),
			'section'     =>  'header_footer_logo_upload',
			'settings'    =>  'footer_logo_setting',
		) ) 
	);

   /*
	* Site info
    */
   $wp_customize->add_section( 'site_info_section' , array(
	    'title'      => __( 'Site Info text', 'euclid' ),
	    'priority'   => 30,
	) );

   $wp_customize->add_setting( 'site_info_setting' , array(
					    'default'     => '',
					    'transport'	  => 'postMessage',
					) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'converse_mi1', array(
	            'label'          => __( 'Set site info text', 'converse' ),
	            'section'        => 'site_info_section',
	            'settings'       => 'site_info_setting',
	            'type'           => 'text',
	        )
	    )
	);
}
