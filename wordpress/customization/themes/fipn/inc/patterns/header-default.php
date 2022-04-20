<?php
/**
 * Default header block pattern
 */
return [
	'title' => __('Default header', 'fipn'),
	'categories' => ['header'],
	'blockTypes' => ['core/template-part/header'],
	'content' => '<!-- wp:group {"align":"full","layout":{"inherit":true}} -->
					<div class="wp-block-group alignfull"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--l)","top":"var(--wp--custom--spacing--s)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
					<div class="wp-block-group alignwide" ><!-- wp:group {"layout":{"type":"flex"}} -->
					<div class="wp-block-group">
					<!-- wp:site-logo {"width":64} /-->
					<!-- wp:site-title /--></div>
					<!-- /wp:group -->
					<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} -->
					<!-- wp:page-list {"isNavigationChild":true,"showSubmenuIcon":true,"openSubmenusOnClick":false} /-->
					<!-- /wp:navigation --></div>
					<!-- /wp:group --></div>
					<!-- /wp:group -->',
];
