<?php
register_nav_menus(
	array( 'primary-menu' => 'header-menu' )
);
add_theme_support( 'post-thumbnails' );
function my_custom_init() {
	add_post_type_support( 'books', 'thumbnail' );
}
function enqueue_scripts() {
	wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function custom_styles() {
	// Enqueue styles
	wp_enqueue_style( 'footercss', '/wp-content/themes/verloop/assests/css/footer.css' );
	wp_enqueue_style( 'headercss', '/wp-content/themes/verloop/assests/css/header.css' );
	wp_enqueue_style( 'homecss', '/wp-content/themes/verloop/assests/css/home.css' );
    wp_enqueue_script( 'main', '/wp-content/themes/verloop/assests/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'custom_styles', 11 );
