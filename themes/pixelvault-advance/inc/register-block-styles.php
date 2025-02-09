<?php
/**
 * Block styles.
 *
 * @package pixelvault-advance
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function pixelvault_advance_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'pixelvault-advance-flat-button',
			'label' => __( 'Flat button', 'pixelvault-advance' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'pixelvault-advance-list-underline',
			'label' => __( 'Underlined list items', 'pixelvault-advance' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'pixelvault-advance-box-shadow',
			'label' => __( 'Box shadow', 'pixelvault-advance' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'pixelvault-advance-box-shadow',
			'label' => __( 'Box shadow', 'pixelvault-advance' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'pixelvault-advance-box-shadow',
			'label' => __( 'Box shadow', 'pixelvault-advance' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'pixelvault-advance-plus',
			'label' => __( 'Plus & minus', 'pixelvault-advance' ),
		)
	);
}
add_action( 'init', 'pixelvault_advance_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function pixelvault_advance_unregister_block_style() {
	wp_enqueue_script(
		'pixelvault-advance-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		PIXELVAULT_ADVANCE_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'pixelvault_advance_unregister_block_style' );
