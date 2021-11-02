<?php
/**
 * Block Pattern for split horizontal split background
 * with media + text overlay
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:group {"align":"full","gradient":"horizontal-divider-background-to-primary"} -->
<div class="wp-block-group alignfull has-horizontal-divider-background-to-primary-gradient-background has-background"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaPosition":"right","mediaId":25,"mediaLink":"http://localhost:8888/?attachment_id=25","mediaType":"image","verticalAlignment":"bottom","imageFill":true,"backgroundColor":"primary"} -->
<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-bottom is-image-fill has-primary-background-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/10/mononoke-1024x576.jpeg);background-position:50% 50%"><img src="http://localhost:8888/wp-content/uploads/2021/10/mononoke-1024x576.jpeg" alt="" class="wp-image-25 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"textColor":"secondary"} -->
<h2 class="has-secondary-color has-text-color" id="welcome-to-the-webb-well-way-of-life">Welcome to the Webb Well Way of Life</h2>
<!-- /wp:heading -->

<!-- wp:group {"backgroundColor":"secondary"} -->
<div class="wp-block-group has-secondary-background-color has-background"><!-- wp:paragraph -->
<p>Now that you’re reading this, I imagine that at some point recently you looked in the mirror and realized—your next project is you.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';

return array(
    'title'     => __( 'Split Background Media & Text', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);

