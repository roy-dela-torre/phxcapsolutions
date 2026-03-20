# ACF Migration Guide — Converting Static Pages to Dynamic Content

This document defines the standard pattern for migrating static `page-*.php` template files to ACF-driven dynamic content, following the approach established on the homepage (`index.php`).

---

## Overview

| Page | Template File | Migration Status |
|---|---|---|
| Homepage | `index.php` | ✅ Done |
| About Us | `page-about-us.php` | ⏳ Pending |
| CARR | `page-carr.php` | ⏳ Pending |
| Contact Us | `page-contact-us.php` | ⏳ Pending |
| DISC | `page-disc.php` | ⏳ Pending |
| FUEL | `page-fuel.php` | ⏳ Pending |
| GIFT | `page-gift.php` | ⏳ Pending |
| Loan Application | `page-loan-application.php` | ⏳ Pending |
| Privacy Policy | `page-privacy-policy.php` | ⏳ Pending |
| Project Financing | `page-project-financing.php` | ⏳ Pending |
| Resources | `page-resources.php` | ⏳ Pending |
| Security & Compliance | `page-security-and- compliance.php` | ⏳ Pending |
| Seed Program | `page-seed.php` | ⏳ Pending |
| Terms & Condition | `page-terms-and-condition.php` | ⏳ Pending |
| Accessibility | `page-accessibility.php` | ⏳ Pending |
| Thank You | `page-thank-you.php` | ⏳ Pending |

---

## The Standard Migration Pattern

### Step 1 — Create the ACF Field Group

In **ACF → Field Groups**, create a new field group for the page:

- **Title**: e.g. `About Us Page`
- **Location Rule**: `Page Template` `is equal to` `page-about-us.php`
- **Field Key Prefix**: use a consistent snake_case prefix matching the page, e.g. `about_us_`

### Step 2 — Name Fields Consistently

Follow this naming convention:

```
{section_name}_{field_description}
```

Examples:
- `hero_title`
- `hero_description` (WYSIWYG)
- `hero_background_image` (image)
- `hero_button` (link)
- `about_stats_list` (repeater)
  - `about_stats_list_number` (text)
  - `about_stats_list_label` (text)

**Always use snake_case. Never use hyphens in field names.**

### Step 3 — Pre-fetch All Fields at the Top of the Template

Fetch every field at the very top of the PHP file, before any HTML output. This keeps the template clean and makes it easy to see all fields at a glance.

```php
<?php
/*
Template Name: About Us Page
*/
get_header();

// ── Hero ──────────────────────────────────────────────────────────
$hero_title          = get_field('about_us_hero_title');
$hero_description    = get_field('about_us_hero_description');   // wysiwyg
$hero_image          = get_field('about_us_hero_image');         // image → array
$hero_button         = get_field('about_us_hero_button');        // link

// ── Stats ─────────────────────────────────────────────────────────
$stats_list          = get_field('about_us_stats_list');         // repeater
?>
```

### Step 4 — Output Fields Safely

Always use the correct escaping function for the field type:

| Field Type | Output Function |
|---|---|
| text / number / email | `echo esc_html($var)` |
| URL / href attribute | `echo esc_url($var)` |
| HTML attribute (class, target, etc.) | `echo esc_attr($var)` |
| WYSIWYG / HTML content | `echo wp_kses_post($var)` |
| Image URL (from image field) | `echo esc_url($var['url'])` |
| Image alt text | `echo esc_attr($var['alt'])` |

**Never use `the_field()` inside concatenated strings or HTML attributes** — `the_field()` echoes directly and returns `null`, which produces broken output. Always use `get_field()` and echo explicitly.

### Step 5 — Handle Repeater Fields

```php
<?php if ($stats_list) : ?>
    <?php foreach ($stats_list as $item) : ?>
        <div class="stat_card">
            <span class="stat_number"><?php echo esc_html($item['about_us_stats_list_number']); ?></span>
            <span class="stat_label"><?php echo esc_html($item['about_us_stats_list_label']); ?></span>
        </div>
    <?php endforeach; ?>
<?php endif; ?>
```

### Step 6 — Add a Hardcoded Fallback (Optional but Recommended)

During development or when ACF data is missing, a fallback prevents a blank page:

```php
<?php if ($stats_list) : ?>
    <?php foreach ($stats_list as $item) : ?>
        <!-- dynamic output -->
    <?php endforeach; ?>
<?php else : ?>
    <!-- hardcoded fallback -->
    <div class="stat_card">
        <span class="stat_number">2012</span>
        <span class="stat_label">Founded</span>
    </div>
<?php endif; ?>
```

---

## Handle the Link Field

ACF's **Link** field can return either a plain URL string or an associative array depending on the **Return Format** setting in the field configuration.

Always write defensive code that handles both:

```php
$button         = get_field('section_button');  // link field
$button_url     = is_string($button) ? $button : (is_array($button) && isset($button['url']) ? $button['url'] : '');
$button_label   = is_array($button) && !empty($button['title']) ? $button['title'] : 'Learn More';
$button_target  = is_array($button) && !empty($button['target']) ? $button['target'] : '_self';
```

Then in HTML:
```html
<?php if ($button_url) : ?>
    <a href="<?php echo esc_url($button_url); ?>"
       target="<?php echo esc_attr($button_target); ?>"
       rel="noopener noreferrer"
       class="btn_gold">
        <?php echo esc_html($button_label); ?>
    </a>
<?php endif; ?>
```

---

## Handle the Image Field

Set the image field **Return Format** to `Array` in ACF for access to `url`, `alt`, `width`, `height`.

