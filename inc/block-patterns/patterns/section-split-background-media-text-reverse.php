<?php
/**
 * Block Pattern for reverse split horizontal
 * split background with media + text overlay
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:group {"align":"full","textColor":"background","gradient":"horizontal-divider-primary-to-background"} -->
<div class="wp-block-group alignfull has-background-color has-horizontal-divider-primary-to-background-gradient-background has-text-color has-background"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:media-text {"mediaId":25,"mediaLink":"http://localhost:8888/?attachment_id=25","mediaType":"image","verticalAlignment":"bottom","imageFill":true,"backgroundColor":"background"} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-bottom is-image-fill has-background-background-color has-background"><figure class="wp-block-media-text__media" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/10/mononoke-1024x576.jpeg);background-position:50% 50%"><img src="http://localhost:8888/wp-content/uploads/2021/10/mononoke-1024x576.jpeg" alt="" class="wp-image-25 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"textColor":"secondary"} -->
<h3 class="has-secondary-color has-text-color" id="welcome-to-the-webb-well-way-of-life">Your Health is Your Wealth</h3>
<!-- /wp:heading -->

<!-- wp:group {"backgroundColor":"primary"} -->
<div class="wp-block-group has-primary-background-color has-background"><!-- wp:paragraph -->
<p>You didn’t turn into that person in the mirror in a matter of days, and you probably won’t feel great overnight either. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Breaking bad habits and creating personal health and wellness strategies takes discipline, drive, and determination. While you’ve reached the heights of success in business or life, you might feel as if you can no longer access the discipline that is required to <em>feel </em>and <em>be</em> ‘well.’</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div></div>
<!-- /wp:media-text --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';

return array(
    'title'     => __( 'Reverse Split Background Media & Text', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);
