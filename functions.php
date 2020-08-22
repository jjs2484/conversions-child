<?php
/*
This file is part of Conversions Child.

All functions in this file will be loaded before the parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.
*/

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', 'conversions_child_enqueue_styles' );
function conversions_child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/* Your custom functions go here */
