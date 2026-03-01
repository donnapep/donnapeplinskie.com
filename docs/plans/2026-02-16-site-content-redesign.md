# Site Content Redesign Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers:executing-plans to implement this plan task-by-task.

**Goal:** Rewrite site copy and restructure About/Blog sections to reposition around three pillars: engineering, product thinking, and AI.

**Architecture:** All changes are to pattern PHP files and style.css. No template, theme.json, or functions.php changes. No new dependencies.

**Tech Stack:** WordPress block markup (HTML comments), CSS, PHP (for dynamic image paths only)

---

### Task 1: Update Hero Tagline

**Files:**
- Modify: `patterns/hero.php:25-27`

**Step 1: Replace the tagline paragraph**

In `patterns/hero.php`, replace the current tagline:

```html
<!-- wp:paragraph {"align":"center","className":"hero-tagline","style":{"typography":{"fontSize":"clamp(18px, 2.5vw, 24px)","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-text-align-center hero-tagline has-gray-color has-text-color" style="font-size:clamp(18px, 2.5vw, 24px);line-height:1.6">Special Projects Engineer at <strong>Automattic</strong><br>Showcasing the best of WordPress, one project at a time</p>
<!-- /wp:paragraph -->
```

With:

```html
<!-- wp:paragraph {"align":"center","className":"hero-tagline","style":{"typography":{"fontSize":"clamp(18px, 2.5vw, 24px)","lineHeight":"1.6"}},"textColor":"gray"} -->
<p class="has-text-align-center hero-tagline has-gray-color has-text-color" style="font-size:clamp(18px, 2.5vw, 24px);line-height:1.6">Engineer + Product Thinker. Proudly powered by AI.</p>
<!-- /wp:paragraph -->
```

**Step 2: Verify in browser**

Visit `donnapeplinskie.test` and confirm the hero shows the new tagline.

**Step 3: Commit**

```bash
git add patterns/hero.php
git commit -m "Update hero tagline to reflect engineering + product + AI positioning"
```

---

### Task 2: Rewrite About Section Bio and Remove Personal Info Card

**Files:**
- Modify: `patterns/about.php`

**Step 1: Replace the about section content**

Replace the entire content of `patterns/about.php` (after the PHP header and `$profile_image` line) with a two-column layout: bio on the left, photo + resume button on the right. Remove the third column (Personal Information card with social links).

The new markup should be:

```php
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
			<p class="has-dark-gray-color has-text-color">Before that, I led an engineering team working on <a href="https://senseilms.com">Sensei LMS</a>, a learning management system plugin for WordPress, where I learned that building the right thing matters more than building more things. I talk to users and study the data to figure out what that right thing is, and then I use AI to build it.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}}} -->
			<div class="wp-block-buttons" style="margin-top:30px">
				<!-- wp:button {"backgroundColor":"white","textColor":"cyan-dark","className":"has-download-icon","style":{"border":{"radius":"2px"}}} -->
				<div class="wp-block-button has-download-icon"><a class="wp-block-button__link has-cyan-dark-color has-white-background-color has-text-color has-background wp-element-button" href="http://donnapeplinskie.com/wp-content/uploads/2016/06/resume.pdf" style="border-radius:2px">Download Resume</a></div>
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
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
```

**Step 2: Verify in browser**

Visit `donnapeplinskie.test` and confirm:
- Bio shows the new two-paragraph text
- Profile photo still displays
- Download Resume button works
- Personal info card is gone
- Two-column layout looks balanced

**Step 3: Commit**

```bash
git add patterns/about.php
git commit -m "Rewrite about bio and remove personal info card"
```

---

### Task 3: Update Skills / How I Work Section

**Files:**
- Modify: `patterns/skills.php:15-17` (subheading)
- Modify: `patterns/skills.php:23-53` (three columns)

**Step 1: Update the subheading**

Replace:

```html
<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:60px">9+ years building products and leading teams at Automattic</p>
```

With:

```html
<p class="has-text-align-center has-white-color has-text-color" style="margin-bottom:60px">How I approach building products</p>
```

**Step 2: Update the three column headings and descriptions**

Replace column 1 heading and paragraph:
- Heading: "Modern WordPress" → "Engineering"
- Paragraph: "Building block themes, custom plugins, and Gutenberg blocks. Deep experience in full-site editing and the modern WordPress stack." → "WordPress block themes, modern full-stack development, and sites that are simple by design."

Replace column 2 heading and paragraph:
- Heading: "Full-Stack Development" → "Product Thinking"
- Paragraph: "JavaScript, React, and PHP across frontend and backend. Building custom blocks, plugins, and editor experiences." → "User interviews, product metrics, and figuring out what to build before writing a line of code."

Replace column 3 heading and paragraph:
- Heading: "Product & Team Leadership" → "AI-Augmented Workflow"
- Paragraph: "Leading engineering teams, shaping product direction, and helping decide what to build next." → "Using AI to move faster from idea to production while maintaining quality and craft."

**Step 3: Verify in browser**

Visit `donnapeplinskie.test` and confirm:
- New subheading displays
- Three columns show new headings and descriptions
- Vertical dividers between columns still render
- Text is readable (white headings, gray body) on dark background

**Step 4: Commit**

```bash
git add patterns/skills.php
git commit -m "Reframe How I Work section around engineering, product thinking, and AI"
```

---

### Task 4: Convert Blog Section from Card Grid to List Layout

**Files:**
- Modify: `patterns/blog.php:19-39` (query template)
- Modify: `style.css` (add blog list styles, existing blog card styles become unused for this section)

**Step 1: Replace the query template markup**

In `patterns/blog.php`, replace the query block and its post-template (lines 19-39) with a list layout:

