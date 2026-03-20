# WordPress Theme Image Tag Audit Report
**Date:** March 19, 2026  
**Scope:** All template files (page-*.php, single-*.php, archive-*.php, footer.php, header.php, index.php)  
**Analysis:** Identifies all `<img>` tags missing required attributes: `loading="lazy"`, `alt`, `title`

---

## Summary Statistics
- **Total template files scanned:** 14
- **Total img tags found:** 69
- **Tags missing `loading="lazy"`:** 49
- **Tags missing `alt` attribute:** 2
- **Tags missing `title` attribute:** 67
- **Tags needing fixes:** 67 (97% of all images)

---

## Detailed Findings

### 1. archive-services.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 36 | `<img src="<?php echo $img_path; ?>/finance-management.jpg" alt="Finance Management" />` | `loading="lazy"`, `title` |
| 49 | `<img src="<?php echo $img_path; ?>/business-consulting.jpg" alt="Business Consulting" />` | `loading="lazy"`, `title` |
| 62 | `<img src="<?php echo $img_path; ?>/tax-consultancy.jpg" alt="Tax Consultancy" />` | `loading="lazy"`, `title` |
| 75 | `<img src="<?php echo $img_path; ?>/capital-markets.jpg" alt="Capital Markets" />` | `loading="lazy"`, `title` |
| 93 | `<img src="<?php echo $img_path; ?>/services-cta.jpg" alt="Business solutions" />` | `loading="lazy"`, `title` |

**Summary:** 5 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 2. archive-project.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| N/A | Uses `the_post_thumbnail()` WordPress function | Requires WordPress filter configuration |

**Summary:** Uses WordPress native thumbnail function. Verify that `alt` attribute is set via post thumbnail metadata.

---

### 3. page-fuel.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 30 | `<img src="<?php echo $img_path; ?>/fuel-hero.jpg" alt="F.U.E.L. Program" />` | `loading="lazy"`, `title` |
| 53 | `<img src="<?php echo $img_path; ?>/fuel-overview.svg" alt="F.U.E.L. Program Overview" />` | `loading="lazy"`, `title` |
| 365 | `<img src="<?php echo $img_path; ?>/fuel-usecase-1.jpg" alt="Hybrid Capital Investor" />` | `loading="lazy"`, `title` |
| 376 | `<img src="<?php echo $img_path; ?>/fuel-usecase-2.jpg" alt="Developer Use Case" />` | `loading="lazy"`, `title` |
| 387 | `<img src="<?php echo $img_path; ?>/fuel-usecase-3.jpg" alt="Private Wealth Client" />` | `loading="lazy"`, `title` |

**Summary:** 5 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 4. header.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 36 | `<img src="<?php echo esc_url($theme_uri . '/assets/img/global/logo.png'); ?>" alt="Phoenix Capital Solutions Logo" title="Phoenix Capital Solutions Logo">` | `loading="lazy"` |

**Summary:** 1 image found. Has `alt` and `title` but missing `loading="lazy"`.

---

### 5. page-disc.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 21 | `<img loading="lazy" class="d-block d-lg-none mb-4" src="<?php echo $img_path; ?>/disc-hero.svg" alt="D.I.S.C. Program" />` | `title` |
| 31 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-hero.svg" alt="D.I.S.C. Program" />` | `title` |
| 47 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-overview.svg" alt="D.I.S.C. Program Overview" class="mb-4 d-block d-lg-none" />` | `title` |
| 55 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-overview.svg" alt="D.I.S.C. Program Overview" />` | `title` |
| 363 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-usecase-1.jpg" alt="Business Expansion" />` | `title` |
| 374 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-usecase-2.jpg" alt="Private Asset Holder" />` | `title` |
| 385 | `<img loading="lazy" src="<?php echo $img_path; ?>/disc-usecase-3.jpg" alt="Developer Use Case" />` | `title` |

**Summary:** 7 images found. All have `loading="lazy"` and `alt`. All missing `title` attribute.

---

### 6. footer.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 9 | `<img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/logo.png" alt="Phoenix Capital Solutions" />` | `loading="lazy"`, `title` |

**Summary:** 1 image found. Has `alt` but missing `loading="lazy"` and `title`.

---

### 7. page-contact-us.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 17 | `<img src="<?php echo $img_path; ?>/contact-team.jpg" alt="Phoenix Capital Solutions Team" />` | `loading="lazy"`, `title` |

**Summary:** 1 image found. Has `alt` but missing `loading="lazy"` and `title`.

---

### 8. page-carr.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 28 | `<img src="<?php echo $img_path; ?>/carr-hero.png" alt="C.A.R.R. Program — Hard Assets" />` | `loading="lazy"`, `title` |
| 50 | `<img src="<?php echo $img_path; ?>/carr-overview.png" alt="C.A.R.R. Program Overview" />` | `loading="lazy"`, `title` |
| 383 | `<img src="<?php echo $img_path; ?>/carr-ree.png" alt="Rare Earth Element Mine Owners" />` | `loading="lazy"`, `title` |
| 395 | `<img src="<?php echo $img_path; ?>/carr-gold.png" alt="Vaulted Bullion Gold Holders" />` | `loading="lazy"`, `title` |
| 407 | `<img src="<?php echo $img_path; ?>/carr-diamonds.png" alt="Gemstone & Diamond Asset Owners" />` | `loading="lazy"`, `title` |

