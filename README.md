# Phoenix Capital Solutions — WordPress Theme

Custom WordPress theme for **Phoenix Capital Solutions** (`phxcapsolutions`).

---

## Requirements

| Requirement | Version |
|---|---|
| WordPress | 6.0+ |
| PHP | 7.4+ |
| Advanced Custom Fields (ACF) | 5.0+ (Pro recommended) |
| Contact Form 7 (CF7) | Any current |
| WooCommerce | Optional (theme support added) |

---

## Quick Setup

1. Upload the theme folder to `wp-content/themes/phxcapsolutions/`
2. Activate through **Appearance → Themes**
3. Install & activate the **Advanced Custom Fields** plugin
4. Install & activate the **Contact Form 7** plugin
5. Import the ACF field groups (see `ACF_MIGRATION.md`)
6. Assign pages to their correct page templates in the WordPress editor
7. Set the homepage to **Settings → Reading → Static page** pointing to your homepage post

### Font Awesome

The theme loads Font Awesome via a kit. Define the kit code in `wp-config.php`:

```php
define('PHX_FONT_AWESOME_KIT_CODE', 'your_kit_code_here');
```

If `PHX_FONT_AWESOME_KIT_CODE` is not defined, Font Awesome will not be loaded (no error — just silently skipped).

---

## Navigation Menus

Register these menus in **Appearance → Menus**:

| Menu Location Slug | Label |
|---|---|
| `primary` | Primary Menu |
| `navigation-links` | Navigation Links |
| `quick-links` | Quick Links |
| `programs` | Programs |

---

## Theme Supports

- `post-thumbnails`
- `post-formats` (aside, gallery, quote, image, video)
- WooCommerce (`woocommerce`, `wc-product-gallery-zoom`, `wc-product-gallery-lightbox`, `wc-product-gallery-slider`)

---

## Folder Structure

```
phxcapsolutions/
├── assets/
│   ├── img/
│   │   ├── about_us/          # Images for About Us page
│   │   ├── carr/              # Images for CARR program page
│   │   ├── contact_us/        # Images for Contact page
│   │   ├── fuel/              # Images for FUEL program page
│   │   ├── gift/              # Images for GIFT program page
│   │   ├── global/            # Shared/global images (logo, icons, etc.)
│   │   ├── homepage/          # Homepage-specific images
│   │   ├── project_financing/ # Images for Project Financing page
│   │   └── seed_program/      # Images for Seed program page
│   └── video/                 # Background/hero video files
├── css_script_manager/
│   └── css_script_manager.php # Conditional CSS/JS enqueue logic
├── inc/
│   ├── css/                   # All page-specific stylesheets (see CSS section)
│   └── js/                    # All JavaScript files (see JS section)
├── template/
│   ├── accordion.php          # Reusable accordion partial
│   └── card_template.php      # Reusable card partial
├── functions.php              # Theme setup, hooks, includes
├── style.css                  # Theme header (metadata only — no styles here)
├── header.php                 # Site-wide <head> and nav
├── footer.php                 # Site-wide footer
├── index.php                  # Homepage (Template: New Homepage)
├── page.php                   # Default fallback page template
├── single.php                 # Single blog post
├── 404.php                    # 404 error page
└── page-*.php                 # Named page templates (see Templates section)
```

---

## Page Templates

Each `page-*.php` file declares a `Template Name:` in its file header comment. Assign them in the WordPress editor under **Page Attributes → Template**.

| File | Template Name | CSS Loaded | Status |
|---|---|---|---|
| `index.php` | New Homepage | `new_homepage.css` + `homepage.js` | ✅ ACF-driven |
| `page-about-us.php` | About Us Page | `about_us.css` | ⏳ Static — to be migrated |
| `page-carr.php` | CARR Page | `carr.css` | ⏳ Static — to be migrated |
| `page-contact-us.php` | Contact Us Page | `contact_us.css` | ⏳ Static — to be migrated |
| `page-disc.php` | DISC Page | `disc.css` | ⏳ Static — to be migrated |
| `page-fuel.php` | FUEL Page | `fuel.css` | ⏳ Static — to be migrated |
| `page-gift.php` | GIFT Page | `gift.css` | ⏳ Static — to be migrated |
| `page-loan-application.php` | Loan Application Page | `loan_application.css` | ⏳ Static — to be migrated |
| `page-privacy-policy.php` | Privacy Policy Page | `privacy_policy.css` | ⏳ Static — to be migrated |
| `page-project-financing.php` | Project Financing Page | `project_financing.css` | ⏳ Static — to be migrated |
| `page-resources.php` | Resources Page | `resources.css` | ⏳ Static — to be migrated |
| `page-security-and- compliance.php` | Security and Compliance Page | `security-and-compliance.css` | ⏳ Static — to be migrated |
| `page-seed.php` | Seed Program Page | `seed.css` | ⏳ Static — to be migrated |
| `page-terms-and-condition.php` | Terms and Condition Page | `terms_and_conditions.css` | ⏳ Static — to be migrated |
| `page-accessibility.php` | Accessibility Page | — | ⏳ Static — to be migrated |
| `page-thank-you.php` | Thank You Page | — | ⏳ Static — to be migrated |
| `archive-project.php` | — (archive) | `archive_project.css` | — |
| `archive-services.php` | — (archive) | `services.css` | — |
| `single-project.php` | — (singular) | `archive_project.css` + `single_project.css` | — |
| `single-services.php` | — (singular) | `services.css` + `single_services.css` | — |
| `single.php` | — (singular post) | `single_post.css` | — |

