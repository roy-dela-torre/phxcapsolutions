# Phoenix Capital Solutions — Reusable Component Library

## Setup

1. Copy all `.php` files → `template/components/`
2. Copy `components.css` → `inc/css/components.css`
3. Replace `css_script_manager/css_script_manager.php` with the updated version

Load order is automatic: `bootstrap → global → components → [page].css`

---

## Components & Usage

---

### 1. Section Header
**File:** `template/components/section-header.php`
**Replaces:** Repeated `.section_header` / `.header` blocks in every page

```php
get_template_part('template/components/section-header', null, [
    'label'       => 'Program Overview',     // optional badge
    'title'       => 'How It Works',         // required
    'subtitle'    => 'Supporting text here', // optional
    'align'       => 'left',                 // 'left' | 'center'
    'title_color' => 'gold',                 // 'gold' | 'white'
]);
```

---

### 2. FAQ Accordion
**File:** `template/components/faq.php`
**Replaces:** All `faq_accordion` blocks in carr, seed, fuel, gift, project-financing

```php
get_template_part('template/components/faq', null, [
    'id'    => 'carrFaq',   // unique per page — used for Bootstrap collapse targeting
    'items' => [
        ['question' => 'Who is the C.A.R.R. Program for?',    'answer' => 'For qualified hard asset owners...'],
        ['question' => 'Is there a minimum capital requirement?', 'answer' => 'Yes, minimum $2.5M...'],
    ],
]);
```

---

### 3. Content Card
**File:** `template/components/content-card.php`
**Replaces:** Repeated `.content` cards across gift, carr, fuel, seed, project-financing

```php
// Wrap in Bootstrap col
echo '<div class="col-lg-4 col-md-6">';
get_template_part('template/components/content-card', null, [
    'label'   => 'Category Label',   // optional
    'title'   => 'Card Title',
    'text'    => 'Body paragraph text.',
    'items'   => ['Bullet one', 'Bullet two'],  // optional list
    'variant' => 'default',          // 'default' | 'gold'
]);
echo '</div>';
```

---

### 4. Detail List
**File:** `template/components/detail-list.php`
**Replaces:** All `.detail_list` `<ul>` blocks

```php
get_template_part('template/components/detail-list', null, [
    'items' => [
        '<strong class="text_gold">Legal Structure:</strong> Private Foundation',
        '<strong class="text_gold">Tax Status:</strong> 501(c)(3) tax-exempt',
    ],
    'style' => 'dot',   // 'dot' (default) | 'bar'
]);
```

---

### 5. Highlight Box
**File:** `template/components/highlight-box.php`
**Replaces:** All `.highlight_box` blocks

```php
get_template_part('template/components/highlight-box', null, [
    'text'    => 'Important note or disclaimer text here.',
    'variant' => 'default',  // 'default' | 'warning' | 'info'
    'icon'    => true,
]);
```

---

### 6. Stat Block
**File:** `template/components/stat-block.php`
**Replaces:** All `.stat_block` elements in case study / impact sections

```php
// Wrap in Bootstrap col
echo '<div class="col-md-4">';
get_template_part('template/components/stat-block', null, [
    'number' => '$2.5M',
    'label'  => 'Deployed Capital',
    'text'   => 'Across verified NGOs and impact enterprises.',
]);
echo '</div>';
```

---

### 7. Flip Card
**File:** `template/components/flip-card.php`
**Replaces:** All `.flip_card` blocks in gift, carr, fuel

```php
echo '<div class="col-lg-4">';
get_template_part('template/components/flip-card', null, [
    'label'      => 'Category',
    'title'      => 'Card Title',
    'image'      => $img_path . '/example.jpg',
    'back_label' => 'Details',
    'back_items' => ['Feature one', 'Feature two', 'Feature three'],
    'height'     => '320px',
]);
echo '</div>';
```

---

### 8. Eligibility Card
**File:** `template/components/eligibility-card.php`
**Replaces:** All `.eligibility_card` blocks in seed, carr, fuel

```php
echo '<div class="col-lg-4 col-md-6">';
get_template_part('template/components/eligibility-card', null, [
    'svg'   => '<svg width="22" height="22" ...>...</svg>',
    'title' => 'Minimum $2.5M entry capital',
    'text'  => 'Recommended $5M for optimal program positioning.',
]);
echo '</div>';
```

---

### 9. Phase Card
**File:** `template/components/phase-card.php`
**Replaces:** All `.phase_card` blocks in roadmap/process sections

```php
echo '<div class="col-lg-4">';
get_template_part('template/components/phase-card', null, [
    'tag'    => 'Phase 1',
    'title'  => 'Onboarding & Verification',
    'text'   => 'Initial documentation review.',
    'items'  => ['KYC submission', 'Asset verification', 'Compliance check'],
    'active' => false,
    'icon'   => '<svg>...</svg>',
]);
echo '</div>';
```

---

### 10. Hero Section
**File:** `template/components/hero-section.php`
**Replaces:** The opening hero section in every program page

```php
get_template_part('template/components/hero-section', null, [
    'section_class' => 'carr_hero',   // used to target page-specific bg in [page].css
    'program_label' => 'Commodities & Assets Recapitalization & Redistribution',
    'title'         => 'A Strategic Framework for Capital Expansion',
    'text'          => 'Supporting paragraph text.',
    'btn_primary'   => ['label' => 'Request Consultation',    'url' => '#intake_form', 'class' => 'btn_gold'],
    'btn_secondary' => ['label' => 'Download Program Overview', 'url' => '/file.pdf',  'class' => 'btn_outline', 'target' => '_blank'],
    'image_src'     => $img_path . '/carr-hero.png',
    'image_alt'     => 'C.A.R.R. Program Hero',
    'layout'        => 'image-right',  // 'image-right' | 'image-left' | 'centered'
]);
```

> Note: Per-page hero background image is still set in the page-specific CSS
> using `.carr_hero { background: ... }` — the component only handles layout/structure.

---

## What You Can Now Remove From Page CSS Files

Once components are in place, you can **delete these blocks** from `carr.css`, `seed.css`, `fuel.css`, `gift.css`, and `project_financing.css`:

| CSS Block | Now in |
|---|---|
| `.faq_accordion / .faq_item / .faq_question / .faq_answer / .faq_icon` | `components.css` |
| `.section_header / .program_label` | `components.css` |
| `.highlight_box / .highlight_icon` | `components.css` |
| `.flip_card / .flip_card_inner / .flip_card_front / .flip_card_back` | `components.css` |
| `.content_card / .card_label` | `components.css` |
| `.detail_list` | `components.css` |
| `.stat_block / .stat_number / .stat_label` | `components.css` |
| `.eligibility_card / .elig_icon` | `components.css` |
| `.phase_card / .phase_line / .phase_icon / .phase_tag / .phase_list` | `components.css` |
| `.hero_content / .hero_image / .hero_btns` | `components.css` |
