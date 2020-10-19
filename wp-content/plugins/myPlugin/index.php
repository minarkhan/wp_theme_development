<?php
/*
Plugin Name: Simple Widget plugin
Plugin URI: http://jakir.me
Description: Simple Widget plugin for wordpress
Author: Jakir Hossain
Version: 1.0
Author URI: http://jakir.me
*/
?>



<?php
/**
* Simple Widget Class
*/
class simple_widget extends WP_Widget {
/** constructor -- name this the same as the class above */

	function simple_widget() {
	parent::WP_Widget(false, $name = 'Simple Widget');
	}
	 


	/** @see WP_Widget::widget */
	function widget($args, $instance) {
	extract( $args );
	$title = apply_filters('widget_title', $instance['title']);
	$your_name = $instance['your_name'];
	?>
	 
	<?php echo $before_widget; ?>
	 
	<?php if ( $title )
	echo $before_title . $title . $after_title; ?>
	 
	<?php echo "Hello " . $your_name ."! ";
	echo "Today is " . date("l");
	?>
	 
	<?php echo $after_widget; ?>
	 
	<?php
	}
	 


	/** @see WP_Widget::update */
	function update($new_instance, $old_instance) {
	$instance = $old_instance;
	$instance['title'] = strip_tags($new_instance['title']);
	$instance['your_name'] = strip_tags($new_instance['your_name']);
	return $instance;
	}
	 


	/** @see WP_Widget::form */
	function form($instance) {
	 
	$title = esc_attr($instance['title']);
	$your_name = esc_attr($instance['your_name']);

	?>
	<p>
		<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id('your_name'); ?>"><?php _e('Enter your name'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id('your_name'); ?>" name="<?php echo $this->get_field_name('your_name'); ?>" type="text" value="<?php echo $your_name; ?>" />
	</p>
	 
	<?php
	 }


 
} // end class simple_widget
 
add_action('widgets_init', create_function('', 'return register_widget("simple_widget");'));







function my_slider(){

	
		$labels = array(
			'name'               => __( 'Sliders', 'text-domain' ),
			'singular_name'      => __( 'Slide', 'text-domain' ),
			'add_new'            => _x( 'Add New Slide', 'text-domain', 'text-domain' ),
			'add_new_item'       => __( 'Add New Slide', 'text-domain' ),
			'edit_item'          => __( 'Edit Slide', 'text-domain' ),
			'new_item'           => __( 'New Slide', 'text-domain' ),
			'view_item'          => __( 'View Slide', 'text-domain' ),
			'search_items'       => __( 'Search Sliders', 'text-domain' ),
			'not_found'          => __( 'No Sliders found', 'text-domain' ),
			'not_found_in_trash' => __( 'No Sliders found in Trash', 'text-domain' ),
			'parent_item_colon'  => __( 'Parent Slide:', 'text-domain' ),
			'menu_name'          => __( 'Sliders', 'text-domain' ),
		);
	
		$args = array(
			'labels'              => $labels,
			'hierarchical'        => false,
			'description'         => 'description',
			'taxonomies'          => array(),
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'show_in_admin_bar'   => true,
			'menu_position'       => null,
			'menu_icon'           => null,
			'show_in_nav_menus'   => true,
			'publicly_queryable'  => true,
			'exclude_from_search' => false,
			'has_archive'         => true,
			'query_var'           => true,
			'can_export'          => true,
			'rewrite'             => true,
			'capability_type'     => 'post',
			'supports'            => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'trackbacks',
				'comments',
				'revisions',
				'page-attributes',
				'post-formats',
			),
		);
	
		register_post_type( 'slider', $args );

	

}
add_action( 'init', 'my_slider' );