<?php 

add_theme_support( 'post-thumbnails' );



function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style', get_stylesheet_uri(). '/css/style.css');
	wp_enqueue_script('jquery', get_stylesheet_uri(). '/js/jquery.js');
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );




 
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );
register_nav_menus( [ 'footer' => __( 'Footer Menu' ) ] );



 ?>