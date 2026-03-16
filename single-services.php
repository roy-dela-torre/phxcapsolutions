<?php
/**
 * Template Name: Single Service Page
 * Single service page — accordion cards + apply buttons
 */

get_header();
$img_path  = get_template_directory_uri() . '/assets/img/services';

// ACF fields
$service_label     = get_field('service_label')     ?: 'Our Services';
$service_intro     = get_field('service_intro')     ?: '';
$service_checklist = get_field('service_checklist') ?: [];
$offerings_title   = get_field('offerings_title')   ?: 'Real Estate Funding Offerings We Provide.';
$offerings         = get_field('offerings')         ?: [];
$global_apply_url  = get_field('global_apply_url')  ?: '/contact/';
?>

<!-- ========== HERO ========== -->
<section class="ss_hero">
    <div class="wrapper">
        <div class="container-fluid">

            <!-- Breadcrumb -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ss_breadcrumb">
                        <a href="<?php echo get_home_url(); ?>">Home</a>
                        <span class="bc_sep">›</span>
                        <a href="/services/">Services</a>
                        <span class="bc_sep">›</span>
                        <span><?php the_title(); ?></span>
                    </div>
                </div>
            </div>

            <div class="row align-items-start">

                <!-- Left: label + H1 + intro -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="ss_label"><?php echo esc_html($service_label); ?></div>
                    <h1 class="text-white"><?php the_title(); ?></h1>
                    <div class="ss_intro">
                        <?php
                        if ($service_intro) {
                            echo wp_kses_post($service_intro);
                        } else {
                            the_content();
                        }
                        ?>
                    </div>
                </div>

                <!-- Right: checklist -->
                <div class="col-lg-6">
                    <?php if (!empty($service_checklist)) : ?>
                        <div class="ss_checklist">
                            <?php foreach ($service_checklist as $item) : ?>
                                <div class="ss_check_item">
                                    <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div>
                                        <div class="check_title"><?php echo esc_html($item['title']); ?></div>
                                        <?php if (!empty($item['desc'])) : ?>
                                            <div class="check_desc"><?php echo esc_html($item['desc']); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else : ?>
                        <!-- Fallback checklist -->
                        <div class="ss_checklist">
                            <div class="ss_check_item">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div>
                                    <div class="check_title">Flexible Financing Options</div>
                                    <div class="check_desc">Tailored loan solutions to fit various real estate needs, from purchasing and refinancing to new development projects.</div>
                                </div>
                            </div>
                            <div class="ss_check_item">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div>
                                    <div class="check_title">Competitive Rates</div>
                                    <div class="check_desc">Attractive interest rates designed to optimize your investment returns and minimize costs.</div>
                                </div>
                            </div>
                            <div class="ss_check_item">
                                <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4 10l4 4 8-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <div>
                                    <div class="check_title">Expert Support</div>
                                    <div class="check_desc">Dedicated team providing personalized guidance throughout the entire funding process.</div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ========== OFFERINGS ========== -->
