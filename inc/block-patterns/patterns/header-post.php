<?php
/**
 * Block Pattern for Header for Posts.
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:group {"align":"full"} -->
<div class="wp-block-group alignfull"><!-- wp:group {"backgroundColor":"primary"} -->
  <div class="wp-block-group has-primary-background-color has-background"><!-- wp:columns {"verticalAlignment":"center","isStackedOnMobile":false,"style":{"spacing":{"blockGap":"0%"}}} -->
    <div class="wp-block-columns are-vertically-aligned-center is-not-stacked-on-mobile"><!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group"><!-- wp:site-logo /--></div>
        <!-- /wp:group --></div>
      <!-- /wp:column -->

      <!-- wp:column {"verticalAlignment":"center"} -->
      <div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"contentJustification":"right","style":{"spacing":{"blockGap":"0.25em"}}} -->
        <div class="wp-block-buttons is-content-justification-right"><!-- wp:button {"fontSize":"normal"} -->
          <div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link" href="http://posts">Blog</a></div>
          <!-- /wp:button -->

          <!-- wp:button {"backgroundColor":"secondary","textColor":"primary","fontSize":"normal"} -->
          <div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-primary-color has-secondary-background-color has-text-color has-background">Contact</a></div>
          <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
      <!-- /wp:column --></div>
    <!-- /wp:columns --></div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"full","backgroundColor":"primary","textColor":"secondary"} -->
  <div class="wp-block-group alignfull has-secondary-color has-primary-background-color has-text-color has-background"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex"}} -->
      <div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"fontSize":"normal"} /--></div>
      <!-- /wp:group -->

      <!-- wp:group {"style":{"spacing":{"padding":{"top":"0%","right":"0%","bottom":"0%","left":"0%"}}},"layout":{"type":"flex"}} -->
      <div class="wp-block-group" style="padding-top:0%;padding-right:0%;padding-bottom:0%;padding-left:0%"><!-- wp:post-title {"level":1,"style":{"typography":{"textTransform":"uppercase"}}} /--></div>
      <!-- /wp:group -->

      <!-- wp:group {"layout":{"type":"flex"}} -->
      <div class="wp-block-group"><!-- wp:post-author {"showAvatar":false,"fontSize":"normal"} /-->

        <!-- wp:post-date {"fontSize":"normal"} /--></div>
      <!-- /wp:group --></div>
    <!-- /wp:group --></div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"full","gradient":"horizontal-divider-primary-to-background","layout":{"inherit":true}} -->
  <div class="wp-block-group alignfull has-horizontal-divider-primary-to-background-gradient-background has-background"><!-- wp:post-featured-image {"align":"wide"} /--></div>
  <!-- /wp:group --></div>
<!-- /wp:group -->
';

return array(
    'title'     => __( 'Header for blog posts', 'wires' ),
    'categories'    => array( 'wires-headers' ),
    'content'       => $content
);