```php
$hero_image = get_field('about_us_hero_image');  // image → array
```

```html
<?php if ($hero_image) : ?>
    <img src="<?php echo esc_url($hero_image['url']); ?>"
         alt="<?php echo esc_attr($hero_image['alt']); ?>"
         width="<?php echo esc_attr($hero_image['width']); ?>"
         height="<?php echo esc_attr($hero_image['height']); ?>" />
<?php endif; ?>
```

---

## Handle the File Field

Set the file field **Return Format** to `Array`.

```php
$video = get_field('hero_banner_video_background');  // file → array
$video_url = is_array($video) ? $video['url'] : (is_string($video) ? $video : '');
```

---

## WYSIWYG in Block Elements

WYSIWYG fields output full HTML (including `<p>` tags). **Never wrap them inside another `<p>` tag** — that creates invalid nested paragraphs.

```php
<!-- ✅ Correct -->
<div class="section_description">
    <?php echo wp_kses_post($hero_description); ?>
</div>

<!-- ❌ Wrong — invalid nested <p> -->
<p class="section_description">
    <?php echo wp_kses_post($hero_description); ?>
</p>
```

---

## Homepage ACF Field Reference (Already Migrated)

ACF Field Group: `group_69b42b4fb4aa0`
Applied to: Page ID 77 (Homepage)

### Section 1 — Hero Banner

| PHP Variable | ACF Field Key | Field Type | Notes |
|---|---|---|---|
| `$hero_banner_video_background` | `hero_banner_video_background` | file | Return format: array |
| `$hero_banner_title` | `hero_banner_title` | text | |
| `$hero_banner_description` | `hero_banner_description` | wysiwyg | |
| `$hero_banner_button` | `hero_banner_button` | link | Return format: url (plain string) |
| `$hero_banner_card_content_list` | `hero_banner_card_content_list` | repeater | |
| `→ $item['hero_banner_content_list_title']` | sub-field | text | |
| `→ $item['hero_banner_content_list_description']` | sub-field | wysiwyg | |

### Section 2 — We Handle All

| PHP Variable | ACF Field Key | Field Type |
|---|---|---|
| `$we_handle_all_title` | `we_handle_all_title` | text |
| `$we_handle_all_description` | `we_handle_all_description` | wysiwyg |
| `$we_handle_all_card_content_list` | `we_handle_all_card_content_list` | repeater |
| `→ $item['we_handle_all_card_content_list_small_text']` | sub-field | text |
| `→ $item['we_handle_all_card_content_list_title']` | sub-field | text |
| `→ $item['we_handle_all_card_content_list_description']` | sub-field | wysiwyg |

### Section 3 — Traditional vs. Phoenix

| PHP Variable | ACF Field Key | Field Type |
|---|---|---|
| `$traditional_vs_phoenix_title` | `traditional_vs_phoenix_title` | text |
| `$traditional_vs_phoenix_content_list` | `traditional_vs_phoenix_content_list` | repeater |
| `→ $item['traditional_vs_phoenix_content_list_title']` | sub-field | text |
| `→ $item['traditional_vs_phoenix_traditional']` | sub-field | text |
| `→ $item['traditional_vs_phoenix_phoenix']` | sub-field | text |

### Section 4 — Commercial Project

| PHP Variable | ACF Field Key | Field Type | Notes |
|---|---|---|---|
| `$commercial_project_title` | `commercial_project_title` | text | |
| `$commercial_project_desctiption` | `commercial_project_desctiption` | wysiwyg | Note: typo in field name (`desctiption`) — intentional, matches ACF schema |
| `$commercial_project_content_list` | `commercial_project_content_list` | repeater | |
| `→ $item['commercial_project_content_list_image']` | sub-field | image | |
| `→ $item['commercial_project_content_list_title']` | sub-field | text | |
| `→ $item['commercial_project_content_list_description']` | sub-field | wysiwyg | |

### Section 5 — What We Don't Ask For

| PHP Variable | ACF Field Key | Field Type |
|---|---|---|
| `$what_we_dont_ask_for_title` | `what_we_dont_ask_for_title` | text |
| `$what_we_dont_ask_for_description` | `what_we_dont_ask_for_description` | wysiwyg |
| `$what_we_dont_ask_for_question` | `what_we_dont_ask_for_question` | repeater |
| `→ $item['what_we_dont_ask_for_question_text']` | sub-field | text |

### Section 6 — How Phoenix Scales *(not yet migrated — no ACF fields defined)*

Still hardcoded with Scenario 01 / 02 / 03 stat cards. To migrate this section, a new ACF repeater field will need to be created.

---

## Common Mistakes to Avoid

| Mistake | Fix |
|---|---|
| Using `the_field()` inside HTML attribute or string concat | Use `get_field()` + `esc_*()` |
| Wrapping WYSIWYG output in `<p>` | Use `<div>` wrapper instead |
| Using `is_page('slug')` in `css_script_manager.php` | Use `is_page_template('filename.php')` |
| Accessing `$link['url']` without checking if it's an array | Use the defensive link handler pattern above |
| Hardcoding image paths as `$theme_uri . '/assets/img/...'` on migrated pages | Use ACF image fields so images are editable from the CMS |
| Redeclaring `.text_gold` or `.btn_gold` in page CSS | These live in `global.css` — do not duplicate |

---

## VS Code / PHP Linting Note

The PHP language server will show **"Undefined function 'get_field'"** warnings throughout the template files. This is a **false positive** — `get_field()` is provided by the ACF plugin at WordPress runtime and is not resolvable by static analysis tools. These warnings can be safely ignored. The code is correct and will work in a live WordPress environment.