**Summary:** 5 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 9. page-seed.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 34 | `<img src="<?php echo $img_path; ?>/seed-hero.svg" alt="Institutional-Grade Capital Formation" />` | `loading="lazy"`, `title` |
| 56 | `<img src="<?php echo $img_path; ?>/seed-overview.svg" alt="SEED Program Overview" />` | `loading="lazy"`, `title` |
| 408 | `<img src="<?php echo $img_path; ?>/seed-usecase-1.jpg" alt="Private Fund Participant" />` | `loading="lazy"`, `title` |
| 420 | `<img src="<?php echo $img_path; ?>/seed-usecase-2.jpg" alt="High Net Worth Investor" />` | `loading="lazy"`, `title` |
| 432 | `<img src="<?php echo $img_path; ?>/seed-usecase-3.jpg" alt="Corporate Entity" />` | `loading="lazy"`, `title` |

**Summary:** 5 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 10. index.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 210 | `<img src="<?php echo esc_url($item['commercial_project_content_list_image']); ?>" alt="<?php echo !empty($item['commercial_project_content_list_title']) ? esc_attr($item['commercial_project_content_list_title']) : ''; ?>" loading="lazy">` | `title` |

**Summary:** 1 image found. Has `loading="lazy"` and `alt`. Missing `title`.

---

### 11. page-resources.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 116 | `<img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/subscribe-bg.jpg" alt="" />` | `loading="lazy"`, `title`, **EMPTY ALT** |

**Summary:** 1 image found. Has empty `alt` (decorative?), missing `loading="lazy"` and `title`.

---

### 12. page-gift.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 11 | `<img src="<?php echo $img_path; ?>/gift-globe.jpg" alt="G.I.F.T. Program Globe" class="img-fluid">` | `loading="lazy"`, `title` |
| 151 | `<img src="<?= $img_path ?>/grants-channel.png" alt="G.I.F.T. Grants Channel" class="img-fluid mb-3">` | `loading="lazy"`, `title` |
| 189 | `<img src="<?= $img_path ?>/ventures-channel.jpg" alt="G.I.F.T. Ventures Channel" class="img-fluid mb-3">` | `loading="lazy"`, `title` |
| 259 | `<img src="<?= $img_path ?>/fuel-gift.jpg" alt="F.U.E.L." class="img-fluid">` | `loading="lazy"`, `title` |
| 280 | `<img src="<?= $img_path ?>/disc-gift.jpg" alt="D.I.S.C." class="img-fluid">` | `loading="lazy"`, `title` |
| 301 | `<img src="<?= $img_path ?>/carr-gift.jpg" alt="C.A.R.R." class="img-fluid">` | `loading="lazy"`, `title` |
| 322 | `<img src="<?= $img_path ?>/large-cap-gift.jpg" alt="Large Cap" class="img-fluid">` | `loading="lazy"`, `title` |
| 459 | `<img src="<?= $img_path ?>/gift-scorecard.jpg" alt="G.I.F.T. Scorecard" class="img-fluid">` | `loading="lazy"`, `title` |
| 818 | `<img src="<?= $img_path ?>/gift-education.jpg" alt="Case Study Education" class="img-fluid">` | `loading="lazy"`, `title` |
| 984 | `<img src="<?= $img_path; ?>/gift-bridge-plans.jpg" alt="Financing Gap" class="img-fluid">` | `loading="lazy"`, `title` |
| 996 | `<img src="<?= $img_path; ?>/gift-bridge-team.jpg" alt="G.I.F.T. Solution" class="img-fluid">` | `loading="lazy"`, `title` |
| 1169 | `<img src="<?= $img_path ?>/gift-contact.jpg" alt="Contact G.I.F.T." class="img-fluid">` | `loading="lazy"`, `title` |
| 1266 | `<img src="<?= $img_path ?>/gift-future.jpg" alt="The Future is G.I.F.T." class="img-fluid">` | `loading="lazy"`, `title` |

