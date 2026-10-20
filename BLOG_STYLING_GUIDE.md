# Pearl Fertility & IVF — Blog Styling Guide (.md)

This file defines the exact styling, color schemes, HTML tags, and rules used whenever you provide a blog draft. Every time you share a blog post, the agent checks this file and formats the content accordingly into `blog-summernote.html`.

---

## 🎨 Color Palette & Design Tokens

| Token | Hex Code | Visual Preview / Description | Usage |
| :--- | :--- | :--- | :--- |
| **Primary Navy** | `#004b78` | Deep Medical Navy Blue | `<h2>`, `<h3>`, key section titles |
| **Accent Pink** | `#e83e8c` | Pearl Fertility Pink / Magenta | Links (`<a>`), highlighted anchor text |
| **Body Charcoal** | `#495057` | Elegant Slate Dark Gray | `<p>`, `<li>`, general reading text |
| **Background Light**| `#f8f9fa` | Off-white / Cool Gray | Table of Contents & callout box background |
| **Border Gray** | `#e9ecef` | Subtle Outline Gray | Box borders & dividers |

---

## 📐 HTML Tags & Inline Styles

> [!NOTE]
> All styles are strictly compatible with Summernote and Laravel's HTMLPurifier (`config/purifier.php`). Properties like `border-radius` and `box-shadow` are intentionally avoided because HTMLPurifier strips them from inline styles.

### 1. Section Heading (`<h2>`)
```html
<h2 style="font-size: 1.55rem; font-weight: 700; color: #004b78; margin-top: 30px; margin-bottom: 14px;">
    Section Title Here
</h2>
```

### 2. Subheading (`<h3>`)
```html
<h3 style="font-size: 1.25rem; font-weight: 600; color: #004b78; margin-top: 20px; margin-bottom: 10px;">
    Subheading Title Here
</h3>
```

### 3. FAQ Question (`<h3>`)
```html
<h3 style="font-size: 1.15rem; font-weight: 600; color: #004b78; margin-top: 18px; margin-bottom: 8px;">
    Frequently Asked Question?
</h3>
```

### 4. Body Paragraphs (`<p>`)
```html
<!-- Standard reading paragraph -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 16px;">
    Paragraph text goes here...
</p>

<!-- Paragraph right before a heading (adds extra breathing room) -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 24px;">
    Paragraph text goes here...
</p>

<!-- Introductory text immediately before a bullet list -->
<p style="font-size: 1.05rem; line-height: 1.8; color: #495057; margin-bottom: 12px;">
    List intro text goes here:
</p>
```

### 5. Unordered List (`<ul>` & `<li>`)
```html
<ul style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 24px; margin-bottom: 16px;">
    <li style="margin-bottom: 8px;">First bullet point</li>
    <li style="margin-bottom: 8px;">Second bullet point</li>
</ul>
```

### 6. Process / Ordered List (`<ol>` & `<li>`)
```html
<ol style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 24px; margin-bottom: 16px;">
    <li style="margin-bottom: 10px;"><strong>Step 1</strong> – Description of step 1.</li>
    <li style="margin-bottom: 10px;"><strong>Step 2</strong> – Description of step 2.</li>
</ol>
```

### 7. Links (`<a>`)
```html
<a href="https://pearlfertilityandivf.com/your-slug" style="color: #e83e8c; font-weight: 600; text-decoration: none;">Anchor Text</a>
```

### 8. Table of Contents / Highlight Card (`<div>`)
```html
<div style="background-color: #f8f9fa; border: 1px solid #e9ecef; padding: 20px 24px; margin-bottom: 28px;">
    <h3 style="font-size: 1.25rem; font-weight: 700; color: #004b78; margin-top: 0; margin-bottom: 14px;">
        Table of Contents
    </h3>
    <ol style="font-size: 1.05rem; line-height: 1.8; color: #495057; padding-left: 20px; margin-bottom: 0;">
        <li style="margin-bottom: 6px;">First Section</li>
        <li style="margin-bottom: 6px;">Second Section</li>
    </ol>
</div>
```

---

## 🔍 SEO Meta Title & Slug Auto-Generation Rules

### 1. Meta Title Auto-Generation
When creating or updating blogs in the Admin panel:
- **Meta Title Pattern:** `Pearl Fertility and IVF | {Blog Title}`
- **Example:**
  - **Blog Title:** `Can a Lady Gynecologist Help With Infertility and IVF Treatment?`
  - **Auto-Generated Meta Title:** `Pearl Fertility and IVF | Can a Lady Gynecologist Help With Infertility and IVF Treatment?`
- **Behavior in Admin:**
  - In `Create Blog` and `Edit Blog`, typing or modifying the Title automatically populates the `Meta Title` field in real-time.
  - A dedicated **"Auto Generate"** button is also available to re-sync at any time.
  - If `Meta Title` is left blank on save/update, the backend automatically generates this format.

### 2. URL Slug Auto-Generation
- **Slug Pattern:** `kebab-case` string generated directly from `{Blog Title}`.
- **Example:**
  - **Blog Title:** `Can a Lady Gynecologist Help With Infertility and IVF Treatment?`
  - **Auto-Generated Slug:** `can-a-lady-gynecologist-help-with-infertility-and-ivf-treatment`
  - **Full Frontend URL:** `https://pearlfertilityandivf.com/blogs/can-a-lady-gynecologist-help-with-infertility-and-ivf-treatment`
- **Behavior in Admin:**
  - In `Create Blog` and `Edit Blog`, typing or modifying the Title automatically generates the URL slug in real-time.
  - An editable input with the `/blogs/` URL prefix addon allows custom slugs.
  - A dedicated **"Auto Generate"** button allows re-generating the slug from Title at any time.
  - Backend controller handles uniqueness checks and automatically appends counter suffixes (`-1`, `-2`) in case of collisions.

---

## 🔒 Content & Output Rules

1. **Strict Content Fidelity:**
   - Use **only** the content provided in the prompt.
   - Do not add external CTAs, promotional notes, or fabricated doctor quotes.
   - Do not remove, reword, or skip any sentences.
2. **Direct File Output:**
   - Generated code is written directly to [blog-summernote.html](file:///c:/xampp/htdocs/pearl_fertility_ivf_laravel/blog-summernote.html).
   - No separate code blocks in chat (you can copy directly from the HTML file).
