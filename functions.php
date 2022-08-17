<?php
/*	-----------------------------------------------------------------------------------------------
	Theme Support
--------------------------------------------------------------------------------------------------- */



 if(! function_exists('spaceblock_support')) :

	function spaceblock_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style('style.css');

	}

 endif;

add_action('after_setup_theme', 'spaceblock_support');

/*	-----------------------------------------------------------------------------------------------
	Enqueue Stylesheet & Scripts
--------------------------------------------------------------------------------------------------- */
if ( ! function_exists( 'spaceblock_styles_scripts' ) ) :


	function spaceblock_styles_scripts() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;
		$in_footer = true;

		wp_enqueue_style('spaceblock-style',get_theme_file_uri('/style.css'),$version_string);
		wp_enqueue_script('spaceblock-app',get_theme_file_uri('/assets/js/app.js'),array(),$theme_version,$in_footer);


	}

endif;

add_action('wp_enqueue_scripts', 'spaceblock_styles_scripts');


/*	-----------------------------------------------------------------------------------------------
	Enqeuue Blocks Styles
--------------------------------------------------------------------------------------------------- */
if ( ! function_exists( 'spaceblock_block_styles' ) ) :

	function spaceblock_block_styles() {
		$theme_version  = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script('spaceblock-block-styles',get_theme_file_uri( '/assets/js/block-styles.js' ),array( 'wp-blocks' ),$version_string,true);

	}

endif;

add_action( 'enqueue_block_editor_assets', 'spaceblock_block_styles' );

/*	-----------------------------------------------------------------------------------------------
	Modify Excerpt
--------------------------------------------------------------------------------------------------- */
if ( ! function_exists( 'spaceblock_excerpt_more' ) ) :

function spaceblock_excerpt_more( $more ) {
	return '&hellip;';
}
endif;

add_filter( 'excerpt_more', 'spaceblock_excerpt_more' );

/*	-----------------------------------------------------------------------------------------------
	Register Patterns Categories
--------------------------------------------------------------------------------------------------- */
if ( ! function_exists( 'spaceblock_register_block_patterns' ) ) :

function spaceblock_register_block_patterns() {
	if( ! function_exists( 'register_block_pattern_category' ) ) return;

	// The block pattern categories included in Poe.
	$spaceblock_block_pattern_categories = apply_filters( 'spaceblock_block_pattern_categories', array(
		'spaceblock-query' => array( 'label' => __( 'spaceblock Query', 'spaceblock' ) ),
		'spaceblock-footer'   => array( 'label' => __( 'spaceblock Footer', 'spaceblock' ) ),
		'spaceblock-header'   => array( 'label' => __( 'spaceblock Header', 'spaceblock' ) ),
		'spaceblock-hero'    => array( 'label' => __( 'spaceblock Hero', 'spaceblock' ) ),
		'spaceblock-section'    => array( 'label' => __( 'spaceblock Section', 'spaceblock' ) ),
	));

	// Sort the block pattern categories alphabetically based on the label value, to ensure alphabetized order when the strings are localized.
	uasort( $spaceblock_block_pattern_categories, function( $a, $b ) {
		return strcmp( $a["label"], $b["label"] ); }
	);

	// Register block pattern categories.
	foreach ( $spaceblock_block_pattern_categories as $slug => $settings ) {
		register_block_pattern_category( $slug, $settings );
	}

}
endif;

add_action( 'init', 'spaceblock_register_block_patterns' );