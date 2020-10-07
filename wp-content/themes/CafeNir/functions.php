<?php 




function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );




 
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ] );
register_nav_menus( [ 'footer' => __( 'Footer Menu' ) ] );



 ?>