# Blog Pages Implementation Plan

> **For Claude:** REQUIRED SUB-SKILL: Use superpowers-extended-cc:executing-plans to implement this plan task-by-task.

**Goal:** Add cyan banner headers to the blog archive and single post pages, and update the archive to a 3-column card grid.

**Architecture:** Block theme templates (`templates/index.html`, `templates/single.html`) provide the markup using WordPress block JSON. Section-specific styles go in `style.css` using CSS custom properties from `theme.json`. No build step.

**Tech Stack:** WordPress block theme (theme.json v2), HTML block markup, CSS

**Design doc:** `docs/plans/2026-03-01-blog-pages-design.md`

---

### Task 1: Rewrite the blog archive template

**Files:**
- Modify: `templates/index.html` (full rewrite)

**Step 1: Replace `templates/index.html` with the new structure**

The template has three sections: cyan banner header, light-gray content area with card grid, and footer.

Key changes from current:
- Added full-width cyan banner with "Blog" heading and tagline
- Wrapped query in full-width light-gray background group
- Changed post template to 3-column grid layout (`"layout":{"type":"grid","columnCount":3}`)
- Changed perPage from 10 to 9 (divisible by 3 columns)
- Restructured cards: featured image flush to card edges (no padding), text content in padded group below
- Added `blog-archive-header` className to banner, `blog-archive` className to content area
- Used `var:preset|spacing|*` for padding where theme.json presets exist (120, 60, 40, 20)

```html
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"className":"blog-archive-header","align":"full","backgroundColor":"cyan","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"var:preset|spacing|120"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull blog-archive-header has-cyan-background-color has-background" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:var(--wp--preset--spacing--120)">
	<!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","style":{"typography":{"fontWeight":"300","textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"xx-large"} -->
	<h1 class="wp-block-heading has-text-align-center has-white-color has-text-color has-xx-large-font-size" style="font-weight:300;letter-spacing:2px;text-transform:uppercase">Blog</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","textColor":"white","fontSize":"medium","style":{"typography":{"fontWeight":"300"}}} -->
	<p class="has-text-align-center has-white-color has-text-color has-medium-font-size" style="font-weight:300">Thoughts on engineering, product thinking, and building with AI.</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"blog-archive","tagName":"main","align":"full","backgroundColor":"light-gray","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull blog-archive has-light-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:query {"queryId":1,"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}},"border":{"radius":"2px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
			<div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:2px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
				<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"30px","bottom":"30px","left":"30px"}}}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:30px;padding-bottom:30px;padding-left:30px">
					<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontWeight":"300"}},"fontSize":"x-large"} /-->

					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|20"}}}} -->
					<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--10);margin-bottom:var(--wp--preset--spacing--20)">
						<!-- wp:post-date {"textColor":"gray","fontSize":"small"} /-->
						<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
						<p class="has-gray-color has-text-color has-small-font-size">·</p>
						<!-- /wp:paragraph -->
						<!-- wp:post-terms {"term":"category","textColor":"cyan-dark","fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-excerpt {"moreText":"Read More","excerptLength":40} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">No posts found.</p>
			<!-- /wp:paragraph -->
		<!-- /wp:query-no-results -->
	</div>
	<!-- /wp:query -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
```

**Step 2: Commit**

```bash
git add templates/index.html
git commit -m "Rewrite blog archive template with cyan banner and 3-column grid"
```

---

### Task 2: Add archive CSS

**Files:**
- Modify: `style.css`

**Step 1: Add heading underline accent for archive banner**

