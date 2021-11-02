<?php
/**
 * Block Pattern for double fixed image background
 * with text overlay.
 *
 * @since 0.0.6
 */

$content = '
<!-- wp:cover {"url":"http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg","id":25,"hasParallax":true,"dimRatio":50,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg)"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"100%","backgroundColor":"primary"} -->
<div class="wp-block-column is-vertically-aligned-center has-primary-background-color has-background" style="flex-basis:100%"><!-- wp:heading {"textAlign":"left","level":3} -->
<h3 class="has-text-align-left" id="meet-melanie-webb">MEET MELANIE WEBB</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hi! I’m Melanie, the Founder of Webb Well. Welcome to the Webb Well Way of Life!&nbsp;</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>My boutique tour operator business Sol Fitness Adventures was a lot of fun—and a big learning experience. I took what I learned working with clients in the gym and on my outdoor fitness retreats and created my course <em>Mother Nature’s Gym</em>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- wp:spacer {"height":50} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:cover {"url":"http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg","id":25,"hasParallax":true,"dimRatio":50,"isDark":false,"align":"full"} -->
<div class="wp-block-cover alignfull is-light has-parallax" style="background-image:url(http://localhost:8888/wp-content/uploads/2021/10/mononoke.jpeg)"><span aria-hidden="true" class="wp-block-cover__gradient-background has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"100%","backgroundColor":"primary","textColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-center has-background-color has-primary-background-color has-text-color has-background" style="flex-basis:100%"><!-- wp:paragraph -->
<p>I still moonlight as a guide in Southern Utah’s National Parks; but Sol Fitness Adventures is where I’ve been—and Webb Well is where I’m going. Everything is coming under one roof now—my Performance Coaching work with private clients, the <em>Mother Nature’s Gym</em> coursework, and my latest creation Webb Well <em>The App</em>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>I’ve invested a lifetime into mastering my craft, but it’s real life experience that has taught me most of what I know. Failures and successes, injuries and healing, fun trips and mis-adventures, you name it—I have been there, done that too. Most people I meet simply want to know that they can trust me to care enough to guide them through the challenging journey of transformation. </p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Nevertheless, you’re invited to discover the juicy highlights of my travels and studies, career and education, below.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
';

return array(
    'title'     => __( 'Double Fixed Background Image Cover Sections', 'wires' ),
    'categories'    => array( 'wires-content-sections' ),
    'content'       => $content
);