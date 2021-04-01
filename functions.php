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
	wp_enqueue_style(
		'conversions-child',
		get_stylesheet_directory_uri() . '/style.css',
		['conversions-styles'],
		wp_get_theme()->get( 'Version' )
	);
}

/* Your custom functions go here */
