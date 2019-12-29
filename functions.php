<?php
/*
This file is part of Conversions Child.

All functions of this file will be loaded before the parent theme functions.
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

/*
Creates the following element shortcodes:

[conversions_clients]
[conversions_features]
[conversions_pricing]
[conversions_testimonials]
*/

// Create clients carousel shortcode
add_shortcode('conversions_clients', 'conversions_clients_shortcode');
if ( ! function_exists( 'conversions_clients_shortcode' ) ) {
	function conversions_clients_shortcode() {
		$homepage = new conversions\homepage();
		return '<section class="c-clients c-shortcode mt-4 mb-4"><div class="row">'.$homepage->clients_content().'</div></section>';
	}
}

// Create features shortcode
add_shortcode('conversions_features', 'conversions_features_shortcode');
if ( ! function_exists( 'conversions_features_shortcode' ) ) {
	function conversions_features_shortcode() {
		$homepage = new conversions\homepage();
		return '<section class="c-features c-shortcode mt-4 mb-2"><div class="row">'.$homepage->features_content().'</div></section>';
	}
}

// Create pricing tables shortcode
add_shortcode('conversions_pricing', 'conversions_pricing_shortcode');
if ( ! function_exists( 'conversions_pricing_shortcode' ) ) {
	function conversions_pricing_shortcode() {
		$homepage = new conversions\homepage();
		return '<section class="c-pricing c-shortcode mt-4 mb-2"><div class="row">'.$homepage->pricing_content().'</div></section>';
	}
}

// Create testimonials shortcode
add_shortcode('conversions_testimonials', 'conversions_testimonials_shortcode');
if ( ! function_exists( 'conversions_testimonials_shortcode' ) ) {
	function conversions_testimonials_shortcode() {
		$homepage = new conversions\homepage();
		return '<section class="c-testimonials c-shortcode mt-4 mb-2"><div class="row">'.$homepage->testimonials_content().'</div></section>';
	}
}

/* Your custom functions go here */
