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
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_theme_support(
            'html5',
            array(
                'style',
                'script',
            )
        );
        add_theme_support( 'automatic-feed-links' );
        add_filter( 'should_load_separate_core_block_assets', '__return_true' );
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

/**
 * Removing wp-emoji extra unnecessary loading.
 *
 * @since 0.0.3
 */
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

/**
 * Overriding specificity in blocks at this moment is
 * not at a great point in development. E.g. if we want to replace
 * margin-* with margin-block-start* values for a11y, it's just as much
 * work as dequeueing.
 *
 * Ultimately, we'll requeue default styles when theme.json is more
 * powerful and flexible - but we want to influence blocks as much
 * as possible from a macro level such as through global styles
 * and themes.
 *
 * @since 0.0.3
 */
function dequeue_block_styles() {
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
//add_action( 'wp_enqueue_scripts', 'dequeue_block_styles' );

/**
 * Filter hook attempt to change gutenberg_get_layout_style
 * to change margin-left & margin-right to margin-inline-start / end.
 *
 * @param $style string CSS selector.
 * @param $layout array Layout object.
 * @return string
 * @since 0.0.3
 */
function block_container_margin (string $style, array $layout ) {
    $layout_type = isset( $layout['type'] ) ? $layout['type'] : 'default';

    $style = '';
    if ( 'default' === $layout_type ) {
        str_replace(
            'margin-left: auto !important;',
            'margin-inline-start: auto !important;',
            $style
        );
        return $style;
    }
}
