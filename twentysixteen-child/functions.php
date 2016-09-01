<?php
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scroller', get_stylesheet_directory_uri() . '/js/scrollers.js', array(), '1.0.0', true );
    wp_enqueue_script( 'scroller', get_template_directory_uri() . '/js/functions.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
?>