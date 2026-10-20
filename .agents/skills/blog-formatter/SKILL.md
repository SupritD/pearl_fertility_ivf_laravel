---
name: blog-formatter
description: Formats raw blog text drafts into clean, HTMLPurifier-compatible HTML for the Summernote editor and writes directly to blog-summernote.html. Enforces Pearl Fertility & IVF color palettes, typography, spacing, and strict content fidelity.
---

# Pearl Fertility & IVF — Blog Formatting & Styling Guide

This skill governs how raw blog posts provided by the user are transformed into clean, beautifully styled HTML that is 100% compatible with Summernote and backend Laravel HTMLPurifier (`config/purifier.php`).

---

## 1. Core Operating Principles

1. **Strict Content Fidelity (CRITICAL):**
   - **NEVER** add text, disclaimers, external call-to-actions, quotes, or doctor names that were not provided in the user's draft.
   - **NEVER** delete, omit, or rephrase sentences from the user's input.
   - Only structure, tag, style, and link the exact content provided by the user.

2. **Output Target:**
   - Always write the generated HTML directly into `blog-summernote.html` in the workspace root using `write_to_file` (with `Overwrite: true`).
   - **NEVER** dump the full HTML code in the chat response. The user copies code directly from `blog-summernote.html`.
   - Provide a concise confirmation in chat once `blog-summernote.html` has been updated.

---

## 2. Brand Color Palette & Tokens

| Element | Color Hex | Description |
| :--- | :--- | :--- |
| **Primary Navy** | `#004b78` | Headings (`<h2>`, `<h3>`), section titles, prominent labels |
| **Accent Magenta/Pink** | `#e83e8c` | Links (`<a>`), highlighted anchor text |
| **Body Charcoal** | `#495057` | Main text (`<p>`, `<li>`), subtle descriptions |
| **Box Background** | `#f8f9fa` | Table of contents, callout boxes, cards |
| **Light Border** | `#e9ecef` | Box borders, subtle dividers |

---

## 3. HTML Element Specifications & Inline Styles

All inline styles must use properties allowed by `config/purifier.php`:
- **Allowed CSS:** `font, font-size, font-weight, font-style, font-family, text-decoration, padding, padding-left, padding-right, padding-top, padding-bottom, margin, margin-left, margin-right, margin-top, margin-bottom, color, background-color, text-align, width, height, line-height, border, border-collapse, border-spacing, border-color, border-style, border-width, float, clear, vertical-align`.
- **Forbidden in Inline Styles (stripped by Purifier):** `border-radius`, `box-shadow`, `display`, `background: linear-gradient(...)`, shorthand `background:` (use `background-color:` instead).

### Standard Tags & Inline Styles:

#### 1. Paragraphs (`<p>`)
```html
<!-- Standard paragraph -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 16px;">
    ...
</p>

<!-- Last paragraph before a major section heading -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 24px;">
    ...
</p>

<!-- Paragraph introducing a bullet list -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 12px;">
    ...
</p>
```

#### 2. Section Headings (`<h2>`)
```html
<h2 style="font-size: 1.55rem; font-weight: 700; color: #004b78; margin-top: 30px; margin-bottom: 14px;">
    Section Title
</h2>
```

#### 3. Subheadings (`<h3>`)
```html
<h3 style="font-size: 1.25rem; font-weight: 600; color: #004b78; margin-top: 20px; margin-bottom: 10px;">
    Subheading Title
</h3>
```

#### 4. FAQ Questions (`<h3>`)
```html
<h3 style="font-size: 1.15rem; font-weight: 600; color: #004b78; margin-top: 18px; margin-bottom: 8px;">
    Frequently Asked Question?
</h3>
```

#### 5. Unordered Lists (`<ul>` & `<li>`)
```html
<ul style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 24px; margin-bottom: 16px;">
    <li style="margin-bottom: 8px;">List item text</li>
    <li style="margin-bottom: 8px;">List item text</li>
</ul>
```

#### 6. Ordered Lists (`<ol>` & `<li>`)
```html
<ol style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 24px; margin-bottom: 16px;">
    <li style="margin-bottom: 10px;"><strong>Step Name</strong> – Step description text.</li>
    <li style="margin-bottom: 10px;"><strong>Step Name</strong> – Step description text.</li>
</ol>
```

#### 7. Links (`<a>`)
Convert any Markdown links (e.g. `[Anchor Text](https://pearlfertilityandivf.com/url)`) into styled anchor tags:
```html
<a href="https://pearlfertilityandivf.com/target-slug" style="color: #e83e8c; font-weight: 600; text-decoration: none;">Anchor Text</a>
```

#### 8. Table of Contents / Highlight Box (`<div>`)
```html
<div style="background-color: #f8f9fa; border: 1px solid #e9ecef; padding: 20px 24px; margin-bottom: 28px;">
    <h3 style="font-size: 1.25rem; font-weight: 700; color: #004b78; margin-top: 0; margin-bottom: 14px;">
        Table of Contents
    </h3>
    <ol style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 20px; margin-bottom: 0;">
        <li style="margin-bottom: 6px;">Heading Title 1</li>
        <li style="margin-bottom: 6px;">Heading Title 2</li>
    </ol>
</div>
```

---

## 4. Execution Workflow

When a new blog draft is received from the user:
1. **Analyze Draft:** Identify intro paragraphs, sections (`<h2>`), subsections (`<h3>`), lists (`<ul>`/`<ol>`), markdown links, and FAQ blocks.
2. **Apply Styles:** Wrap every piece of text in the exact semantic HTML tags and inline styles defined above.
3. **Save File:** Overwrite `c:\xampp\htdocs\pearl_fertility_ivf_laravel\blog-summernote.html` with the generated HTML.
4. **Respond:** Inform the user that the blog has been converted and is ready to copy from `blog-summernote.html`. Do not print the HTML in chat.