**Summary:** 13 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 13. page-project-financing.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 30 | `<img src="<?php echo $img_path; ?>/pf-hero.jpg" alt="Project Financing — Bank Building" />` | `loading="lazy"`, `title` |
| 151 | `<img src="<?php echo $img_path; ?>/pf-overview.jpg" alt="Project Financing Overview" />` | `loading="lazy"`, `title` |
| 166 | `<img src="<?php echo $img_path; ?>/pf-loan-benefits.jpg" alt="Loan Structure Benefits" />` | `loading="lazy"`, `title` |
| 311 | `<img src="<?php echo $img_path; ?>/pf-example.jpg" alt="Project Example" />` | `loading="lazy"`, `title` |
| 372 | `<img src="<?php echo $img_path; ?>/pf-traditional.jpg" alt="Traditional Financing" />` | `loading="lazy"`, `title` |
| 388 | `<img src="<?php echo $img_path; ?>/pf-phoenix-loan.jpg" alt="Phoenix Capital Loan" />` | `loading="lazy"`, `title` |
| 439 | `<img src="<?php echo $img_path; ?>/pf-growth.jpg" alt="Projected Growth" />` | `loading="lazy"`, `title` |
| 454 | `<img src="<?php echo $img_path; ?>/pf-comparison.jpg" alt="Cost Opportunity Comparison" />` | `loading="lazy"`, `title` |
| 872 | `<img src="<?php echo $img_path; ?>/scenario1.jpg" alt="Commercial Development" />` | `loading="lazy"`, `title` |
| 884 | `<img src="<?php echo $img_path; ?>/scenario2.jpg" alt="Infrastructure Expansion" />` | `loading="lazy"`, `title` |
| 896 | `<img src="<?php echo $img_path; ?>/scenario3.jpg" alt="Renewable Energy" />` | `loading="lazy"`, `title` |

**Summary:** 11 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 14. page-about-us.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 18 | `<img src="<?php echo $img_path; ?>/about-hero.jpg" alt="Phoenix Capital Solutions Team" />` | `loading="lazy"`, `title` |
| 69 | `<img src="<?php echo $img_path; ?>/about-stats.jpg" alt="Phoenix Capital Global Reach" />` | `loading="lazy"`, `title` |
| 104 | `<img src="<?php echo $img_path; ?>/staff-01.jpg" alt="Justin Watson" />` | `loading="lazy"`, `title` |
| 117 | `<img src="<?php echo $img_path; ?>/staff-05.jpg" alt="Lori Cruz" />` | `loading="lazy"`, `title` |
| 524 | `<img src="<?php echo $img_path; ?>/Alicia Regnier.jpg" alt="Alicia Regnier" />` | `loading="lazy"`, `title` |
| 546 | `<img src="<?php echo $img_path; ?>/Marie Hibbler.jpg" alt="Marie Hibbler" />` | `loading="lazy"`, `title` |
| 568 | `<img src="<?php echo $img_path; ?>/Evan Hoffman.jpg" alt="Evan Hoffman" />` | `loading="lazy"`, `title` |
| 593 | `<img src="<?php echo $img_path; ?>/Richard Jeremy.jpg" alt="Richard Jeremy" />` | `loading="lazy"`, `title` |
| 615 | `<img src="<?php echo $img_path; ?>/Brent Schull.jpg" alt="Brent Schull" />` | `loading="lazy"`, `title` |
| 637 | `<img src="<?php echo $img_path; ?>/Elizabeth Varela.jpg" alt="Elizabeth Varela" />` | `loading="lazy"`, `title` |
| 659 | `<img src="<?php echo $img_path; ?>/Jay C. McLendon.jpg" alt="Jay C. McLendon" />` | `loading="lazy"`, `title` |

**Summary:** 11 images found. All have `alt` but missing `loading="lazy"` and `title`.

---

### 15. single-services.php
| Line | Current Tag | Missing Attributes |
|------|-------------|-------------------|
| 137 | `<img src="<?php echo esc_url($offering['image']['url']); ?>" alt="<?php echo esc_attr($offering['title']); ?>" />` | `loading="lazy"`, `title` |
| 247 | `<img src="<?php echo $img_path . '/' . $card['img']; ?>" alt="<?php echo strip_tags($card['title']); ?>" />` | `loading="lazy"`, `title` |

**Summary:** 2 images found. Both have `alt` but missing `loading="lazy"` and `title`.

---

## Priority Recommendations

### **CRITICAL (Must Fix)**
1. **Add `loading="lazy"` to all 49 images** currently missing it for performance optimization
2. **Add `title` attributes to all 67 images** for accessibility and UX enhancement
3. **Fix empty `alt` in page-resources.php line 116** - either provide meaningful alt text or add `role="presentation"` if truly decorative

### **MEDIUM (Should Fix)**
1. Standardize attribute ordering: `src`, `alt`, `title`, `loading="lazy"`, then `class`/other attributes
2. Review all `alt` text for clarity and descriptiveness (some are too short: "F.U.E.L.", "D.I.S.C.")
3. Consider adding `decoding="async"` for non-critical images

### **HIGH PRIORITY Files** (Most images needing fixes)
1. **page-gift.php** - 13 images
2. **page-project-financing.php** - 11 images  
3. **page-about-us.php** - 11 images
4. **page-disc.php** - 7 images (only missing `title`)

---

## Template Files with Good Practices
- **page-disc.php** - Already using `loading="lazy"` consistently
- **header.php** - Using both `alt` and `title` (just needs `loading="lazy"`)
- **index.php** - Using both `loading="lazy"` and `alt` (just needs `title`)

---

## Notes
- Some images use both `<?php ?>` and short tag `<?= ?>` syntax - consider standardizing
- ACF (Advanced Custom Fields) images in `single-services.php` need parent plugin configuration review
- WordPress native `the_post_thumbnail()` in `archive-project.php` requires theme support configuration verification
