<?php get_header();
$home_url = get_home_url();
//Template Name: New Homepage
?>
<section class="banner">
    <video class="video-bg" autoplay="" loop="true" muted="" style="display: inline;" onloadedmetadata="this.currentTime = 0;" ontimeupdate="if(this.currentTime > 7) this.currentTime = 0;">
        <source src="" type="video/mp4">
        <source src="<?php echo esc_url(get_field('hero_banner_video_background')); ?>" type="video/mp4">
    </video>
    <div class="video_overlay"></div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="content pe-lg-5">
                        <?php
                        if (get_field('hero_banner_title')) {
                        ?>
                            <h1 class="text-white"><?php the_field('hero_banner_title'); ?></h1>
                        <?php
                        }
                        ?>
                        <?php
                        if (get_field('hero_banner_description')) {
                        ?>
                            <?php the_field('hero_banner_description'); ?>
                        <?php
                        }
                        ?>
                        <?php
                        $button = get_field('hero_banner_button');
                        if ($button && isset($button['url'])) {
                        ?>
                            <a href="<?php echo esc_url($button['url']); ?>" target="<?php echo isset($button['target']) ? esc_attr($button['target']) : '_blank'; ?>" rel="noopener noreferrer" class="yellow_btn"><?php echo isset($button['title']) ? esc_html($button['title']) : 'See your numbers'; ?></a>
                        <?php
                        } else {
                        ?>
                            <a href="<?php echo esc_url($home_url . '/'); ?>" target="_blank" rel="noopener noreferrer" class="yellow_btn">See your numbers</a>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $cards = get_field('hero_banner_card_content_list');
                if ($cards) {
                    foreach ($cards as $card) {
                ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="content">
                                <h3 class="text-white"><?php echo isset($card['hero_banner_content_list_title']) ? esc_html($card['hero_banner_content_list_title']) : ''; ?></h3>
                                <?php echo isset($card['hero_banner_content_list_description']) ? wp_kses_post($card['hero_banner_content_list_description']) : ''; ?>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="we_handle_all_the_complexity">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header mx-auto">
                        <?php
                        if (get_field('we_handle_all_title')) {
                        ?>
                            <h2 class="text-white text-center"><?= the_field('we_handle_all_title') ?></h2>
                        <?php
                        }
                        if (get_field('we_handle_all_description')) {
                            echo get_field('we_handle_all_description');
                        }
                        ?>
                    </div>
                </div>
                <?php
                $cards = get_field('we_handle_all_card_content_list');
                if ($cards) {
                    foreach ($cards as $card) {
                ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="content">
                                <?php if (!empty($card['we_handle_all_card_content_list_small_text'])): ?>
                                    <span class="small_text"><?php echo esc_html($card['we_handle_all_card_content_list_small_text']); ?></span>
                                <?php endif; ?>
                                <?php if (!empty($card['we_handle_all_card_content_list_title'])): ?>
                                    <h3 class="text-white"><?php echo esc_html($card['we_handle_all_card_content_list_title']); ?></h3>
                                <?php endif; ?>
                                <?php if (!empty($card['we_handle_all_card_content_list_description'])): ?>
                                    <p class="text-white mb-0"><?php echo wp_kses_post($card['we_handle_all_card_content_list_description']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section class="traditional_financing pb-0">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-white text-center mb-5">Traditional vs. <span class="text-gold">Phoenix</span></h2>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="comparison_table">
                        <div class="table_header">
                            <div class="col_factor"></div>
                            <div class="col_traditional">Traditional</div>
                            <div class="col_phoenix text-gold">Phoenix</div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Initial Capital Required</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                35% Down Payment
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                10% Capital Commitment
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Construction Coverage</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                You manage, seek other funding
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Up to 7 years, interest-only
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Interest Rate</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                Variable, market-dependent
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                5.5% Fixed, 20–30 years
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Debt Service During Construction</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                Begins immediately
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Begins after stabilization
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Your Equity at Stabilization</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                10–20%
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                65%
                            </div>
                        </div>
                        <div class="table_row">
                            <div class="col_factor">Admin Burden</div>
                            <div class="col_traditional">
                                <svg class="icon_x" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 2L12 12M12 2L2 12" stroke="#e05555" stroke-width="2" stroke-linecap="round" />
                                </svg>
                                You handle complexity
                            </div>
                            <div class="col_phoenix">
                                <svg class="icon_check" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 7L5.5 10.5L12 4" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                Phoenix handles it
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="commercial_project">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header">
                        <h2 class="text-center mb-4 text-white">Commercial Project Eligibility & No-Guarantee Financing</h2>
                        <p class="text-white">Each program is designed with clear timelines, eligibility requirements, and compliance protections.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content">
                        <h3 class="text-white">
                            <svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7.83325 9.79167L9.19819 9.94332C13.9937 10.4762 18.8171 9.21987 22.7434 6.41538L23.4999 5.875L24.2564 6.41538C28.1827 9.21987 33.0061 10.4762 37.8016 9.94332L39.1666 9.79167V23.6091C39.1666 29.5432 35.8139 34.968 30.5062 37.6217L23.4999 41.125L16.4936 37.6217C11.186 34.968 7.83325 29.5432 7.83325 23.6091V9.79167Z" stroke="#CDA03E" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            SEED
                        </h3>
                        <p class="text-white">A strategic program designed to transform controlled liquidity into large-scale banking instruments for monetization and long-term capital expansion.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content">
                        <h3 class="text-white">
                            <svg width="44" height="43" viewBox="0 0 44 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.2193 34.3463H5.88492C5.59924 34.3406 5.32009 34.2618 5.07524 34.1178C4.83039 33.9739 4.62838 33.7698 4.48932 33.5258C4.35026 33.2819 4.27899 33.0066 4.2826 32.7274C4.28622 32.4482 4.36459 32.1747 4.50992 31.9343L10.0787 22.7229" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                                <path d="M27.5 34.3463H38.0875C38.3732 34.3405 38.6523 34.2617 38.8972 34.1178C39.142 33.9738 39.344 33.7697 39.4831 33.5258C39.6222 33.2818 39.6934 33.0066 39.6898 32.7273C39.6862 32.4481 39.6078 32.1747 39.4625 31.9343L32.5875 20.6064" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                                <path d="M13.3374 17.2874L20.6249 5.29444C20.7708 5.05648 20.9774 4.85953 21.2244 4.72278C21.4714 4.58604 21.7504 4.51416 22.0343 4.51416C22.3182 4.51416 22.5972 4.58604 22.8442 4.72278C23.0912 4.85953 23.2977 5.05648 23.4437 5.29444L28.9437 14.4118" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                                <path d="M31.625 30.9062L27.6031 34.2656C27.5954 34.2731 27.5893 34.282 27.5852 34.2918C27.581 34.3016 27.5789 34.3121 27.5789 34.3227C27.5789 34.3333 27.581 34.3439 27.5852 34.3537C27.5893 34.3635 27.5954 34.3724 27.6031 34.3798L31.625 38.485" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                                <path d="M11.4057 27.8223L10.065 22.8034C10.0619 22.7932 10.0567 22.7838 10.0498 22.7756C10.043 22.7674 10.0345 22.7606 10.0249 22.7556C10.0153 22.7506 10.0048 22.7475 9.99401 22.7465C9.9832 22.7454 9.9723 22.7465 9.96191 22.7496L4.46191 24.4831" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                                <path d="M23.6982 13.1351L28.9232 14.4386L30.0507 8.78809" stroke="#CDA03E" stroke-width="5" stroke-linecap="round" />
                            </svg>
                            C.A.R.R
                        </h3>
                        <p class="text-white">The C.A.R.R. Program is designed for qualified hard asset owners seeking structured pathways to acquire capital, generate recurring revenue cycles, and reinvest strategically under strict compliance standards.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="content">
                        <h3 class="text-white">
                            <svg width="27" height="40" viewBox="0 0 27 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.7587 39.9051C2.86376 39.9688 2.98164 40.0001 3.09823 40.0001C3.26351 40.0001 3.42623 39.9376 3.55051 39.8176L26.7181 17.2888C26.9013 17.1101 26.9577 16.8413 26.8577 16.6076C26.7591 16.3738 26.5246 16.2213 26.2658 16.2213H18.691L23.1844 0.796328C23.2651 0.520078 23.1421 0.225078 22.8859 0.0825777C22.6296 -0.0599223 22.3067 -0.0149223 22.1043 0.193828L0.176979 22.6651C0.000166464 22.8463 -0.0498024 23.1126 0.0526976 23.3426C0.152635 23.5726 0.384541 23.7213 0.640791 23.7213H7.94263L2.49348 39.1726C2.3961 39.4476 2.50629 39.7513 2.7587 39.9051Z" fill="#CDA03E" />
                            </svg>
                            F.U.E.L
                        </h3>
                        <p class="text-white">The F.U.E.L. Program integrates the core strengths of the C.A.R.R. and D.I.S.C. programs, creating a hybrid, institutionally aligned pathway for accelerated capital formation and compliant financial expansion.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4 offset-lg-0 d-flex justify-content-lg-end">
                    <div class="content w-100">
                        <h3 class="text-white">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 4L4 10v12c0 9.941 6.928 18.21 16 20 9.072-1.79 16-10.059 16-20V10L20 4z" stroke="#CDA03E" stroke-width="2.5" stroke-linejoin="round" />
                                <path d="M13 20l5 5 9-9" stroke="#CDA03E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            G.I.F.T
                        </h3>
                        <p class="text-white">The G.I.F.T. Program — Grants and Investments for Future Transformation — channels a portion of Phoenix Capital's monetization profits into high-impact grants and equity investments that generate both social returns and financial yields.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="content">
                        <h3 class="text-white">
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 20h28M20 6l14 14-14 14" stroke="#CDA03E" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="20" cy="20" r="17" stroke="#CDA03E" stroke-width="2.5" />
                            </svg>
                            Buy & Sell
                        </h3>
                        <p class="text-white">The Buy & Sell Program provides qualified participants with structured access to institutional-grade asset acquisition and disposition strategies, enabling capital recycling and portfolio optimization within a compliant framework.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="how_phoenix_scales bg-black">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-center text-white mb-0">How Phoenix <span>Scales</span> Your Portfolio</h2>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="stat-card">
                        <div class="card-label">Scenario 01</div>
                        <h3 class="text-white">Single $100M Project</h3>
                        <div class="data-rows">
                            <div class="data-row">
                                <span class="label">Year 10 Value</span>
                                <span class="value">$244.4M</span>
                            </div>
                            <div class="data-row">
                                <span class="label">Traditional Profit</span>
                                <span class="value">$31.6M</span>
                            </div>
                            <div class="data-row">
                                <span class="label">Phoenix Profit</span>
                                <span class="value">$76.9M</span>
                            </div>
                        </div>
                        <div class="result_highlight">
                            <span class="result_label">Difference</span>
                            <span class="result_value">+$45.3M</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="stat-card">
                        <div class="card-label">Scenario 02</div>
                        <h3 class="text-white">$300M Portfolio</h3>
                        <div class="comparison-rows">
                            <div class="comparison-row">
                                <span class="badge badge-traditional">Traditional</span>
                                <span class="comp-text">3 deals possible with $100M capital</span>
                            </div>
                            <div class="comparison-row phoenix-row">
                                <span class="badge badge-phoenix">Phoenix</span>
                                <span class="comp-text">10 deals possible with same $100M capital</span>
                            </div>
                        </div>
                        <div class="result_highlight">
                            <span class="result_label">Additional Deals</span>
                            <span class="result_value">+7 deals</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="stat-card">
                        <div class="card-label">Scenario 03</div>
                        <h3 class="text-white">Generational Wealth</h3>
                        <div class="data-rows">
                            <div class="data-row">
                                <span class="label">Traditional Equity</span>
                                <span class="value">$60M</span>
                            </div>
                            <div class="data-row">
                                <span class="label">Phoenix Equity</span>
                                <span class="value text-gold">$650M+</span>
                            </div>
                        </div>
                        <div class="result_highlight">
                            <span class="result_label">Difference</span>
                            <span class="result_value">$590M+</span>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="bottom_text">
                        <p class="text-center text-white"><i><b>That <span>$250M difference</span> isn't a financial metric — it's generational wealth creation.</b></i></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section class="our_5_point_project">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="header">
                        <h2 class="text-white mb-0">Our 5-Point Project Assessment</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="card-front">
                            <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 2C10.582 2 7 5.582 7 10c0 6.627 8 18 8 18s8-11.373 8-18c0-4.418-3.582-8-8-8z" stroke="#c59b32" stroke-width="2" stroke-linejoin="round" />
                                <circle cx="15" cy="10" r="3" stroke="#c59b32" stroke-width="2" />
                            </svg>
                            <h3 class="text-white mb-0">Project Location</h3>
                        </div>
                        <div class="card-back">
                            <h3>Project Location</h3>
                            <p><strong>"Is it in a prime, high-growth area?"</strong></p>
                            <p><i>Why:</i> Strong locations = strong returns</p>
                            <p>Your Job: Validate the market opportunity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="card-front">
                            <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <ellipse cx="15" cy="8" rx="8" ry="3" stroke="#c59b32" stroke-width="2" />
                                <path d="M7 8v5c0 1.657 3.582 3 8 3s8-1.343 8-3V8" stroke="#c59b32" stroke-width="2" />
                                <path d="M7 13v5c0 1.657 3.582 3 8 3s8-1.343 8-3v-5" stroke="#c59b32" stroke-width="2" />
                            </svg>
                            <h3 class="text-white mb-0">Funding Amount</h3>
                        </div>
                        <div class="card-back">
                            <h3>Funding Amount</h3>
                            <p><strong>"Is the requested funding sufficient?"</strong></p>
                            <p><i>Why:</i> Incomplete projects = dead money</p>
                            <p>Your Job: Confirm construction budget is realistic</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="card-front">
                            <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="4" y="10" width="10" height="18" stroke="#c59b32" stroke-width="2" stroke-linejoin="round" />
                                <path d="M14 16h8V28H14" stroke="#c59b32" stroke-width="2" stroke-linejoin="round" />
                                <path d="M9 4l5 6H4L9 4z" stroke="#c59b32" stroke-width="2" stroke-linejoin="round" />
                                <rect x="7" y="18" width="3" height="3" stroke="#c59b32" stroke-width="1.2" />
                                <rect x="17" y="20" width="3" height="3" stroke="#c59b32" stroke-width="1.2" />
                            </svg>
                            <h3 class="text-white mb-0">Project Type</h3>
                        </div>
                        <div class="card-back">
                            <h3>Project Type</h3>
                            <p><strong>"Commercial, residential, or mixed-use?"</strong></p>
                            <p><i>Why:</i> We know how to value these</p>
                            <p>Your Job: Speak to why this asset class works</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="card-front">
                            <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 3L5 7v8c0 5.523 4.477 10 10 10s10-4.477 10-10V7L15 3z" stroke="#c59b32" stroke-width="2" stroke-linejoin="round" />
                                <path d="M10.5 15l3 3 6-6" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <h3 class="text-white mb-0">Collateral</h3>
                        </div>
                        <div class="card-back">
                            <h3>Collateral</h3>
                            <p><strong>"What hard assets back this deal?"</strong></p>
                            <p><i>Why:</i> Asset-backed = lower risk</p>
                            <p>Your Job: Document the collateral value</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="content">
                        <div class="card-front">
                            <svg width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4 24h22" stroke="#c59b32" stroke-width="2" stroke-linecap="round" />
                                <path d="M4 24V6" stroke="#c59b32" stroke-width="2" stroke-linecap="round" />
                                <path d="M7 18l5-5 4 3 7-8" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="23" cy="8" r="2" stroke="#c59b32" stroke-width="2" />
                            </svg>
                            <h3 class="text-white mb-0">Projected NOI</h3>
                        </div>
                        <div class="card-back">
                            <h3>Projected NOI</h3>
                            <p><strong>"Will the project cover debt 3 years post-stabilization?"</strong></p>
                            <p><i>Why:</i> Sustainability = long-term profit</p>
                            <p>Your Job: Show how the numbers work</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="what_we_dont_ask">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header">
                        <h2 class="text-white mb-4">What We Don't Ask For</h2>
                        <p class="text-white mb-0">We evaluate your project, not your balance sheet. That's partnership.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content">
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Personal guarantees</p>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Prepayment penalties</p>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Balloon payments</p>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Dilution of your equity through capital raises</p>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Multiple lenders or bridge loans</p>
                        </div>
                        <div class="list-item">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="8" cy="8" r="7" stroke="#c59b32" stroke-width="1.5" />
                                    <path d="M5.5 5.5L10.5 10.5M10.5 5.5L5.5 10.5" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                            </div>
                            <p class="text-white mb-0">Your personal assets or credit scores</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>