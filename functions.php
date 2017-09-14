<?php
function golive_template_script_enqueue() {
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('style', get_stylesheet_uri()); 
	wp_enqueue_style('slidestyle', get_template_directory_uri() . '/includes/slider/css/style.css', array(), '1.0.0', 'all');
	wp_enqueue_style('fontsslider', get_template_directory_uri() . '/includes/slider/css/font-awesome.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('animate', get_template_directory_uri() . '/includes/slider/css/animate.min.css', array(), '1.0.0', 'all');
	wp_enqueue_style('carouselstyle', get_template_directory_uri() . '/includes/carousel/dist/assets/owl.carousel.min.css', array(), '1.0.0', 'all');
	wp_enqueue_script('jquery');
	wp_enqueue_script('customfunctions', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
	wp_enqueue_script('jqueryui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.0.0', true );
	wp_enqueue_script('sliderjs', get_template_directory_uri() . '/includes/slider/js/zenith.js', array(), '1.0.0', true );
	wp_enqueue_script('carouseljs', get_template_directory_uri() . '/includes/carousel/dist/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script('jquery_cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array(), '1.0.0', true );
	wp_enqueue_script( 'custom-ajax-request',  get_template_directory_uri() . '/js/ajax.js', array( 'jquery' ) );
	wp_localize_script( 'custom-ajax-request', 'MyAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}
add_action( 'wp_enqueue_scripts', 'golive_template_script_enqueue');
/* Menu setup */
add_action('init', 'golive_template_menu_setup');
function golive_template_menu_setup() {
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_theme_support('menus');
}
/* Font Family setup */
add_action( 'wp_enqueue_scripts', 'golive_template_fonts' );
function golive_template_fonts() {
}
/* Ajax request sample */
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
function load_more_posts(){
	//Your ajax data here. 
	die();
}
/* Widgets register */
add_action('widgets_init', 'golive_template_widgets');
function golive_template_widgets(){
}
/* Enable sessions */
add_action('init', 'myStartSession', 1);
function myStartSession() {
	if(!session_id()) {
		session_start();
	}
}
/* Support WooCommerce */
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}