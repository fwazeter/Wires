<?php

$content = '
<!-- wp:columns {"isStackedOnMobile":false,"align":"wide","className":"is-columns-reel"} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile is-columns-reel"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"http://webbwell.mayuki.io/wp-content/uploads/sites/12/2021/10/52C73EB6-B3AD-4E31-9102-220F07FD9BDE-scaled.webp","id":80,"dimRatio":50,"overlayColor":"primary","focalPoint":{"x":"0.74","y":"0.50"},"minHeight":600,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-primary-background-color wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-80" alt="" src="http://webbwell.mayuki.io/wp-content/uploads/sites/12/2021/10/52C73EB6-B3AD-4E31-9102-220F07FD9BDE-scaled.webp" style="object-position:74% 50%" data-object-fit="cover" data-object-position="74% 50%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"secondary","fontSize":"gigantic"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-gigantic-font-size"><strong>IMMERSE</strong></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"url":"http://webbwell.mayuki.io/wp-content/uploads/sites/12/2021/10/MW-guide-4.webp","id":125,"dimRatio":50,"overlayColor":"primary","focalPoint":{"x":"0.19","y":"0.68"},"minHeight":600,"isDark":false,"align":"full","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-cover alignfull is-light" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-primary-background-color wp-block-cover__gradient-background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-125" alt="" src="http://webbwell.mayuki.io/wp-content/uploads/sites/12/2021/10/MW-guide-4.webp" style="object-position:19% 68%" data-object-fit="cover" data-object-position="19% 68%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"secondary","fontSize":"gigantic"} -->
<p class="has-text-align-center has-secondary-color has-text-color has-gigantic-font-size"><strong>IN NATURE</strong></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:cover {"overlayColor":"primary","minHeight":600,"contentPosition":"center left","style":{"spacing":{"padding":{"top":"2rem","right":"2rem","bottom":"2rem","left":"2rem"}}}} -->
<div class="wp-block-cover has-custom-content-position is-position-center-left" style="padding-top:2rem;padding-right:2rem;padding-bottom:2rem;padding-left:2rem;min-height:600px"><span aria-hidden="true" class="has-primary-background-color has-background-dim-100 wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.2"}},"textColor":"secondary","fontSize":"gigantic"} -->
<p class="has-text-align-left has-secondary-color has-text-color has-gigantic-font-size" style="line-height:1.2"><strong>WebbWell Way of Life</strong></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
';

return array(
    'title'     => __( 'Triptych with mobile horizontal scroll', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);