# Divine Balaji Travels Blog Admin Guide

This guide is for the SEO and content team managing the Divine Balaji Travels blog.

## Login

Open the blog admin login page:

`/admin/login.php`

Enter your assigned email address and password. Do not share passwords in chat, email, or documents. If login fails, confirm that the email is active and contact the developer or administrator.

## Dashboard

The dashboard shows:

- Total blog posts
- Draft posts
- Published posts
- Archived posts
- Total categories
- Recent admin activity

Use the quick links to add a post, view all posts, add a category, or view all categories.

## Categories

### Add a category

1. Select **Add Category**.
2. Enter a clear category name, such as `Tirupati Travel Guide`.
3. Check the generated slug and edit it if needed.
4. Add a short category description.
5. Add a category meta title and meta description when available.
6. Keep the status **Active**.
7. Select **Save category**.

### Edit a category

1. Open **Categories**.
2. Select **Edit** beside the category.
3. Update the name, description, slug, SEO fields, or status.
4. Select **Save category**.

Category slugs must be unique. An inactive category is not offered for new posts and is not shown in public blog SEO output.

## Blog posts

### Create a post

1. Select **Add New Post** or **New post**.
2. Write the blog title.
3. Check or enter the slug.
4. Select a category.
5. Add a short excerpt.
6. Write the main article content.
7. Add the SEO fields described below.
8. Choose **Draft** while the article is being reviewed.
9. Select **Save post**.

### Save a draft

Choose **Draft** in the status field and select **Save post**. Drafts are visible in the admin panel but are not publicly accessible and are not included in the blog sitemap.

### Publish a post

1. Open the post from **Posts**.
2. Review the title, slug, category, content, image, and SEO fields.
3. Change status to **Published**.
4. Select **Save post**.
5. Check the public blog page after saving.

Only published posts appear on the public blog. Use **Unpublish** when a published article should return to draft status. Use **Archive** when the article should no longer be active.

## SEO fields

### Slug

Use a short, readable, lowercase URL slug with hyphens, for example:

`tirupati-darshan-guide`

Do not use duplicate slugs. Each post must have a unique slug.

### Meta title

Write a clear page title that describes the search intent. Keep it concise and place the main topic near the beginning.

Example:

`Complete Tirupati Darshan Guide for First-Time Visitors`

### Meta description

Write a useful summary of the article. Explain what the reader will learn and naturally include the main topic. Avoid keyword stuffing and duplicated descriptions.

### Focus and secondary keywords

Use one main focus keyword and a few closely related secondary keywords. Write for visitors first; do not repeat keywords unnaturally.

### Canonical URL

Leave this empty unless the article intentionally has another canonical URL. If used, enter a complete valid URL beginning with `https://`.

### Robots

Use the default `index,follow` for normal published articles. Use `noindex,follow` only when an administrator specifically instructs you not to index a page. Do not change this setting casually.

### Open Graph fields

OG title and OG description control how the article may appear when shared. If no OG image is provided, the site uses its existing default image safely.

## Featured images

A featured image is optional. A post can be created, saved, edited, and published without an image.

Allowed image types:

- JPG
- JPEG
- PNG
- WEBP

Maximum file size: **5 MB**.

Do not upload PHP, SVG, JS, HTML, TXT, ZIP, or other non-image files. The upload is checked by file extension and MIME type. Add useful alt text when an image is uploaded.

If an upload fails, confirm that the file is a JPG, JPEG, PNG, or WEBP and is below 5 MB. Try saving the post without an image if the article does not need one. If the problem continues, record the filename and error message and contact the developer.

## Content rules for Divine Balaji Travels

- Use clear, helpful headings and short paragraphs.
- Answer the visitor's travel or Tirupati planning question directly.
- Use accurate dates, timings, eligibility information, and package details.
- Link naturally to relevant Divine Balaji Travels service pages.
- Do not copy content from other websites.
- Use one clear primary topic per article.
- Review spelling, links, images, and mobile readability before publishing.

Do not write:

- “official TTD agent”
- “guaranteed darshan ticket”
- “confirmed TTD ticket”

Use safe wording such as:

> We provide travel package coordination, private car support, hotel assistance and trip guidance. Temple tickets, eligibility and schedules are managed by official authorities.

## Check a published blog

After publishing, check:

- `/blog/`
- The category page, such as `/blog/tirupati-travel-guide/`
- The article page, such as `/blog/your-post-slug/`
- `/blog-sitemap.xml`

Confirm the title, content, category, image, meta information, and WhatsApp enquiry button.

If the blog is not showing publicly, first confirm that the post status is **Published**, the category is active, the slug is unique, and the URL is correct. Do not repeatedly resave a post if the issue is unclear; contact the developer with the post title, slug, and screen message.

## Logout

Select **Sign out** in the admin navigation when finished. Always log out on a shared computer.

## When to contact the developer or administrator

Ask for help if:

- Login does not work.
- A category or post cannot be saved.
- A duplicate slug warning appears unexpectedly.
- An image is rejected even though it meets the file rules.
- A published post does not appear publicly.
- A slug was changed and the old URL does not redirect.
- The sitemap does not update after publishing.
- You see a database, permission, or server error.

Include the page URL, post or category name, exact error message, and the steps that caused the problem. Never send a password or database credential.
