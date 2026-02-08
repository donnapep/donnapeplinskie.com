# CLAUDE.md

## Goal

This is a personal portfolio and blog for a full-stack web developer, aimed at potential employers. It showcases work, skills, and experience, with a blog to demonstrate technical knowledge. The design should feel warm and inviting while clearly highlighting technical ability.

## Tone & Content

- **Voice**: Technical but approachable — assumes reader knowledge but explains clearly, not overly formal.
- **Blog content**: Primarily short TIL (Today I Learned) posts and quick tips about web development.

## Rules

- **No new dependencies** — don't install packages, libraries, or frameworks without asking first. This theme has no build step and should stay that way.
- **No inline styles** — don't add inline `style` attributes in block markup or patterns. Use theme.json or style.css.
- **No new CSS custom properties** — check existing ones in style.css before creating new ones.
- **Keep functions.php minimal** — don't add logic there that could live elsewhere (e.g., in a pattern or template).

## Overview

This is **donnapeplinskie** — a WordPress block theme (FSE/Full Site Editing) for a personal portfolio site. It runs on Laravel Valet locally at `donnapeplinskie.test`. There is no build step, bundler, or package manager — all assets are plain CSS and vanilla JS.

## Architecture

This is a **WordPress block theme** (theme.json v2, requires WP 6.0+). All layout is composed from block markup — there is no classic PHP template hierarchy (no `single.php`, `archive.php`, etc.).

### Key files

- **`theme.json`** — Central configuration: color palette, typography (Roboto + Lora), spacing scale, layout widths (1170px content / 1400px wide), and block-level style overrides. This is the source of truth for design tokens.
- **`style.css`** — All custom CSS beyond what theme.json handles: Material Design shadows, scroll animations, section-specific styles, and a warm shadow system via CSS custom properties (`--shadow-sm` through `--shadow-xl`).
- **`functions.php`** — Minimal: enqueues `style.css` and `animations.js`, registers editor styles, and registers a custom block pattern category (`donnapeplinskie`).
- **`assets/js/animations.js`** — IntersectionObserver-based scroll animations. Adds `is-visible` class to elements with `.animate-on-scroll` or `.stagger-children`. Respects `prefers-reduced-motion`.

### Templates & Parts

Standard block theme structure — `templates/` for full pages, `parts/` for reusable pieces (header, footer). All templates wrap content with the header and footer parts. `front-page.html` assembles 7 patterns in order: hero, about, skills, experience, projects, blog, contact.

### Patterns (`patterns/`)

All patterns are registered under the `donnapeplinskie` category. Each is a full-width section of the front page:

| Pattern | Background | CSS Class | Notes |
|---------|-----------|-----------|-------|
| `hero.php` | cream | `.hero-section` | Staggered CSS entrance animations |
| `about.php` | cyan | `.about-section` | Uses PHP for dynamic image path (`$profile_image`) |
| `skills.php` | dark-gray | `.skills-section` | 3-column layout with vertical dividers |
| `experience.php` | light-gray | `.experience-section` | Timeline layout using flex |
| `projects.php` | white | `.projects-section` | Uses PHP for dynamic image paths |
| `blog.php` | light-gray | `.blog-section` | Query loop (3 latest posts, grid) |
| `contact.php` | cyan (gradient) | `.contact-section` | Two-column: info + message placeholder |

### Fonts

- **Roboto** (300/400/500/700) — body text, loaded from Google Fonts CDN via theme.json `fontFace`
- **Lora** (400/500/600) — headings, loaded locally from `assets/fonts/` via theme.json `fontFace`
- **Material-Design-Icons** — icon font loaded via `@font-face` in style.css, used for download button icon

## Design System

### Color palette (defined in theme.json)

| Name | Slug | Hex | Usage |
|------|------|-----|-------|
| White | `white` | `#FFFFFF` | Page background, card backgrounds |
| Cream | `cream` | `#FFFBF7` | Hero section background |
| Light Gray | `light-gray` | `#F8F6F4` | Experience/blog section backgrounds |
| Dark Gray | `dark-gray` | `#2D2A26` | Skills section background, heading text |
| Gray | `gray` | `#727272` | Body text, metadata |
| Cyan | `cyan` | `#8BB7AD` | Primary accent, about/contact backgrounds, buttons |
| Orange | `orange` | `#FE6E41` | Links, hover states |

### CSS conventions

- Section-specific styles use BEM-like class names tied to the section: `.hero-section`, `.about-section`, `.skills-section`, etc.
- Cards use the `.post-card` class with warm shadow system (`--shadow-sm` through `--shadow-xl`).
- Scroll animations: add `.animate-on-scroll` for fade-in-up, `.stagger-children` for staggered child animations. The JS adds `.is-visible` on intersection.
- All animations and transitions respect `prefers-reduced-motion: reduce`.
- Editor styles are loaded so patterns look correct in the Site Editor.

## Working with this theme

- **Previewing changes**: Visit `donnapeplinskie.test` in a browser (Valet). Changes to CSS, JS, and pattern PHP files are reflected on refresh. Template/part HTML changes may require clearing the Site Editor cache.
- **Editing patterns**: Patterns contain block markup with PHP for dynamic paths (e.g., `get_template_directory_uri()`). Edit the `.php` files directly — they are not synced from the Site Editor.
- **Adding new patterns**: Create a PHP file in `patterns/` with the standard header comment block (`Title`, `Slug`, `Categories`, `Description`). Use `donnapeplinskie` as the category.
- **Style changes**: Prefer using theme.json for design token changes (colors, font sizes, spacing). Use style.css for layout, animations, and anything theme.json can't express.
- **theme.json styles vs style.css**: theme.json handles element-level defaults (headings, links, buttons, navigation). style.css handles section-specific overrides, animations, shadow system, and complex selectors.
