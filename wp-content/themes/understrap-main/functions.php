<?php
/**
 * UnderStrap functions and definitions
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/block-editor.php',                    // Load Block Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}

function crepto_currency_theme_support_title(){
	add_theme_support('title-tag');
	add_theme_support('custom-logo');
}

add_action('after_setup_theme','crepto_currency_theme_support_title');

function crepto_currency_register_styles(){
	$version = wp_get_theme()->get('Version');
	wp_enqueue_style('crepto_currency_theme_style', get_template_directory_uri() . '/css/theme.css', array(), $version, 'all');
	// wp_enqueue_style('crepto_currency_bootstrap', get_template_directory_uri() . '/css/theme.css', array(), '1.0', 'all');
	wp_enqueue_style('crepto_currency_fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css', array(), '6.2.0', 'all');
	wp_enqueue_style('crepto_currency_google_font_1', 'https://fonts.googleapis.com', array(), '1.0', 'all');
	wp_enqueue_style('crepto_currency_google_font_2', 'https://fonts.gstatic.com', array(), '1.0', 'all');
	wp_enqueue_style('crepto_currency_google_font_3', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), '1.0', 'all');
}


add_action('wp_enqueue_scripts', 'crepto_currency_register_styles');