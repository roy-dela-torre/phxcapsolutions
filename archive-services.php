<?php
/*
Template Name: Services Page
*/

get_header();
$img_path = get_template_directory_uri() . '/assets/img/services';
?>

<!-- ========== HERO ========== -->
<section class="services_hero">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="program_label">Let's work together</div>
                    <h1 class="text-white">We ensure only the best consulting services for our clients</h1>
                </div>
                <div class="col-lg-6">
                    <p class="hero_desc">Phoenix Capital Solutions provides institutionally aligned capital programs designed to help qualified investors, developers, and asset holders access structured funding, monetization pathways, and long-term capital expansion strategies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== SERVICE CARDS ========== -->
<section class="services_cards">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">

                <div class="col-lg-6 mb-4">
                    <div class="service_card">
                        <div class="service_image">
                            <img loading="lazy" src="<?php echo $img_path; ?>/finance-management.jpg" alt="Finance Management" title="Finance Management" />
                        </div>
                        <div class="service_content">
                            <h3 class="text-white">Finance management</h3>
                            <p>Structured capital formation and institutional-grade instrument-based monetization for qualified investors seeking long-term capital expansion.</p>
                            <a href="/programs/" class="service_btn">Learn more <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="service_card">
                        <div class="service_image">
                            <img loading="lazy" src="<?php echo $img_path; ?>/business-consulting.jpg" alt="Business Consulting" title="Business Consulting" />
                        </div>
                        <div class="service_content">
                            <h3 class="text-white">Business consulting</h3>
                            <p>Compliance-driven advisory services that align your capital deployment strategy with institutional standards and global regulatory requirements.</p>
                            <a href="/contact/" class="service_btn">Learn more <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="service_card">
                        <div class="service_image">
                            <img loading="lazy" src="<?php echo $img_path; ?>/tax-consultancy.jpg" alt="Tax Consultancy" title="Tax Consultancy" />
                        </div>
                        <div class="service_content">
                            <h3 class="text-white">Tax consultancy</h3>
                            <p>Strategic guidance on capital deployment plans, reinvestment structures, and compliance-aligned financial planning for institutional participants.</p>
                            <a href="/contact/" class="service_btn">Learn more <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="service_card">
                        <div class="service_image">
                            <img loading="lazy" src="<?php echo $img_path; ?>/capital-markets.jpg" alt="Capital Markets" title="Capital Markets" />
                        </div>
                        <div class="service_content">
                            <h3 class="text-white">Capital markets</h3>
                            <p>Access to institutional capital pathways, banking instrument monetization, and structured equity and lending opportunities across global markets.</p>
                            <a href="/programs/" class="service_btn">Learn more <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- ========== CTA BANNER ========== -->
<section class="services_cta_banner">
    <div class="cta_image_wrap">
        <img loading="lazy" src="<?php echo $img_path; ?>/services-cta.jpg" alt="Business solutions" title="Business solutions" />
        <div class="cta_overlay"></div>
    </div>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="cta_content">
                        <div class="cta_tags">
                            <span class="cta_tag_pill">Best solutions</span>
                            <span class="cta_tag_text">Let's work on your project together</span>
                        </div>
                        <h2 class="text-white">Business solutions made with purpose</h2>
                        <p>Our institutionally aligned programs deliver structured capital access, compliance-driven funding flows, and long-term financial expansion strategies for qualified participants.</p>
                        <a href="/contact/" class="cta_btn">Get started today</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========== THREE COLUMNS ========== -->
<section class="services_three_col">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row text-center">

                <div class="col-lg-4 mb-4">
                    <div class="three_col_item">
                        <h3 class="text-white">Structured Capital Formation</h3>
                        <p>Access institutional-grade banking instruments and monetization pathways designed for qualified investors seeking scalable capital expansion.</p>
                        <a href="/programs/seed/" class="three_col_link">Get started today <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="three_col_item">
                        <h3 class="text-white">Compliance-Driven Advisory</h3>
                        <p>Navigate complex regulatory requirements with institutional compliance oversight, KYC/AML processes, and structured documentation protocols.</p>
                        <a href="/security-and-compliance/" class="three_col_link">Get started today <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="three_col_item">
                        <h3 class="text-white">Project Financing Solutions</h3>
                        <p>Secure substantial funding for large-scale domestic and international development projects through our compliance-forward financing programs.</p>
                        <a href="/project-financing/" class="three_col_link">Get started today <svg width="14" height="14" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>