```html
<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"className":"animate-on-scroll"} -->
<div class="wp-block-query animate-on-scroll">
	<!-- wp:post-template {"className":"blog-list","layout":{"type":"default"}} -->
		<!-- wp:group {"className":"blog-list-item","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
		<div class="wp-block-group blog-list-item" style="padding-top:20px;padding-bottom:20px">
			<!-- wp:post-date {"textColor":"gray","fontSize":"small","style":{"layout":{"selfStretch":"fixed","flexSize":"120px"}}} /-->

			<!-- wp:group {"style":{"layout":{"selfStretch":"fill","flexSize":""}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"8px"}}},"fontSize":"medium"} /-->

				<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"0"}}}} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->
```

**Step 2: Add blog list CSS**

In `style.css`, add the following after the Blog Section Refinements block (after line 813):

```css
/* ============================================
   Blog List Layout
   ============================================ */
.blog-list-item {
	border-bottom: 1px solid rgba(0, 0, 0, 0.08);
}

.blog-list > li:last-child .blog-list-item {
	border-bottom: none;
}

.blog-list-item .wp-block-post-date {
	flex-shrink: 0;
	padding-top: 4px;
}

.blog-list-item .wp-block-post-excerpt {
	margin-top: 0;
}

.blog-list-item .wp-block-post-excerpt__excerpt {
	margin-top: 0;
	margin-bottom: 0;
}

.blog-list-item .wp-block-post-excerpt__more-link {
	display: none;
}
```

**Step 3: Verify in browser**

Visit `donnapeplinskie.test` and confirm:
- Blog section shows posts as a list (date left, title + excerpt right)
- No cards, no featured images
- Bottom borders separate items
- Layout is clean and readable
- "View All Posts" button still appears below the list
- Scroll animation still works

**Step 4: Commit**

```bash
git add patterns/blog.php style.css
git commit -m "Convert blog section from card grid to simple list layout"
```

---

### Task 5: Add Personal Info to Contact Section

**Files:**
- Modify: `patterns/contact.php`

**Step 1: Add personal details to the contact information card**

In the left column of `patterns/contact.php`, add name, interests, and social links (relocated from About section) to the existing contact information card. The card already has email and location — add name and interests, and keep the existing social links.

Replace the left column content (inside the post-card group) with:

```html
<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}}},"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size" style="font-weight:500;margin-bottom:20px">Contact Information</h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><strong>Name:</strong> Donna Peplinskie</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Email:</strong> donnapep@gmail.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Location:</strong> Mississauga, Ontario, Canada</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Interests:</strong> Reading, cross stitch, knitting</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","iconBackgroundColor":"cyan-dark","iconBackgroundColorValue":"#4C7A70","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color" style="margin-top:20px"><!-- wp:social-link {"url":"https://github.com/donnapep","service":"github"} /--><!-- wp:social-link {"url":"https://linkedin.com/in/donnapeplinskie","service":"linkedin"} /--><!-- wp:social-link {"url":"https://www.instagram.com/donnapep","service":"instagram"} /--><!-- wp:social-link {"url":"https://x.com/donnapep","service":"x"} /--><!-- wp:social-link {"url":"https://www.goodreads.com/donnapep","service":"goodreads"} /--></ul>
<!-- /wp:social-links -->
```

**Step 2: Verify in browser**

Visit `donnapeplinskie.test` and confirm:
- Contact card now shows name, email, location, and interests
- Social links still display with cyan-dark backgrounds
- Right column (Send a Message placeholder) is unchanged
- No duplicate personal info on the page (check About section is clean)

**Step 3: Commit**

```bash
git add patterns/contact.php
git commit -m "Add personal info to contact section (relocated from about)"
```

---

### Task 6: Clean Up Unused CSS (Optional)

**Files:**
- Modify: `style.css`

**Step 1: Review blog card CSS**

The blog section no longer uses cards. The following CSS blocks in style.css were specific to the blog card grid layout. Review whether they are still needed (they may be used by the `/blog/` archive page template). If the archive page uses a different template, these can be removed. If unsure, leave them in — unused CSS is low-cost.

Blocks to review:
- `.blog-section .wp-block-post-template` (line 703)
- `.blog-section .post-card` (line 711)
- `.blog-section .post-card .wp-block-post-featured-image` (line 719)
- Blog card placeholder styles (line 816)

**Step 2: Review `.personal-info` CSS**

The `.personal-info` class (lines 287-295) was used in the About section's personal info card. Since that's been removed, this CSS is no longer needed. Remove it.

**Step 3: Review `.about-section` social icon CSS**

The social icons in the About section (lines 574-583) have been removed. This CSS is no longer needed. Remove it.

**Step 4: Verify in browser**

Visit `donnapeplinskie.test` and confirm nothing looks broken after CSS removal.

**Step 5: Commit**

```bash
git add style.css
git commit -m "Remove CSS for personal info card and about section social icons"
```

---

### Task 7: Final Visual Review

**Files:** None (review only)

**Step 1: Full page scroll-through**

Visit `donnapeplinskie.test` and scroll through the entire page, checking:
- Hero: new tagline displays correctly
- About: new bio reads well, two-column layout is balanced, no personal info card
- How I Work: new headings and descriptions, dividers still render
- Experience: unchanged, still looks correct
- Featured Work: unchanged, still looks correct
- Blog: list layout, dates align, titles link correctly
- Contact: personal info present, social links work

**Step 2: Mobile check**

Resize browser to ~375px width and verify all sections still look good on mobile. Pay special attention to:
- About section two-column layout stacking properly
- Blog list items stacking (date above title on narrow screens)

**Step 3: Accessibility check**

Tab through the page with keyboard and verify:
- All links are reachable
- Focus states are visible
- Skip link still works
