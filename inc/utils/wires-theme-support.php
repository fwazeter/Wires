<?php

/**
 * Add theme_supports not enabled by theme.json
 * and needed for theme utility.
 *
 * May not be needed in the future for 5.9:
 * @url https://github.com/WordPress/gutenberg/blob/16633fff2c055102fc52115e6d936de0cedeb5e5/lib/compat/wordpress-5.9/default-theme-supports.php
 *
 * @since 0.0.1
 */
if ( ! function_exists( 'wires_setup ' ) ) {
    function wires_theme_support() {
        /**
         * add_theme_support( 'wp-block-styles' ); adds slightly more
         * opinionated styles to the stylesheet for blocks - we might not
         * need these.
         * Included files:
         * @url https://github.com/WordPress/gutenberg/blob/trunk/packages/block-library/src/theme.scss
         */

        /**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
        add_theme_support( 'post-thumbnails' );

        // Add support for responsive embedded content.
        add_theme_support( 'responsive-embeds' );

        // Add support for editor styles.
        add_theme_support( 'editor-styles' );

        /**
		 * Switch default core markup for style & scripts to output valid HTML5.
         *
         * We may need to add comment-form, comment-list, gallery, caption, navigation-widgets
         * as in default classic themes - but suspect that because they are now
         * blocks they already output valid HTML5.
         *
         * @since 0.0.3
		 */
        add_theme_support(
            'html5',
            array(
                'style',
                'script',
            )
        );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Loads block stylesheets as separate inline css rather than single styles.css.
        add_filter( 'should_load_separate_core_block_assets', '__return_true' );
    }
}
add_action( 'after_setup_theme', 'wires_theme_support' );