<?php
/**
 * Block Pattern for column with fixed background.
 *
 * @since 0.0.6
 */


$content = '
<!-- wp:cover {"url":"http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg","id":25,"hasParallax":true,"dimRatio":50,"minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":false,"wideSize":"75rem"}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"overlayColor":"primary","minHeight":100,"minHeightUnit":"vh"} -->
<div class="wp-block-cover" style="min-height:100vh"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"level":3,"textColor":"secondary"} -->
<h3 class="has-secondary-color has-text-color" id="header-for-the-background-image">Header For the Background Image</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"background"} -->
<p class="has-background-color has-text-color">This is intended as an area for having some text in a paragraph plus a header and a call to action area, this section is full height to match the background height of the other element!</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Call To Action</a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"background","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-background-color has-text-color">Another CTA</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
';

return array(
    'title'     => __( 'Section with fixed background image and text column', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);
