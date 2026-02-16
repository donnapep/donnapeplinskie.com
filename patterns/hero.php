<?php
/**
 * Title: Hero Section
 * Slug: donnapeplinskie/hero
 * Categories: donnapeplinskie
 * Description: Minimal hero section with bold typography
 */
?>
<!-- wp:group {"align":"full","className":"hero-section","style":{"spacing":{"padding":{"top":"clamp(120px, 20vh, 200px)","bottom":"clamp(80px, 15vh, 160px)"}}},"backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section has-cream-background-color has-background" style="padding-top:clamp(120px, 20vh, 200px);padding-bottom:clamp(80px, 15vh, 160px)">
	<!-- wp:group {"className":"hero-content","layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group hero-content">
		<!-- wp:paragraph {"align":"center","className":"hero-greeting","style":{"typography":{"fontSize":"18px","fontWeight":"500","letterSpacing":"0.1em"}},"textColor":"cyan-dark"} -->
		<p class="has-text-align-center hero-greeting has-cyan-dark-color has-text-color" style="font-size:18px;font-weight:500;letter-spacing:0.1em">HELLO, I'M</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"hero-name","style":{"typography":{"fontSize":"clamp(48px, 10vw, 96px)","fontWeight":"400","lineHeight":"1.1","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"20px","bottom":"30px"}}},"textColor":"dark-gray"} -->
		<h1 class="wp-block-heading has-text-align-center hero-name has-dark-gray-color has-text-color" style="font-size:clamp(48px, 10vw, 96px);font-weight:400;line-height:1.1;letter-spacing:-0.03em;margin-top:20px;margin-bottom:30px">Donna Peplinskie</h1>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide hero-divider","style":{"spacing":{"margin":{"top":"0","bottom":"30px"}}},"backgroundColor":"cyan-light"} -->
		<hr class="wp-block-separator has-text-color has-cyan-light-color has-alpha-channel-opacity has-cyan-light-background-color has-background is-style-wide hero-divider" style="margin-top:0;margin-bottom:30px"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"align":"center","className":"hero-tagline","style":{"typography":{"fontSize":"clamp(18px, 2.5vw, 24px)","lineHeight":"1.6"}},"textColor":"gray"} -->
		<p class="has-text-align-center hero-tagline has-gray-color has-text-color" style="font-size:clamp(18px, 2.5vw, 24px);line-height:1.6">Engineer + Product Thinker</p>
		<!-- /wp:paragraph -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