<section class="ss_offerings">
    <div class="wrapper">
        <div class="container-fluid">

            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="ss_section_label">Our services</div>
                    <h2 class="text-white ss_section_title"><?php echo esc_html($offerings_title); ?></h2>
                </div>
            </div>

            <div class="row">
                <?php if (!empty($offerings)) : ?>

                    <?php foreach ($offerings as $i => $offering) :
                        $uid       = 'offering_' . $i . '_' . get_the_ID();
                        $apply_url = !empty($offering['apply_url']) ? $offering['apply_url'] : $global_apply_url;
                        $has_body  = !empty($offering['description']) || !empty($offering['highlights']) || !empty($offering['quick_facts']);
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="offering_card">

                                <!-- Image -->
                                <?php if (!empty($offering['image'])) : ?>
                                    <div class="offering_image">
                                        <img src="<?php echo esc_url($offering['image']['url']); ?>"
                                             alt="<?php echo esc_attr($offering['title']); ?>" />
                                    </div>
                                <?php endif; ?>

                                <!-- Title row -->
                                <div class="offering_header">
                                    <div class="offering_title_row">
                                        <div class="offering_icon"></div>
                                        <h3 class="text-white"><?php echo esc_html($offering['title']); ?></h3>
                                    </div>
                                </div>

                                <!-- Accordion toggle button (only if there's content) -->
                                <?php if ($has_body) : ?>
                                <button class="offering_toggle collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo $uid; ?>"
                                        aria-expanded="false"
                                        aria-controls="<?php echo $uid; ?>">
                                    <span class="toggle_label_show">Show details</span>
                                    <span class="toggle_label_hide">Hide details</span>
                                    <svg class="toggle_chevron" width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                                <!-- Accordion body -->
                                <div class="offering_body collapse" id="<?php echo $uid; ?>">

                                    <?php if (!empty($offering['description'])) : ?>
                                        <div class="offering_desc">
                                            <?php echo wp_kses_post($offering['description']); ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($offering['highlights'])) : ?>
                                        <div class="offering_highlights">
                                            <div class="list_label">Highlights:</div>
                                            <ul>
                                                <?php foreach ($offering['highlights'] as $hl) : ?>
                                                    <li><?php echo esc_html($hl['item']); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                    <?php if (!empty($offering['quick_facts'])) : ?>
                                        <div class="offering_facts">
                                            <div class="list_label">Quick Facts</div>
                                            <ul>
                                                <?php foreach ($offering['quick_facts'] as $fact) : ?>
                                                    <li><?php echo esc_html($fact['item']); ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        </div>
                                    <?php endif; ?>

                                </div>
                                <?php endif; ?>

                                <!-- Apply Now button — always visible, flush to bottom -->
                                <a href="<?php echo esc_url($apply_url); ?>" class="offering_apply_btn">
                                    Apply Now
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php else : ?>
                    <!-- ===== FALLBACK HARDCODED CARDS ===== -->

                    <?php
                    $fallback = [
                        ['title' => 'Cash Flow Loan',         'img' => 'cash-flow-loan.jpg',
                         'highlights' => [], 'facts' => [
                            'Term Length: 1–5 Years', '7-day closing',
                            'Min Advance: $50,000', 'Max Advance: $2,000,000',
                            'Annual Financing Fee: 11–16%', 'Pre-Payment & Deferred Payment Options',
                            '3x Months of Payments held in Cash Reserve (*REQUIRED)',
                            'Zero Closing Costs', 'No lien on property',
                            'Property Types: SFR/STR, Multifamily, RV Parks, Mobile Home Parks, Hotels, Self-Storage, Commercial',
                        ]],
                        ['title' => 'Reverse Consolidation',  'img' => 'reverse-consolidation.jpg',
                         'highlights' => ['Up to $17K Commission','Funding $2K – $2M','Up to 12 Months Estimated Term','$6K+ Monthly Revenue','Early Repayment Discount Available'], 'facts' => []],
                        ['title' => 'DSCR',                   'img' => 'dscr.jpg',
                         'highlights' => ['5, 7, 10 and 30 Year Fixed','Single or Portfolio','1.10 Min DSCR','Ratio as Low as 7.00%','Close in 3–4 Weeks','Purchase, Refinance, Cash Out','Up to 75% Cash-Out Refinance','Up to 85% Purchase'], 'facts' => []],
                        ['title' => 'Multi-Units',            'img' => 'multi-units.jpg',          'highlights' => [], 'facts' => []],
                        ['title' => 'Fix &amp; Flips',        'img' => 'fix-flips.jpg',            'highlights' => [], 'facts' => []],
                        ['title' => 'Multi-Family',           'img' => 'multi-family.jpg',         'highlights' => [], 'facts' => []],
                        ['title' => 'Mixed Use',              'img' => 'mixed-use.jpg',            'highlights' => [], 'facts' => []],
                        ['title' => 'Commercial Properties',  'img' => 'commercial-properties.jpg','highlights' => [], 'facts' => []],
                        ['title' => 'Land Loan',              'img' => 'land-loan.jpg',            'highlights' => [], 'facts' => []],
                        ['title' => 'Construction Loan',      'img' => 'construction-loan.jpg',    'highlights' => [], 'facts' => []],
                        ['title' => 'Equity Share',           'img' => 'equity-share.jpg',         'highlights' => [], 'facts' => []],
                        ['title' => 'Church Loans',           'img' => 'church-loans.jpg',         'highlights' => [], 'facts' => []],
                    ];

                    foreach ($fallback as $fi => $card) :
                        $uid      = 'fb_offering_' . $fi;
                        $has_body = !empty($card['highlights']) || !empty($card['facts']);
                    ?>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="offering_card">

                                <div class="offering_image">
                                    <img src="<?php echo $img_path . '/' . $card['img']; ?>" alt="<?php echo strip_tags($card['title']); ?>" />
                                </div>

                                <div class="offering_header">
                                    <div class="offering_title_row">
                                        <div class="offering_icon"></div>
                                        <h3 class="text-white"><?php echo $card['title']; ?></h3>
                                    </div>
                                </div>

                                <?php if ($has_body) : ?>
                                <button class="offering_toggle collapsed"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#<?php echo $uid; ?>"
                                        aria-expanded="false">
                                    <span class="toggle_label_show">Show details</span>
                                    <span class="toggle_label_hide">Hide details</span>
                                    <svg class="toggle_chevron" width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 6l4 4 4-4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>

                                <div class="offering_body collapse" id="<?php echo $uid; ?>">
                                    <?php if (!empty($card['highlights'])) : ?>
                                        <div class="offering_highlights">
                                            <div class="list_label">Highlights:</div>
                                            <ul><?php foreach ($card['highlights'] as $hl) : ?><li><?php echo esc_html($hl); ?></li><?php endforeach; ?></ul>
                                        </div>
                                    <?php endif; ?>
                                    <?php if (!empty($card['facts'])) : ?>
                                        <div class="offering_facts">
                                            <div class="list_label">Quick Facts</div>
                                            <ul><?php foreach ($card['facts'] as $f) : ?><li><?php echo esc_html($f); ?></li><?php endforeach; ?></ul>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php endif; ?>

                                <a href="/contact/" class="offering_apply_btn">
                                    Apply Now
                                    <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>

                            </div>
                        </div>
                    <?php endforeach; ?>

                <?php endif; ?>
            </div>

        </div>
    </div>
</section>

<?php get_footer(); ?>