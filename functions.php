<?php
if (!defined('ABSPATH')) exit;

// Theme Setup
function immigrant_knowhow_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'immigrant-knowhow'),
        'footer' => __('Footer Menu', 'immigrant-knowhow'),
    ));
}
add_action('after_setup_theme', 'immigrant_knowhow_setup');

// Enqueue scripts and styles
function immigrant_knowhow_scripts() {
    wp_enqueue_style('immigrant-knowhow-style', get_stylesheet_uri());
    wp_enqueue_script('immigrant-knowhow-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'immigrant_knowhow_scripts');

// Register widget areas
function immigrant_knowhow_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'immigrant-knowhow'),
        'id'            => 'footer-1',
        'description'   => __('Add widgets here to appear in your footer.', 'immigrant-knowhow'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'immigrant_knowhow_widgets_init');

// Custom post types
function immigrant_knowhow_post_types() {
    // Stories Post Type
    register_post_type('stories', array(
        'labels' => array(
            'name' => __('Stories', 'immigrant-knowhow'),
            'singular_name' => __('Story', 'immigrant-knowhow'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-format-quote',
    ));

    // Experts Post Type
    register_post_type('experts', array(
        'labels' => array(
            'name' => __('Experts', 'immigrant-knowhow'),
            'singular_name' => __('Expert', 'immigrant-knowhow'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-businessperson',
    ));
}
add_action('init', 'immigrant_knowhow_post_types'); 