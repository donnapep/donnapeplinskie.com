<?php
/**
 * Title: Hero Section
 * Slug: donnapeplinskie/hero
 * Categories: donnapeplinskie
 * Description: Minimal hero section with bold typography
 */
?>
<!-- wp:group {"align":"full","className":"hero-section","style":{"spacing":{"padding":{"top":"clamp(120px, 20vh, 200px)","bottom":"clamp(120px, 20vh, 200px)"}}},"backgroundColor":"cream","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section has-cream-background-color has-background" style="padding-top:clamp(120px, 20vh, 200px);padding-bottom:clamp(120px, 20vh, 200px)">
	<!-- wp:group {"className":"hero-content","layout":{"type":"constrained","contentSize":"800px"}} -->
	<div class="wp-block-group hero-content">
		<!-- wp:paragraph {"align":"center","className":"hero-greeting","style":{"typography":{"fontSize":"18px","fontWeight":"500","letterSpacing":"0.1em"}},"textColor":"cyan"} -->
		<p class="has-text-align-center hero-greeting has-cyan-color has-text-color" style="font-size:18px;font-weight:500;letter-spacing:0.1em">HELLO, I'M</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":1,"className":"hero-name","style":{"typography":{"fontSize":"clamp(48px, 10vw, 96px)","fontWeight":"400","lineHeight":"1.1","letterSpacing":"-0.03em"},"spacing":{"margin":{"top":"20px","bottom":"30px"}}},"textColor":"dark-gray"} -->
		<h1 class="wp-block-heading has-text-align-center hero-name has-dark-gray-color has-text-color" style="font-size:clamp(48px, 10vw, 96px);font-weight:400;line-height:1.1;letter-spacing:-0.03em;margin-top:20px;margin-bottom:30px">Donna Peplinskie</h1>
		<!-- /wp:heading -->

		<!-- wp:separator {"className":"is-style-wide hero-divider","style":{"spacing":{"margin":{"top":"0","bottom":"30px"}}},"backgroundColor":"cyan-light"} -->
		<hr class="wp-block-separator has-text-color has-cyan-light-color has-alpha-channel-opacity has-cyan-light-background-color has-background is-style-wide hero-divider" style="margin-top:0;margin-bottom:30px"/>
		<!-- /wp:separator -->

		<!-- wp:paragraph {"align":"center","className":"hero-tagline","style":{"typography":{"fontSize":"clamp(18px, 2.5vw, 24px)","lineHeight":"1.6"}},"textColor":"gray"} -->
		<p class="has-text-align-center hero-tagline has-gray-color has-text-color" style="font-size:clamp(18px, 2.5vw, 24px);line-height:1.6">Special Projects Engineer at <strong>Automattic</strong><br>Showcasing the best of WordPress, one project at a time</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
		<div class="wp-block-buttons" style="margin-top:40px">
			<!-- wp:button {"backgroundColor":"cyan","style":{"border":{"radius":"2px"}}} -->
			<div class="wp-block-button"><a class="wp-block-button__link has-cyan-background-color has-background wp-element-button" href="#about" style="border-radius:2px">Learn More</a></div>
			<!-- /wp:button -->

			<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"2px"}}} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#contact" style="border-radius:2px">Get in Touch</a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
