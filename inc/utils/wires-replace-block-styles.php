<?php
/**
 * Removes default Block Styles from WordPress and
 * enqueues theme specific CSS files instead.
 *
 * We do it this way so that we can not only add to
 * a style but also entirely replace values that
 * conflict with design schema.
 * @url https://github.com/WordPress/gutenberg/issues/32051
 * @since 0.0.3
 */

function wires_replace_block_styles() {
    $styles = array(
        // Text Blocks
        'wp-block-paragraph',
        'wp-block-heading',
        'wp-block-list',
        'wp-block-quote',
        'wp-block-code',
        'wp-block-preformatted',
        'wp-block-pullquote',
        'wp-block-table',

        // Media Blocks
        //'wp-block-image',
        //'wp-block-media-text',

        'wp-block-group',
        // Design Blocks
        // 'wp-block-columns',
        'wp-block-buttons',
        'wp-block-button',
        'wp-block-separator'
    );
    foreach ( $styles as $style ) {
        // Remove the block style
        wp_deregister_style( $style );

        // Register the theme style
        $register_style = str_replace( 'wp-block-', '', $style );
        $style_url = get_theme_file_uri( "/assets/css/blocks/{$register_style}.css" );
        // If the file exists, register the style.
        if ( file_exists( get_theme_file_path( "assets/css/blocks/{$register_style}.css" ) ) ) {
            wp_register_style( $style,
                $style_url,
                '',
            WIRES_VERSION
            );
        }
    }
}
add_action( 'wp_enqueue_scripts', 'wires_replace_block_styles', 20 );
add_action( 'enqueue_block_editor_assets', 'wires_replace_block_styles', 20 );
