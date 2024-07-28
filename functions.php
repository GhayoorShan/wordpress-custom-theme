<?php
// Enqueue scripts and styles
function school_recover_enqueue_scripts() {
    // Enqueue styles
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap', false);
    wp_enqueue_style('school-recover-style', get_stylesheet_uri());

    // Enqueue scripts
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('school-recover-script', get_template_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'school_recover_enqueue_scripts');

// Theme setup
function school_recover_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
    
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'school-recover'),
        'header-menu' => __('Header Menu', 'school-recover')
    ));
}
add_action('after_setup_theme', 'school_recover_theme_setup');

?>
