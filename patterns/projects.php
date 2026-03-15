<?php
/**
 * Title: Featured Projects
 * Slug: donnapeplinskie/projects
 * Categories: donnapeplinskie
 * Description: Featured projects section showcasing key work
 */
$automattic_com_image = esc_url( get_template_directory_uri() ) . '/assets/images/automattic.com.jpg';
$automattic_design_image = esc_url( get_template_directory_uri() ) . '/assets/images/automattic.design.jpg';
$sensei_image = esc_url( get_template_directory_uri() ) . '/assets/images/sensei-lms.com.jpg';
?>
<!-- wp:group {"align":"full","className":"projects-section","style":{"spacing":{"padding":{"top":"120px","bottom":"120px"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull projects-section has-white-background-color has-background" id="featured-work" style="padding-top:120px;padding-bottom:120px">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"300","textTransform":"uppercase"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"dark-gray","fontSize":"xx-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-dark-gray-color has-text-color has-xx-large-font-size" style="font-weight:300;text-transform:uppercase;margin-bottom:20px">Featured Work</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"gray","style":{"spacing":{"margin":{"bottom":"60px"}}}} -->
	<p class="has-text-align-center has-gray-color has-text-color" style="margin-bottom:60px">Recent work highlights</p>
	<!-- /wp:paragraph -->

	<!-- wp:columns {"className":"animate-on-scroll stagger-children","style":{"spacing":{"blockGap":{"left":"30px"}}}} -->
	<div class="wp-block-columns animate-on-scroll stagger-children">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"30px","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
			<div class="wp-block-group post-card has-light-gray-background-color has-background" style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:30px;padding-left:0">
				<!-- wp:image {"linkDestination":"custom","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px"}}}} -->
				<figure class="wp-block-image has-custom-border"><a href="https://automattic.com"><img src="<?php echo $automattic_com_image; ?>" alt="Automattic.com homepage" style="border-top-left-radius:2px;border-top-right-radius:2px"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"30px","bottom":"0","left":"30px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:20px;padding-right:30px;padding-bottom:0;padding-left:30px">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"dark-gray","fontSize":"large"} -->
					<h3 class="wp-block-heading has-dark-gray-color has-text-color has-large-font-size" style="font-weight:500;margin-bottom:10px">Automattic.com</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"cyan-dark","fontSize":"small","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
					<p class="has-cyan-dark-color has-text-color has-small-font-size" style="margin-bottom:5px">Lead Developer</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
					<p style="margin-bottom:15px">Migrated the company's flagship site from a legacy classic theme to a modern block theme. Converted 30+ templates while maintaining zero downtime. Built with an AI-augmented workflow using Cursor AI and Claude Code, including custom Claude skills for automated browser testing.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
					<p class="has-gray-color has-text-color has-small-font-size"><strong>Impact:</strong> Enabled marketing and recruiting teams to ship landing pages independently.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"30px","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
			<div class="wp-block-group post-card has-light-gray-background-color has-background" style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:30px;padding-left:0">
				<!-- wp:image {"linkDestination":"custom","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px"}}}} -->
				<figure class="wp-block-image has-custom-border"><a href="https://automattic.design"><img src="<?php echo $automattic_design_image; ?>" alt="Automattic.design homepage" style="border-top-left-radius:2px;border-top-right-radius:2px"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"30px","bottom":"0","left":"30px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:20px;padding-right:30px;padding-bottom:0;padding-left:30px">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"dark-gray","fontSize":"large"} -->
					<h3 class="wp-block-heading has-dark-gray-color has-text-color has-large-font-size" style="font-weight:500;margin-bottom:10px">Automattic.design</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"cyan-dark","fontSize":"small","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
					<p class="has-cyan-dark-color has-text-color has-small-font-size" style="margin-bottom:5px">Lead Developer</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
					<p style="margin-bottom:15px">Built a new block theme for the Design team, translating Figma designs into a fully functional site. Shipped on deadline for the OFFF design conference.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
					<p class="has-gray-color has-text-color has-small-font-size"><strong>Impact:</strong> Now the primary hub for design recruiting and community engagement.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"30px","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
			<div class="wp-block-group post-card has-light-gray-background-color has-background" style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:30px;padding-left:0">
				<!-- wp:image {"linkDestination":"custom","style":{"border":{"radius":{"topLeft":"2px","topRight":"2px"}}}} -->
				<figure class="wp-block-image has-custom-border"><a href="https://senseilms.com"><img src="<?php echo $sensei_image; ?>" alt="Sensei LMS homepage" style="border-top-left-radius:2px;border-top-right-radius:2px"/></a></figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","right":"30px","bottom":"0","left":"30px"}}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="padding-top:20px;padding-right:30px;padding-bottom:0;padding-left:30px">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"bottom":"10px"}}},"textColor":"dark-gray","fontSize":"large"} -->
					<h3 class="wp-block-heading has-dark-gray-color has-text-color has-large-font-size" style="font-weight:500;margin-bottom:10px">Sensei LMS</h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"cyan-dark","fontSize":"small","style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
					<p class="has-cyan-dark-color has-text-color has-small-font-size" style="margin-bottom:5px">Developer & Team Lead</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"15px"}}}} -->
					<p style="margin-bottom:15px">Drove development and product direction for Automattic's Learning Management System plugin. Grew from individual contributor to Engineering Team Lead.</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
					<p class="has-gray-color has-text-color has-small-font-size"><strong>Impact:</strong> Powers online courses on thousands of WordPress sites.</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