Add these rules to the "Blog Section Enhancements" area (after the existing `.blog-section` heading underline selectors). The archive banner heading needs the same underline accent as other section headings, but in cyan-light (since it's on a cyan background).

Add `.blog-archive-header > .wp-block-heading` to the existing heading underline selector group at lines 305-312:

```css
.skills-section > .wp-block-heading,
.experience-section > .wp-block-heading,
.projects-section > .wp-block-heading,
.blog-section > .wp-block-heading,
.blog-archive-header > .wp-block-heading {
```

And add `.blog-archive-header > .wp-block-heading::after` to the ::after selector group at lines 314-326:

```css
.skills-section > .wp-block-heading::after,
.experience-section > .wp-block-heading::after,
.projects-section > .wp-block-heading::after,
.blog-section > .wp-block-heading::after,
.blog-archive-header > .wp-block-heading::after {
```

Then add a color override for the accent on cyan background (after the existing `.skills-section > .wp-block-heading::after` override at line 582-584):

```css
/* Heading underline accent on cyan backgrounds */
.blog-archive-header > .wp-block-heading::after {
	background: var(--wp--preset--color--cyan-light);
}
```

**Step 2: Extend blog card styles to archive**

Add `.blog-archive` alongside `.blog-section` in these existing selectors (lines 686-741):

- `.blog-section .wp-block-post-template` → `.blog-section .wp-block-post-template, .blog-archive .wp-block-post-template`
- `.blog-section .wp-block-post-template > li` → `.blog-section .wp-block-post-template > li, .blog-archive .wp-block-post-template > li`
- `.blog-section .post-card` (lines 694-699) → add `.blog-archive .post-card`
- `.blog-section .post-card .wp-block-post-featured-image` (lines 702-710) → add `.blog-archive .post-card .wp-block-post-featured-image`
- `.blog-section .post-card .wp-block-post-featured-image a` (lines 712-718) → add `.blog-archive .post-card .wp-block-post-featured-image a`
- `.blog-section .post-card .wp-block-post-featured-image img` (lines 720-730) → add `.blog-archive .post-card .wp-block-post-featured-image img`
- `.blog-section .post-card:hover .wp-block-post-featured-image img` (lines 732-734) → add `.blog-archive .post-card:hover .wp-block-post-featured-image img`
- `.blog-section .post-card > .wp-block-group` (lines 737-741) → add `.blog-archive .post-card > .wp-block-group`

And in the "Blog Section Refinements" area:

- `.blog-section .wp-block-post-title` (line 823-825) → add `.blog-archive .wp-block-post-title`
- `.blog-section .post-card:not(:has(...))::before` (lines 828-836) → add `.blog-archive .post-card:not(:has(...))::before`
- `.blog-section .post-card:not(:has(...)) .wp-block-post-featured-image` (lines 839-841) → add `.blog-archive .post-card:not(:has(...)) .wp-block-post-featured-image`

**Step 3: Commit**

```bash
git add style.css
git commit -m "Add archive CSS: heading accent and shared card styles"
```

---

### Task 3: Rewrite the single post template

**Files:**
- Modify: `templates/single.html` (full rewrite)

**Step 1: Replace `templates/single.html` with the new structure**

Key changes from current:
- Post title and metadata move OUT of the post card and INTO a new cyan banner
- Content area wrapped in full-width light-gray background group
- Post card now contains only: featured image, post content, tags
- Added `single-post-header` className to banner
- Comments card and post navigation unchanged, just re-wrapped in the light-gray group
- Used `var:preset|spacing|*` where presets exist

```html
<!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"className":"single-post-header","align":"full","backgroundColor":"cyan","style":{"spacing":{"padding":{"top":"var:preset|spacing|120","bottom":"80px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull single-post-header has-cyan-background-color has-background" style="padding-top:var(--wp--preset--spacing--120);padding-bottom:80px">
	<!-- wp:post-title {"textAlign":"center","textColor":"white","style":{"typography":{"fontWeight":"300","textTransform":"uppercase","letterSpacing":"2px"}},"fontSize":"huge"} /-->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"15px"}}}} -->
	<div class="wp-block-group" style="margin-top:15px">
		<!-- wp:post-date {"textColor":"white","fontSize":"small"} /-->
		<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
		<p class="has-white-color has-text-color has-small-font-size">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-terms {"term":"category","textColor":"white","fontSize":"small"} /-->
		<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
		<p class="has-white-color has-text-color has-small-font-size">·</p>
		<!-- /wp:paragraph -->
		<!-- wp:post-author {"showAvatar":false,"textColor":"white","fontSize":"small"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"full","backgroundColor":"light-gray","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull has-light-gray-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:2px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:post-featured-image {"style":{"spacing":{"margin":{"bottom":"30px"}}}} /-->

		<!-- wp:post-content {"layout":{"type":"constrained"}} /-->

		<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--20)">
			<!-- wp:paragraph {"textColor":"gray","fontSize":"small"} -->
			<p class="has-gray-color has-text-color has-small-font-size">Tags:</p>
			<!-- /wp:paragraph -->
			<!-- wp:post-terms {"term":"post_tag","textColor":"cyan","fontSize":"small"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:post-navigation-link {"type":"previous","label":"← Previous Post"} /-->
			<!-- wp:post-navigation-link {"label":"Next Post →"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"post-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"2px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-group post-card has-white-background-color has-background" style="border-radius:2px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:comments -->
		<div class="wp-block-comments">
			<!-- wp:heading {"fontSize":"x-large","style":{"typography":{"fontWeight":"300"}}} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:300">Comments</h2>
			<!-- /wp:heading -->
			<!-- wp:comments-title {"level":3} /-->
			<!-- wp:comment-template -->
				<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--20)">
					<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:avatar {"size":40} /-->
						<!-- wp:group -->
						<div class="wp-block-group">
							<!-- wp:comment-author-name /-->
							<!-- wp:comment-date {"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:comment-content /-->
					<!-- wp:comment-reply-link /-->
				</div>
				<!-- /wp:group -->
			<!-- /wp:comment-template -->
			<!-- wp:comments-pagination -->
				<!-- wp:comments-pagination-previous /-->
				<!-- wp:comments-pagination-numbers /-->
				<!-- wp:comments-pagination-next /-->
			<!-- /wp:comments-pagination -->
			<!-- wp:post-comments-form /-->
		</div>
		<!-- /wp:comments -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->
```

**Step 2: Commit**

```bash
git add templates/single.html
git commit -m "Rewrite single post template with cyan banner header"
```

---

### Task 4: Add single post CSS

**Files:**
- Modify: `style.css`

**Step 1: Add single post header styles**

Add after the blog archive header accent override (from Task 2). The single post header needs styling for the metadata row links (white text on cyan background) and to prevent the post title link color from inheriting the theme default.

```css
/* ============================================
   Single Post Header
   ============================================ */
/* Post title link in banner should be white */
.single-post-header .wp-block-post-title a {
	color: var(--wp--preset--color--white) !important;
	text-decoration: none !important;
}

/* Metadata links in banner should be white */
.single-post-header .wp-block-post-terms a {
	color: var(--wp--preset--color--white) !important;
	text-decoration: none;
}

.single-post-header .wp-block-post-author {
	color: var(--wp--preset--color--white);
}
```

**Step 2: Commit**

```bash
git add style.css
git commit -m "Add single post header CSS for white text on cyan banner"
```

---

### Task 5: Verify both pages in browser

**Step 1: Check archive page**

Visit `donnapeplinskie.test` blog archive (e.g., `donnapeplinskie.test/blog/` or click a blog link from nav). Verify:
- Cyan banner with "Blog" heading (white, uppercase, centered)
- Cyan-light underline accent below heading
- Tagline text below heading (white)
- Light-gray content area below
- 3-column card grid with post cards
- Featured images at 16:10 ratio, flush to card top edges
- Card hover: shadow lift + image zoom
- Cards without featured images show gradient placeholder
- Pagination centered below grid
- Footer renders below content

**Step 2: Check single post page**

Click into any blog post. Verify:
- Cyan banner with post title (white, uppercase, centered)
- Metadata row centered below title (date · category · author, all white)
- Light-gray content area below
- White post card with featured image, content, tags
- Post navigation (prev/next) below card
- Comments card below navigation
- Footer renders below content

**Step 3: Check responsive behavior**

Resize browser to mobile width. Verify:
- Cards collapse to single column on mobile
- Banner text remains readable and centered
- No horizontal overflow

**Step 4: Check accessibility**

- Tab through the archive page — all links/buttons should show focus outline
- Verify heading hierarchy (h1 "Blog" on archive, h1 for post title on single)
- Check color contrast of white text on cyan background (cyan is #8BB7AD — verify AA compliance)

Note: White (#FFFFFF) on cyan (#8BB7AD) has a contrast ratio of approximately 2.3:1, which does NOT meet WCAG AA (4.5:1 for normal text). If this fails, we need to adjust — options include using dark-gray text instead of white, or darkening the banner background to cyan-dark. Flag this during verification.

**Step 5: Fix contrast issues if needed**

If the white-on-cyan contrast fails WCAG AA, switch to one of:
- **Option A:** Use `dark-gray` text on `cyan` background (dark gray #2D2A26 on cyan #8BB7AD ≈ 3.5:1 — still fails for small text, passes for large text/headings)
- **Option B:** Use `cyan-dark` as the banner background instead of `cyan` (white #FFFFFF on cyan-dark #4C7A70 ≈ 4.6:1 — passes AA)
- **Option C:** Use `white` text with `cyan-dark` background — same as B

Recommendation: **Option B** — switch banner `backgroundColor` from `cyan` to `cyan-dark` in both templates. The darker green still reads as the same color family and passes WCAG AA.

**Step 6: Commit any contrast fixes**

```bash
git add templates/index.html templates/single.html style.css
git commit -m "Fix banner contrast to meet WCAG AA"
```
