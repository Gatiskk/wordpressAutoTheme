<?php
// Enable Featured Image support
add_theme_support('post-thumbnails');

// Register Custom Post Type "Car"
function create_car_post_type() {
    register_post_type('car',
        array(
            'labels' => array(
                'name' => __('Cars'),
                'singular_name' => __('Car')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'cars'),
            'supports' => array('title', 'editor', 'thumbnail'),
        )
    );
}
add_action('init', 'create_car_post_type');

// Register the Menu
function autotheme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'autotheme'),
    ));
}
add_action('after_setup_theme', 'autotheme_setup');

// Enqueue Theme CSS
function autotheme_enqueue_styles() {
    wp_enqueue_style('autotheme-style', get_template_directory_uri() . '/css/style.css');
}
add_action('wp_enqueue_scripts', 'autotheme_enqueue_styles');
?>