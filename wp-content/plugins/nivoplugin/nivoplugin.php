<?php
/*
    Plugin Name: Nivo Plugin
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Ciprian Turcu
    Version: 1.0
*/


function np_init() {
    $args = array(
        'public' => true,
        'label' => 'Nivo Images',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('np_images', $args);
}
add_action('init', 'np_init');




add_action('wp_print_scripts', 'np_register_scripts');
function np_register_scripts() {
    if (!is_admin()) {
        // register
        wp_register_script('np_nivo-script', plugins_url('/jquery.nivo.slider.js', __FILE__), array( 'jquery' ));
        wp_register_script('np_script', plugins_url('script.js', __FILE__));
 
        // enqueue
        wp_enqueue_script('np_nivo-script');
        wp_enqueue_script('np_script');
    }
}



add_action('wp_print_styles', 'np_register_styles');
function np_register_styles() {
    // register
    wp_register_style('np_styles', plugins_url('css/nivo-slider.css', __FILE__));
    wp_register_style('np_styles_theme', plugins_url('nivo-slider/themes/default/default.css', __FILE__));
 
    // enqueue
    wp_enqueue_style('np_styles');
    wp_enqueue_style('np_styles_theme');
}