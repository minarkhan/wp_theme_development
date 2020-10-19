<?php
/*
    Plugin Name: Lazy Loading
    Description: Simple implementation of a nivo slideshow into WordPress
    Author: Ciprian Turcu
    Version: 1.0
*/

function lazy_init() {
    $args = array(
        'public' => true,
        'label' => 'Lazy Loading',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('lazy_loading', $args);

add_image_size('lazy_widget', 180, 100, true);
add_image_size('lazy_function', 50, 10, true);
add_theme_support( 'post-thumbnails' );
}
add_action('init', 'lazy_init');


add_action('wp_print_scripts', 'lazy_register_scripts');
add_action('wp_print_styles', 'lazy_register_styles');
function lazy_register_scripts() {
    if (!is_admin()) {
        // register
        wp_register_script('lazy_script', plugins_url('square1.js', __FILE__));
        wp_register_script('lazy_cus_script', plugins_url('script.js', __FILE__));
 
        // enqueue
        wp_enqueue_script('lazy_script');
    }
}
 
function lazy_register_styles() {
    // register
    wp_register_style('lazy_styles', plugins_url('square1.css', __FILE__));
    wp_register_style('styles_theme', plugins_url('style.css', __FILE__));
 
    // enqueue
    wp_enqueue_script( 'jquery');
    wp_enqueue_style('lazy_styles');
    wp_enqueue_style('styles_theme');
}



function lazy_function($type='np_function') {
    $args = array(
        'post_type' => 'lazy_loading',
        'posts_per_page' => 5
    );


    $result = '<div class="container">';
    $result .= '<div class="slideshow example-2">';
 
    //the loop
    global $post;
    $loop = new WP_Query($args);
    while ($loop->have_posts()) {
        $loop->the_post();
 
        $the_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), $type);
        $result .='<img title="'.get_the_title().'" src="' . $the_url[0] . '" data-thumb="' . $the_url[0] . '" alt=""/>';
    }

    $result .='</div>';
    $result .='</div>';
    return $result;
}

add_shortcode('lazy-shortcode', 'lazy_function');

