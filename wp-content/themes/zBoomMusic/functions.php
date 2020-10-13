<?php 

function zboom_theme_setup() {

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
add_action( 'after_setup_theme', 'zboom_theme_setup' );



/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function register_custom_slider() {

	$labels = array(
		'name'               => __( 'Sliders', 'zboom' ),
		'singular_name'      => __( 'Slide', 'zboom' ),
		'add_new'            => _x( 'Add New Slide', 'zboom', 'zboom' ),
		'add_new_item'       => __( 'Add New Slide', 'zboom' ),
		'edit_item'          => __( 'Edit Slide', 'zboom' ),
		'new_item'           => __( 'New Slide', 'zboom' ),
		'view_item'          => __( 'View Slide', 'zboom' ),
		'search_items'       => __( 'Search Sliders', 'zboom' ),
		'not_found'          => __( 'No Sliders found', 'zboom' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash', 'zboom' ),
		'parent_item_colon'  => __( 'Parent Slide:', 'zboom' ),
		'menu_name'          => __( 'Sliders', 'zboom' ),
	);

	$args = array(
		'labels'              => $labels,
		'description'         => 'Our Home Slider',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			//'editor',
			'thumbnail',
			//'page-attributes',
			//'post-formats',
		),
	);

	register_post_type( 'zboomslider', $args );


$labels = array(
		'name'               => __( 'Services', 'zboom' ),
		'singular_name'      => __( 'Service', 'zboom' ),
		'add_new'            => _x( 'Add New Service', 'zboom', 'zboom' ),
		'add_new_item'       => __( 'Add New Service', 'zboom' ),
		'edit_item'          => __( 'Edit Service', 'zboom' ),
	);

	$args = array(
		'labels'              => $labels,
		'description'         => 'Our Home Service',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			//'thumbnail',
			//'page-attributes',
			//'post-formats',
		),
	);

	register_post_type( 'zboomservice', $args );
}



add_action( 'init', 'register_custom_slider' );

function zboom_widgets(){
	/**
	 * Creates a sidebar
	 */
	
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'text-domain' ),
		'id'            => 'right_sidebar',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="box">',
		'after_widget'  => '</div></div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="content">',
	) );



	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'text-domain' ),
		'id'            => 'footer_widget',
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">',
		'after_widget'  => '</div>
					</div>
				</div>
			</div>',
		'before_title'  => '<div class="heading"><h2>',
		'after_title'   => '</h2></div><div class="tag content">',
	) );

}
add_action( 'widgets_init', 'zboom_widgets' );

function dashboard_widget_function() {
    echo '
        <h2>Custom Dashboard Widget</h2>
        <p>Custom content here</p>
    ';
}

function add_dashboard_widgets() {
    wp_add_dashboard_widget( 'custom_dashboard_widget', 'Custom Dashoard Widget', 'dashboard_widget_function' );
}
add_action( 'wp_dashboard_setup', 'add_dashboard_widgets' );







 ?>