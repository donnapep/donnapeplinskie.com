<?php
/**
 * Title: About Section
 * Slug: donnapeplinskie/about
 * Categories: donnapeplinskie
 * Description: About section with story, profile photo, and personal information
 */
$profile_image = esc_url( get_template_directory_uri() ) . '/assets/images/profile.jpeg';
?>
<!-- wp:group {"align":"full","anchor":"about","className":"about-section","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"cyan","layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull about-section has-cyan-background-color has-background" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:columns {"className":"animate-on-scroll stagger-children","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
	<div class="wp-block-columns animate-on-scroll stagger-children">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","fontSize":"24px"}},"textColor":"white"} -->
			<h2 class="wp-block-heading has-white-color has-text-color" style="font-weight:600;text-transform:uppercase;font-size:24px">About Me</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"white"} -->
			<p class="has-white-color has-text-color">I'm Donna, a Special Projects Engineer at <a href="https://automattic.com">Automattic</a>, where I build WordPress sites for Automattic and other interesting people, projects, and organizations. Previously, I led a team of engineers working on <a href="https://senseilms.com">Sensei LMS</a>, a Learning Management System plugin for WordPress.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}}} -->
			<div class="wp-block-buttons" style="margin-top:30px">
				<!-- wp:button {"backgroundColor":"white","textColor":"cyan","className":"has-download-icon","style":{"border":{"radius":"2px"}}} -->
				<div class="wp-block-button has-download-icon"><a class="wp-block-button__link has-cyan-color has-white-background-color has-text-color has-background wp-element-button" href="http://donnapeplinskie.com/wp-content/uploads/2016/06/resume.pdf" style="border-radius:2px">Download Resume</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"250px"} -->
		<div class="wp-block-column" style="flex-basis:250px">
			<!-- wp:image {"align":"center","className":"profile-image"} -->
			<figure class="wp-block-image aligncenter profile-image"><img src="<?php echo $profile_image; ?>" alt="Donna Peplinskie"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","fontSize":"24px"}},"textColor":"white"} -->
			<h2 class="wp-block-heading has-white-color has-text-color" style="font-weight:600;text-transform:uppercase;font-size:24px">Personal Information</h2>
			<!-- /wp:heading -->

			<!-- wp:group {"className":"personal-info","layout":{"type":"constrained"}} -->
			<div class="wp-block-group personal-info">
				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color"><strong>Name:</strong> Donna Peplinskie</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color"><strong>Email:</strong> donnapep@gmail.com</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color"><strong>Location:</strong> Mississauga, Ontario, Canada</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"textColor":"white"} -->
				<p class="has-white-color has-text-color"><strong>Interests:</strong> Reading, cross stitch, knitting</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","className":"is-style-logos-only","style":{"spacing":{"margin":{"top":"20px"}}}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only" style="margin-top:20px"><!-- wp:social-link {"url":"https://github.com/donnapep","service":"github"} /--><!-- wp:social-link {"url":"https://linkedin.com/in/donnapeplinskie","service":"linkedin"} /--><!-- wp:social-link {"url":"https://www.instagram.com/donnapep","service":"instagram"} /--><!-- wp:social-link {"url":"https://x.com/donnapep","service":"x"} /--><!-- wp:social-link {"url":"https://www.goodreads.com/donnapep","service":"goodreads"} /--></ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
