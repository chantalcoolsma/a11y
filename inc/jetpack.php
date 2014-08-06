<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package a11y
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function a11y_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'a11y_jetpack_setup' );