> See `ACF_MIGRATION.md` for the plan and pattern to convert static pages to ACF-driven.

---

## CSS Architecture

Stylesheets are loaded conditionally — a page only loads the CSS it needs.

```
Bootstrap (bootstrap.min.css)
    └── global.css          ← loaded on every page
            └── [page].css  ← loaded only on matching page/template
```

### Global Utilities (defined in `global.css`)

| Class | Purpose |
|---|---|
| `.text_gold` / `.text-gold` | Brand gold color `#c59b32` |
| `.hero_btns .btn_gold` | Gold filled CTA button |
| `.hero_btns .btn_outline` | Outlined/ghost CTA button |

These are centralised — **do not redeclare** them in page-specific CSS files.

### CSS File Map

| File | Used By |
|---|---|
| `bootstrap.min.css` | All pages |
| `global.css` | All pages |
| `new_homepage.css` | Homepage |
| `about_us.css` | About Us |
| `carr.css` | CARR |
| `contact_us.css` | Contact Us |
| `disc.css` | DISC |
| `footer.css` | Footer (loaded in footer.php directly) |
| `fuel.css` | FUEL |
| `gift.css` | GIFT |
| `header.css` | Header (loaded in header.php directly) |
| `loan_application.css` | Loan Application |
| `privacy_policy.css` | Privacy Policy |
| `project_financing.css` | Project Financing |
| `resources.css` | Resources / Blog |
| `security-and-compliance.css` | Security & Compliance |
| `seed.css` | Seed Program |
| `services.css` | Services archive + singular |
| `single_post.css` | Single blog post |
| `single_project.css` | Single project |
| `single_services.css` | Single service |
| `terms_and_conditions.css` | Terms & Conditions |
| `owl.carousel.min.css` | Owl Carousel (loaded where needed) |
| `owl.theme.default.css` | Owl Carousel theme |

> CSS files use **modern CSS nesting** syntax (`& .child`, `&:hover`). Requires a browser or build tool that supports CSS Nesting (Chrome 112+, Firefox 117+, Safari 16.5+).

---

## JavaScript Files

| File | Purpose |
|---|---|
| `jquery.min.js` | jQuery (registered as `jquery`) |
| `bootstrap.bundle.min.js` | Bootstrap JS + Popper |
| `owl.carousel.min.js` | Owl Carousel slider |
| `functions.js` | Global JS (runs on every page) |
| `homepage.js` | Homepage-specific JS (carousels, animations) |

---

## Asset Manager (`css_script_manager.php`)

All conditional CSS/JS enqueueing is handled by `exam_enqueue_assets()` hooked to `wp_enqueue_scripts`.

Conditions use `is_page_template('filename.php')` — **not** URL slugs — so they are locale and permalink-structure independent.

When adding a new page template:
1. Create the `page-*.php` file with a `Template Name:` header comment
2. Add its CSS to `inc/css/`
3. Add an `elseif (is_page_template('page-*.php'))` block in `css_script_manager.php`

---

## Adding a New Page

1. Create `page-mypagename.php` with:
   ```php
   <?php
   /*
   Template Name: My Page Name
   */
   get_header();
   // ... your HTML/PHP
   get_footer();
   ```
2. Create `inc/css/mypagename.css`
3. Add enqueue in `css_script_manager.php`:
   ```php
   } elseif (is_page_template('page-mypagename.php')) {
       wp_enqueue_style('mypagename', $theme_uri . '/inc/css/mypagename.css', array('global'), null);
   }
   ```
4. Create a new WordPress page, assign the template, publish

---

## ACF Content Architecture

The homepage (`index.php`) is fully ACF-driven. All other pages are currently static and will be migrated.

See **`ACF_MIGRATION.md`** for:
- The full ACF field group structure for the homepage
- The coding pattern to follow when migrating a page
- Page-by-page migration checklist
