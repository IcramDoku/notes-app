<?php
function theme_setup() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'theme' ),
    ) );
}
add_action( 'after_setup_theme', 'theme_setup' );

function theme_scripts() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/script.js', array('jquery'), '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

