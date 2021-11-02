<?php
/**
 * Block Pattern for Header Section for Pages.
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"secondary"} -->
<div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background"><!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0em"}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons {"contentJustification":"left"} -->
<div class="wp-block-buttons is-content-justification-left"><!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">About</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:buttons {"contentJustification":"right"} -->
<div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"backgroundColor":"secondary","textColor":"primary"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">Contact</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:site-logo {"align":"center","width":250} /--></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"background","iconColorValue":"#f8f8f8","openInNewTab":true,"size":"has-normal-icon-size","className":"has-icon-color is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"mail"} /-->

<!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links -->

<!-- wp:post-title {"textAlign":"center","level":1} /--></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","gradient":"horizontal-divider-primary-to-background","layout":{"inherit":false}} -->
<div class="wp-block-group alignfull has-horizontal-divider-primary-to-background-gradient-background has-background"><!-- wp:buttons {"contentJustification":"center"} -->
<div class="wp-block-buttons is-content-justification-center"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">The App</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">The Book</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Programs</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
';

return array(
    'title'     => __( 'Header with center buttons instead of nav menu', 'wires' ),
    'categories'    => array( 'wires-headers' ),
    'content'       => $content
);

