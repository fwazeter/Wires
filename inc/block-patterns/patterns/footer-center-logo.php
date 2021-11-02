<?php
/**
 * Block Pattern for Footer Section
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"backgroundColor":"primary","textColor":"background","layout":{"inherit":true}} -->
<div class="wp-block-group has-background-color has-primary-background-color has-text-color has-background"><!-- wp:site-logo {"align":"center"} /-->

<!-- wp:group -->
<div class="wp-block-group"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#f8f8f8","openInNewTab":true,"size":"has-normal-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"mail"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0%"}},"backgroundColor":"secondary","textColor":"primary"} -->
<div class="wp-block-columns is-not-stacked-on-mobile has-primary-color has-secondary-background-color has-text-color has-background"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-left has-link-color has-small-font-size">©2021 Webb Well | <a href="#">Terms of Service</a> | <a href="http://privacy" data-type="URL" data-id="privacy">Privacy Policy</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"align":"right","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"small"} -->
<p class="has-text-align-right has-link-color has-small-font-size"><a href="https://mayuki.io/wires">Wires Theme</a>, Proudly Powered by <a href="https://mayuki.io">Mayuki.io</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></footer>
<!-- /wp:group -->
';

return array(
    'title'     => __( 'Footer with center logo and social media icons', 'wires' ),
    'categories'    => array( 'wires-footers' ),
    'content'       => $content
);