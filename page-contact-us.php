<?php
/*
Template Name: Contact Us Page
*/

get_header();
$img_path = get_template_directory_uri() . '/assets/img/contact_us';
?>

<section class="contact_main">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact_left pe-lg-4">
                        <div class="contact_image">
                            <img loading="lazy" src="<?php echo $img_path; ?>/contact-team.jpg" alt="Phoenix Capital Solutions Team" title="Phoenix Capital Solutions Team" />
                        </div>
                        <div class="contact_hours">
                            <h3 class="text-white mb-3">Operating Hours</h3>
                            <p class="mb-1">Open - Mon-Fri 8a -6p EST</p>
                            <p class="mb-0">Closed - Sat-Sun and Public Holidays</p>
                            <hr class="divider" />
                            <div class="contact_info">
                                <div class="info_item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                        <path d="M22 6l-10 7L2 6" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                    <a href="mailto:info@phxcapsolutions.com">info@phxcapsolutions.com</a>
                                </div>
                                <div class="info_item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                    </svg>
                                    <a href="tel:+17542891530">(754) – 289-1530</a>
                                </div>
                                <div class="info_item">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                        <circle cx="12" cy="10" r="3" stroke="#c59b32" stroke-width="1.8" />
                                    </svg>
                                    <span>2101 Vista Parkway, Ste 124<br>West Palm Beach, FL 33411</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- RIGHT: Forms -->
                <div class="col-lg-8">
                    <div class="contact_right">
                        <h1 class="text-white">Let's connect!</h1>
                        <p class="intro_text mb-4">Please use the form below to get in contact with our team.</p>

                        <!-- Accordion -->
                        <div class="contact_accordion" id="contactForms">

                            <!-- General Inquiries — open by default -->
                            <div class="form_group">
                                <button class="form_toggle" data-bs-toggle="collapse" data-bs-target="#form-general" aria-expanded="true">
                                    <span class="toggle_icon expanded">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2" y="7" width="12" height="2" fill="#ffffff" rx="1" />
                                        </svg>
                                    </span>
                                    <span class="toggle_icon collapsed">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="7" y="2" width="2" height="12" fill="#ffffff" rx="1" />
                                            <rect x="2" y="7" width="12" height="2" fill="#ffffff" rx="1" />
                                        </svg>
                                    </span>
                                    General Inquiries
                                </button>
                                <div class="form_body collapse show" id="form-general" data-bs-parent="#contactForms">
                                    <?= do_shortcode('[contact-form-7 id="fbaaa63" title="General Inquiries"]') ?>
                                </div>
                            </div>

                            <!-- Broker / Deal Inquiry — collapsed by default -->
                            <div class="form_group">
                                <button class="form_toggle collapsed" data-bs-toggle="collapse" data-bs-target="#form-broker" aria-expanded="false">
                                    <span class="toggle_icon expanded">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="2" y="7" width="12" height="2" fill="#ffffff" rx="1" />
                                        </svg>
                                    </span>
                                    <span class="toggle_icon collapsed">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="7" y="2" width="2" height="12" fill="#ffffff" rx="1" />
                                            <rect x="2" y="7" width="12" height="2" fill="#ffffff" rx="1" />
                                        </svg>
                                    </span>
                                    Broker / Deal Inquiry
                                </button>
                                <div class="form_body collapse" id="form-broker" data-bs-parent="#contactForms">
                                    <?= do_shortcode('[contact-form-7 id="9f58876" title="Broker Deal/Inquiry"]') ?>
                                </div>
                            </div>

                        </div><!-- end accordion -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>