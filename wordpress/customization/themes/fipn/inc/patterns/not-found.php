<?php
/**
 * Not found block pattern
 */
return [
	'title' => __('Not found message', 'fipn'),
	'categories' => ['featured'],
	'content' =>
		'
<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"center"},"className":"not-found"} -->
<div class="wp-block-group alignwide not-found">
  <!-- wp:paragraph {"className":"not-found__code"} -->
      <p class="not-found__code"> <a href="' .
		get_site_url() .
		'">404 </a></p>
  <!-- /wp:paragraph -->
  <!-- wp:heading {"fontSize":"headline1","className":"not-found__title"} -->
      <h1 class="has-headline-1-font-size not-found__title">' .
		__('Page not found', 'fipn') .
		'</h1>
  <!-- /wp:heading -->
</div>
<!-- /wp:group -->
',
];
