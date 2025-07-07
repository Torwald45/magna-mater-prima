<?php
/**
 * Block styles.
 *
 * @package magna-mater-prima
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function magna_mater_prima_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'magna-mater-prima-flat-button',
			'label' => __( 'Flat button', 'magna-mater-prima' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'magna-mater-prima-list-underline',
			'label' => __( 'Underlined list items', 'magna-mater-prima' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'magna-mater-prima-box-shadow',
			'label' => __( 'Box shadow', 'magna-mater-prima' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'magna-mater-prima-box-shadow',
			'label' => __( 'Box shadow', 'magna-mater-prima' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'magna-mater-prima-box-shadow',
			'label' => __( 'Box shadow', 'magna-mater-prima' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'magna-mater-prima-plus',
			'label' => __( 'Plus & minus', 'magna-mater-prima' ),
		)
	);
}
add_action( 'init', 'magna_mater_prima_register_block_styles' );

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
function magna_mater_prima_unregister_block_style() {
	wp_enqueue_script(
		'magna-mater-prima-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		MAGNA_MATER_PRIMA_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'magna_mater_prima_unregister_block_style' );
