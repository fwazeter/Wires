<?php

/**
 * Set theme version to global variable.
 *
 * @since 0.0.1
 */
define( 'WIRES_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme_supports not enabled by theme.json
 * and needed for theme utility.
 *
 * @since 0.0.1
 */
if ( ! function_exists( 'wires_setup ' ) ) {
    function wires_setup() {
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support( 'wp-block-styles' );
    }
}
add_action( 'after_setup_theme', 'wires_setup' );

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
            WIRES_VERSION
        );
    }
}
add_action( 'wp_enqueue_scripts', 'wires_styles' );

/**
 * Enqueue Editor Styles to universalize look
 * between front end and back end.
 *
 * @since 0.0.1
 */
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
