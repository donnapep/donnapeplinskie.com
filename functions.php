<?php
/**
 * Enqueue theme scripts and styles.
 */
function donnapep_theme_scripts() {
	wp_enqueue_style(
		'donnapep-style',
		get_stylesheet_uri(),
		array(),
		filemtime( get_stylesheet_directory() . '/style.css' )
	);

	wp_enqueue_script(
		'donnapep-animations',
		get_template_directory_uri() . '/assets/js/animations.js',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/js/animations.js' ),
		true
	);
}
add_action( 'wp_enqueue_scripts', 'donnapep_theme_scripts' );

/**
 * Enqueue editor styles.
 */
function donnapep_editor_styles() {
	add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'donnapep_editor_styles' );

/**
 * Register custom block pattern category.
 */
function donnapep_register_pattern_categories() {
	register_block_pattern_category(
		'donnapeplinskie',
		array( 'label' => __( 'Donna Peplinskie', 'donnapeplinskie' ) )
	);
}
add_action( 'init', 'donnapep_register_pattern_categories' );