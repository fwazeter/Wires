<?php
/**
 * Block Pattern for Two column layout with colossal
 * text and inner page call to actions.
 *
 * @since 0.0.6
 */
$content = '
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:heading {"style":{"typography":{"lineHeight":"1.15"}},"fontSize":"colossal"} -->
<h2 class="has-colossal-font-size" id="welcome-tothe-aviary-1" style="line-height:1.15"><em>Welcome to Webb Well </em></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"6rem"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-bottom:6rem"><!-- wp:paragraph -->
<p>Now that you’re reading this, I imagine that at some point recently you looked in the mirror and realized—your next project is you.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":20} -->
<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">My Story</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">Resume</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
';

return array(
    'title'     => __( 'Colossal Header & Text', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);