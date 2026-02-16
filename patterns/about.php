<?php
/**
 * Title: About Section
 * Slug: donnapeplinskie/about
 * Categories: donnapeplinskie
 * Description: About section with bio and profile photo
 */
$profile_image = esc_url( get_template_directory_uri() ) . '/assets/images/profile.jpeg';
?>
<!-- wp:group {"align":"full","anchor":"about","className":"about-section","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"cyan","layout":{"type":"constrained"}} -->
<div id="about" class="wp-block-group alignfull about-section has-cyan-background-color has-background" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:columns {"className":"animate-on-scroll stagger-children","style":{"spacing":{"blockGap":{"left":"60px"}}}} -->
	<div class="wp-block-columns animate-on-scroll stagger-children">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"style":{"typography":{"fontWeight":"600","textTransform":"uppercase","fontSize":"24px"}},"textColor":"dark-gray"} -->
			<h2 class="wp-block-heading has-dark-gray-color has-text-color" style="font-weight:600;text-transform:uppercase;font-size:24px">About Me</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"dark-gray"} -->
			<p class="has-dark-gray-color has-text-color">I'm Donna, a Special Projects Engineer at <a href="https://automattic.com">Automattic</a>. I build WordPress sites for Automattic and other interesting people, projects, and organizations.</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"dark-gray"} -->
			<p class="has-dark-gray-color has-text-color">Before that, I led an engineering team working on <a href="https://senseilms.com">Sensei LMS</a>, a learning management system plugin for WordPress, where I learned that building the right thing matters more than building more things. I talk to users and analyze the data to figure out what that right thing is, and then I use AI to build it.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"250px"} -->
		<div class="wp-block-column" style="flex-basis:250px">
			<!-- wp:image {"align":"center","className":"profile-image"} -->
			<figure class="wp-block-image aligncenter profile-image"><img src="<?php echo $profile_image; ?>" alt="Donna Peplinskie"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
