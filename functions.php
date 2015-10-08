<?php
/**
 * Adaline Pink functions
 *
 * @package Adaline Pink
 */

/**
 * Enqueue styles.
 */
function adaline_pink_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'adaline_pink_enqueue_styles' );
