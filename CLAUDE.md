## Goal

Personal portfolio and blog at https://donnapeplinskie.com/ for a full-stack software engineer, aimed at potential employers and recruiters. The design should feel warm and inviting while clearly highlighting technical, especially AI, ability.

## Tone

Technical but approachable — warm, not overly formal.
Copy should be clear to non-technical readers (recruiters, hiring managers) while still demonstrating technical depth.

## Rules

- **MUST target WCAG 2.1 AA** — semantic HTML, keyboard navigability, sufficient contrast.

## Architecture decisions

This is a WordPress block theme. Key decisions that deviate from what you might expect:

- **No build step.** This is intentional. Do not introduce one.
- **Prefer theme.json over style.css.** Use style.css only for what theme.json cannot express (section-specific layouts, animations, complex selectors).

## Commands

- **Preview:** Visit `donnapeplinskie.test` in a browser (runs on Laravel Valet).
- **Deploy:** Run `./deploy.sh`.

## Common pitfalls

- **Putting section styles in the wrong place.** Section-specific styles (`.hero-section`, `.about-section`, etc.) go in style.css. Element-level defaults (headings, links, buttons) go in theme.json.
