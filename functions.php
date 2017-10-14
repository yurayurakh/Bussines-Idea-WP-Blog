<?php
/**
 * Bussines Idea functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bussines_Idea
 */

/**

Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false');
/**

Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );

/** Theme Option */
require( trailingslashit( get_template_directory() ) . 'template/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . 'template/theme-options.php' );


function bussines_idea_setup() {

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
        'menu-1' => esc_html__( 'Primary', 'bussines-idea' ),
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
add_action( 'after_setup_theme', 'bussines_idea_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bussines_idea_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bussines-idea' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bussines-idea' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bussines_idea_widgets_init' );


/* Enqueue Style **/

function bussines_idea_style() {
    wp_enqueue_style( 'bussines-idea-style', get_stylesheet_uri() );

    wp_enqueue_style( 'OwlCarousel', get_template_directory_uri() . '/lib/OwlCarousel2/dist/assets/owl.theme.default.min.css', array('bussines-idea-style'));

}

add_action( 'wp_enqueue_scripts', 'bussines_idea_style' );

/* Enqueue Scripts **/

function bussines_idea_scripts() {

    //wp_enqueue_script( 'jquery2', get_template_directory_uri() . '/lib/jquery/jquery.min.js', array(''), '',true );
    wp_enqueue_script( 'OwlCarousel', get_template_directory_uri() . '/lib/OwlCarousel2/dist/owl.carousel.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'bussines-idea-common-js', get_template_directory_uri() . '/js/common.js', array('jquery'), '',true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}


}

add_action( 'wp_enqueue_scripts', 'bussines_idea_scripts' );



