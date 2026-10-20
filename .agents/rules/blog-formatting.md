# Blog Formatting & HTML Generation Rules

These rules apply whenever the user provides a blog post to format for Summernote:

1. **Target File:**
   - Always output the generated HTML to `blog-summernote.html` at the project root using `write_to_file`.
   - Never output full HTML code blocks in the chat response.

2. **Content Preservation:**
   - Use ONLY the text provided by the user.
   - Do NOT add external CTAs, testimonials, invented quotes, or extra paragraphs.
   - Do NOT delete or modify any words or sentences from the provided draft.

3. **Color Palette & Styling:**
   - Headings (`<h2>`, `<h3>`): `#004b78` (Navy Blue)
   - Links (`<a>`): `#e83e8c` (Pearl Pink/Magenta) with `font-weight: 600; text-decoration: none;`
   - Body text (`<p>`, `<li>`): `#495057` with `font-size: 1.05rem; line-height: 1.8;`
   - Callout / Table of Contents box: `background-color: #f8f9fa; border: 1px solid #e9ecef;`

4. **HTMLPurifier Safety (`config/purifier.php`):**
   - Strictly avoid inline CSS properties stripped by purifier: `border-radius`, `box-shadow`, `display`, `background: linear-gradient(...)`.
   - Use `background-color:` instead of shorthand `background:`.
