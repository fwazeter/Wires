<?php

/**
 * Set theme version to global variable.
 *
 * @since 0.0.1
 */
define( 'WIRES_VERSION', wp_get_theme()->get( 'Version' ) );

// Theme Support
require_once 'inc/utils/wires-theme-support.php';

// Enqueue stylesheets
require_once 'inc/utils/wires-enqueues.php';

// Replace block styles with theme styles
require_once 'inc/utils/wires-replace-block-styles.php';

// Add new inlines
require_once 'inc/utils/wires-safe-style-attrs.php';

// Register Block Patterns
require_once 'inc/block-patterns/block-patterns.php';