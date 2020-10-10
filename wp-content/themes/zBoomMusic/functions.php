<?php 

function zboom_theme_setp() {


	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => 'Primary Menu',
		'footer' => 'Footer Menu',
		'social' => 'Social Menu'

	));

	 $defaults = array(
	 // 'height'      => 100,
	 // 'width'       => 400,
	 'flex-height' => true,
	 'flex-width'  => true,
	 'header-text' => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
	 );
	 add_theme_support( 'custom-logo', $defaults );

	function wordLimit($contet){
		$word = explode('', $contet);
		$output = array_slice($word,0,30);
		return $output;
	}

	wp_enqueue_style( 'style', get_stylesheet_uri() );





}
add_action( 'after_setup_theme', 'zboom_theme_setp' );












 ?>