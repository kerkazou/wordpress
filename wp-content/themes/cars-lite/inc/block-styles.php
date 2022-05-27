<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Cars Lite 1.0
	 *
	 * @return void
	 */
	function cars_lite_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'cars-lite-columns-overlap',
				'label' => esc_html__( 'Overlap', 'cars-lite' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'cars-lite-border',
				'label' => esc_html__( 'Borders', 'cars-lite' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'cars-lite-border',
				'label' => esc_html__( 'Borders', 'cars-lite' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'cars-lite-border',
				'label' => esc_html__( 'Borders', 'cars-lite' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'cars-lite-image-frame',
				'label' => esc_html__( 'Frame', 'cars-lite' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'cars-lite-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'cars-lite' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'cars-lite-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'cars-lite' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'cars-lite-border',
				'label' => esc_html__( 'Borders', 'cars-lite' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'cars-lite-separator-thick',
				'label' => esc_html__( 'Thick', 'cars-lite' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'cars-lite-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'cars-lite' ),
			)
		);
	}
	add_action( 'init', 'cars_lite_register_block_styles' );
}
