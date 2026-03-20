<?php get_header(); ?>

<main class="internal_page">
    <div class="wrapper">
        <div class="internal_page_box">

            <span class="internal_status">404</span>
            <span class="internal_label">Page Not Found</span>
            <h1 class="internal_title">This Page Doesn't Exist</h1>
            <div class="internal_divider"></div>

            <div class="internal_content">
                <p>The page you are looking for may have been moved, removed, or the URL may be incorrect. Please check the address or return to our homepage.</p>
            </div>

            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn_return_home">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10 12L6 8l4-4" stroke="#fff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Return to Homepage
            </a>

        </div>
    </div>
</main>

<?php get_footer(); ?>