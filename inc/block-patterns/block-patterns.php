<?php
/**
 * Wires: Block Patterns
 *
 * @since 0.0.6
 */

if ( ! function_exists( 'wires_register_block_patterns' ) ) :
    function wires_register_block_patterns() {
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category(
                'wires-content-sections',
                array( 'label' => __( 'Wires Content Sections', 'wires' ) )
            );
            register_block_pattern_category(
                'wires-headers',
                array( 'label' => __( 'Wires Headers', 'wires' ) )
            );
            register_block_pattern_category(
                'wires-footers',
                array( 'label' => __( 'Wires Footers', 'wires' ) )
            );
        }
        if ( function_exists( 'register_block_pattern' ) ) {
            $block_patterns = array(
                // Content Sections
                'section-text-column-fixed-background',
                'section-split-background-media-text',
                'section-split-background-media-text-reverse',
                'section-colossal-header-text',
                'section-double-cover-fixed-image',
                'section-triptych-horizontal-scroll',

                // Headers
                'header-center-buttons',
                'header-post',

                // Footers
                'footer-center-logo',
            );

            foreach ( $block_patterns as $block_pattern ) {
                register_block_pattern(
                    'wires/' . $block_pattern,
                    require __DIR__ . '/patterns/' . $block_pattern . '.php'
                );
            }
        }
    }
endif;
add_action( 'init', 'wires_register_block_patterns', 9 );