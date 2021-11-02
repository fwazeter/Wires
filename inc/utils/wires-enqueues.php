<?php
/**
 * Enqueue Styles for theme front end.
 *
 * @since 0.0.1
 */
if ( ! function_exists( 'wires_styles' ) ) {
    function wires_styles() {
        wp_enqueue_style(
            'wires-style',
            get_theme_file_uri( 'assets/css/style.css' ),
            '',

        );
    }
}
add_action( 'wp_enqueue_scripts', 'wires_styles' );
add_action( 'enqueue_block_editor_assets', 'wires_styles' );

/**
 * Enqueue Editor Styles to universalize look
 * between front end and back end.
 *
 * @since 0.0.1
 *//**
if ( ! function_exists( 'wires_editor_styles' ) ) {
    function wires_editor_styles() {
        wp_enqueue_style(
            'wires-style-editor',
            get_theme_file_uri( 'assets/css/style-editor.css' ),
            '',
            WIRES_VERSION
        );
    }
}
add_action( 'enqueue_block_editor_assets', 'wires_editor_styles' );

/**
 * Removing wp-emoji extra unnecessary loading.
 *
 * @since 0.0.3
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );