<?php

// Theme setup: enable core supports and register navigation menus.
function sixtus_modern_demo_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'sixtus-modern-demo'),
            'footer' => __('Footer Menu', 'sixtus-modern-demo'),
        )
    );
}
add_action('after_setup_theme', 'sixtus_modern_demo_setup');

// Front-end assets: base stylesheet + shared JS behavior (nav, language toggle, form demo).
function sixtus_modern_demo_assets() {
    wp_enqueue_style('sixtus-modern-demo-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('sixtus-modern-demo-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'sixtus_modern_demo_assets');

// Editor styling to match front-end typography and layout.
function sixtus_modern_demo_editor_styles() {
    add_editor_style('style.css');
}
add_action('admin_init', 'sixtus_modern_demo_editor_styles');
