<?php
/**
 * Title: Blog Section
 * Slug: donnapeplinskie/blog
 * Categories: donnapeplinskie
 * Description: Recent blog posts grid with 3 columns
 */
?>
<!-- wp:group {"align":"full","className":"blog-section","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull blog-section has-light-gray-background-color has-background" id="blog" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"300","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark-gray","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-dark-gray-color has-text-color has-xx-large-font-size" style="font-weight:300;text-transform:uppercase;margin-bottom:20px">Blog</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"gray","style":{"spacing":{"margin":{"bottom":"60px"}}}} -->
	<p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:60px">Latest thoughts and articles</p>
	<!-- /wp:paragraph -->

	<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animate-on-scroll"} -->
	<div class="wp-block-query animate-on-scroll">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"20px","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:20px;padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"30px","bottom":"0","left":"30px"}}}} -->
				<div class="wp-block-group" style="padding-top:20px;padding-right:30px;padding-bottom:0;padding-left:30px">
					<!-- wp:post-date {"textColor":"cyan","fontSize":"small"} /-->

					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"10px"}}},"fontSize":"large"} /-->

					<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"10px"}}}} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:40px">
		<!-- wp:button {"style":{"border":{"radius":"2px"}}} -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/blog/" style="border-radius:2px">View All Posts</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
