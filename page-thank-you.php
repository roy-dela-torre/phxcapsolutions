<?php
/*
Template Name: Thank You
*/
get_header();
?>

<main class="internal_page">
    <div class="wrapper">
        <div class="internal_page_box">

            <span class="internal_label">Submission Received</span>
            <h1 class="internal_title">Thank You</h1>
            <div class="internal_divider"></div>

            <div class="internal_content">
                <p>Your submission has been received. A member of our team will review your information and be in touch with you shortly.</p>
                <p>We appreciate your interest in Phoenix Capital Solutions.</p>
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