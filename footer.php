<footer>
    <div class="footer_top">
        <div class="wrapper">
            <div class="container-fluid">
                <!-- Subscribe Row -->
                <div class="row align-items-center footer_subscribe mb-0">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="footer_logo mb-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/global/logo.png" alt="Phoenix Capital Solutions" />
                        </div>
                        <h3 class="subscribe_heading mb-3">Stay Informed</h3>
                        <p class="subscribe_sub mb-0">Subscribe to receive updates from Phoenix Capital Solutions.</p>
                    </div>
                    <div class="col-lg-7">
                        <?php echo do_shortcode('[contact-form-7 id="1229d72" title="Subscribe"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_divider_wrap">
        <div class="wrapper">
            <div class="container-fluid">
                <hr class="footer_divider" />
            </div>
        </div>
    </div>

    <div class="footer_main">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row">

                    <!-- Col 1: Disclosure -->
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <div class="footer_col">
                            <h4 class="footer_col_title">Disclosure</h4>
                            <p class="footer_text">Phoenix Capital Solutions is headquartered in West Palm Beach, Florida, and serves qualified investors across North America, Europe, Asia, and select global markets. Our team maintains international access to institutional banking networks and vetted monetization partners.</p>
                            <div class="footer_hq">
                                <span class="hq_label">Headquarters</span>
                                <a href="https://maps.app.goo.gl/VwJ4V13a2xjBC8Af9" target="_blank" rel="noopener noreferrer">2101 Vista Parkway, Ste 124 West Palm Beach, FL 33411</a>
                            </div>
                        </div>
                    </div>

                    <!-- Col 2: Quick Links -->
                    <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                        <div class="footer_col">
                            <h4 class="footer_col_title">Quick Links</h4>
                            <ul class="footer_links">
                                <?php
                                $menu_items = wp_get_nav_menu_items('quick-links');
                                if ($menu_items) {
                                    foreach ($menu_items as $item) {
                                        echo '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 3: Programs -->
                    <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
                        <div class="footer_col">
                            <h4 class="footer_col_title">Programs</h4>
                            <ul class="footer_links">
                                <?php
                                $menu_items = wp_get_nav_menu_items('programs');
                                if ($menu_items) {
                                    foreach ($menu_items as $item) {
                                        echo '<li><a href="' . $item->url . '">' . $item->title . '</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                    <!-- Col 4: Contact -->
                    <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                        <div class="footer_col">
                            <h4 class="footer_col_title">Contact Us</h4>
                            <div class="footer_contact_list">
                                <div class="footer_contact_item">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                        <path d="M22 6l-10 7L2 6" stroke="#c59b32" stroke-width="1.8" stroke-linecap="round" />
                                    </svg>
                                    <div>
                                        <span class="contact_type">General</span>
                                        <a href="mailto:info@phxcapsolutions.com">info@phxcapsolutions.com</a>
                                    </div>
                                </div>
                                <div class="footer_contact_item">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6A19.79 19.79 0 012.12 4.18 2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 16.92z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                    </svg>
                                    <div>
                                        <span class="contact_type">Phone</span>
                                        <a href="tel:+17542891530">(754) – 289–1530</a>
                                    </div>
                                </div>
                                <div class="footer_contact_item">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 0118 0z" stroke="#c59b32" stroke-width="1.8" stroke-linejoin="round" />
                                        <circle cx="12" cy="10" r="3" stroke="#c59b32" stroke-width="1.8" />
                                    </svg>
                                    <div>
                                        <span class="contact_type">Office</span>
                                        <a href="https://maps.app.goo.gl/VwJ4V13a2xjBC8Af9" target="_blank" rel="noopener noreferrer">2101 Vista Parkway, Ste 124<br>West Palm Beach, FL 33411</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer_bottom">
        <div class="wrapper">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-2 mb-md-0">
                        <p class="copyright">© 2012–<?php echo date('Y'); ?> Phoenix Capital Solutions. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-md-end">
                        <a href="/privacy-policy/">Privacy Policy</a>
                        <span class="divider_dot">·</span>
                        <a href="/terms/">Terms of Use</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button id="backToTop" class="back-to-top" type="button" aria-label="Back to top">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 12V4M4 8l4-4 4 4" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </button>
</footer>

<div id="cookieNotice" class="cookie-notice" role="dialog" aria-live="polite" aria-label="Cookie notice">
    <div class="cookie-notice__inner">
        <div class="cookie-notice__icon">🍪</div>
        <p class="cookie-notice__text">
            <strong>Important Disclaimer</strong>
            The information provided by Phoenix Capital Solutions, Inc. ("we," "us," or "our") on phxcapsolutions.com (the "Site") is for general information purposes only. All information on the Site is provided in good faith, however we make no representation or warranty of any kind, express or implied, regarding the accuracy, adequacy, validity, reliability, availability, or completeness of any information on the Site. UNDER NO CIRCUMSTANCE SHALL WE HAVE ANY LIABILITY TO YOU FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF THE SITE OR RELIANCE ON ANY INFORMATION PROVIDED ON THE SITE. YOUR USE OF THE SITE AND YOUR RELIANCY ON ANY INFORMATION ON THE SITE IS SOLELY AT YOUR OWN RISK.
        </p>
        <button id="cookieAcceptBtn" class="cookie-notice__btn" type="button">Accept</button>
    </div>
</div>

<script>
    (function() {
        var notice = document.getElementById('cookieNotice');
        var cookieBtn = document.getElementById('cookieAcceptBtn');
        var backToTopBtn = document.getElementById('backToTop');

        if (!notice || !cookieBtn) return;

        // Always show — remove this block when done testing
        notice.style.display = '';
        cookieBtn.addEventListener('click', function() {
            notice.style.display = 'none';
        });

        if (!backToTopBtn) return;

        const toggleButton = () => {
            if (window.scrollY > 200) {
                backToTopBtn.classList.add('show');
            } else {
                backToTopBtn.classList.remove('show');
            }
        };

        window.addEventListener('scroll', toggleButton, {
            passive: true
        });
        toggleButton();

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    })();
</script>
<?php wp_footer(); ?>
</body>

</html>