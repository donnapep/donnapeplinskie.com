# Blog Pages Design

**Date:** 2026-03-01
**Scope:** Blog archive page (`templates/index.html`) and single post page (`templates/single.html`)

## Design Decisions

- **Cyan banner headers** on both pages — creates visual continuity with the homepage sections and matches the Material-X reference.
- **No sidebar** on single post — single-column reading is better for long-form portfolio blog content; sidebar widgets feel dated.
- **3-column card grid** on archive — matches the homepage projects section pattern.
- **Theme.json variables everywhere** — block attributes for colors/spacing/typography; CSS custom properties (`var(--wp--preset--color--*)`, `var(--wp--preset--spacing--*)`) in style.css; hardcoded values only for what blocks and theme.json can't express (pseudo-elements, transitions, aspect ratios).

## Blog Archive Page (`templates/index.html`)

### Structure

1. **Header** — existing template part
2. **Cyan banner** — full-width group block
   - `backgroundColor: cyan`, constrained inner layout
   - Padding: 120px top/bottom (matching other full-width homepage sections)
   - "Blog" heading: Lora, 300 weight, uppercase, white, 2px letter-spacing, centered
   - Tagline paragraph below: small/medium size, white with slight opacity or cream color
   - Heading gets the same `::after` underline accent, but white or cyan-light instead of cyan (since it's on a cyan background)
3. **Content area** — full-width group block
   - `backgroundColor: light-gray`, constrained inner layout
   - Padding: 60px top/bottom
   - **Query block**: 9 posts per page, 3-column grid layout, descending date order
   - **Each post rendered as a `.post-card`**:
     - White background, 2px border-radius, warm shadow (`var(--shadow-md)`)
     - Featured image: 16:10 aspect ratio, `object-fit: cover`, zoom on hover (1.05x) — or gradient placeholder if no image (existing CSS handles this)
     - Content area with 30px padding: post title (linked, Lora 300, x-large), date + category row (small, gray + cyan, dot separator), excerpt (40 words), "Read More" button
   - **Pagination**: centered, existing styled pagination (page numbers with shadows, current page in cyan-dark)
   - **No results fallback**: centered "No posts found" paragraph
4. **Footer** — existing template part

### Responsive

- 3 columns on desktop, single column on mobile (handled by Query block's column layout)
- Cards stack vertically on mobile
- Banner padding can reduce on smaller screens (the 120px is set inline on the block; could use clamp if needed)

### New CSS

- Override heading underline accent color when inside `.blog-archive-header` (white or cyan-light `::after` pseudo-element)
- Archive-specific card grid adjustments if the Query block's built-in columns need tweaking
- All values reference CSS custom properties — no hex codes in new CSS

## Single Post Page (`templates/single.html`)

### Structure

1. **Header** — existing template part
2. **Cyan banner** — full-width group block
   - `backgroundColor: cyan`, constrained inner layout
   - Padding: 120px top, 80px bottom (slightly less bottom since content follows directly)
   - **Post title**: Lora, 300 weight, huge size, white, centered
   - **Metadata row**: flex layout with dot separators — post date, post categories, post author — all white/cream, small font size
3. **Content area** — full-width group block
   - `backgroundColor: light-gray`, constrained inner layout
   - Padding: 60px top/bottom
   - **Post card** (`.post-card`, white background, warm shadow, 40px padding):
     - Featured image (full-width within card, natural aspect ratio — no constraint)
     - Post content block (constrained layout)
     - Tags row at bottom (gray "Tags:" label + cyan tag links)
   - **Post navigation** below the card: flex layout, space-between, prev/next links with shadow buttons
   - **Comments card** (separate `.post-card`, white background, 40px padding):
     - "Comments" heading
     - Comment template (avatar, author, date, content, reply link)
     - Comment pagination
     - Comment form
4. **Footer** — existing template part

### Key Change from Current

The post title and metadata move **out** of the `.post-card` and **into** the cyan banner. The card becomes purely about content. This matches the archive banner pattern and the Material-X reference.

### New CSS

- `.single-post-header` heading accent override (white/cyan-light `::after` on cyan background) — can share the same rule as the archive header
- Metadata row styling within the banner (white text for date/author/categories blocks)
- All values reference CSS custom properties

## Shared CSS Pattern

Both the archive and single post banners use the same visual pattern. A single CSS rule can handle the heading underline color override for any heading inside a cyan-background section:

```css
/* Heading underline accent on cyan backgrounds */
.blog-archive-header > .wp-block-heading::after,
.single-post-header > .wp-block-heading::after {
  background: var(--wp--preset--color--cyan-light);
}
```

## What's NOT Changing

- Homepage blog pattern (`patterns/blog.php`) — out of scope
- Header/footer template parts — unchanged
- Existing `.post-card` base styles — reused as-is
- Pagination styles — reused as-is
- Comment styles — reused as-is
- Warm shadow system — reused as-is
