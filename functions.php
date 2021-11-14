<?php
/**
 * Boro 3D Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package boro-3d
 */

add_action( 'wp_enqueue_scripts', 'storefront_parent_theme_enqueue_styles' );

/**
 * Enqueue scripts and styles.
 */
function storefront_parent_theme_enqueue_styles() {
	wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'boro-3d-style',
		get_stylesheet_directory_uri() . '/style.css',
		[ 'storefront-style' ]
	);
}
