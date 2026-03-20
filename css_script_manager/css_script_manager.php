<?php

/**
 * CSS & Script Manager — Phoenix Capital Solutions
 * Updated to enqueue shared components.css on all pages.
 */
function exam_enqueue_assets()
{
    $theme_uri = get_template_directory_uri();
    $is_homepage = is_front_page() || is_home();
    $font_awesome_kit_code = defined('PHX_FONT_AWESOME_KIT_CODE') ? (string) constant('PHX_FONT_AWESOME_KIT_CODE') : '';

    // ── Core (always loaded) ──────────────────────────────────
    wp_enqueue_style('bootstrap',       $theme_uri . '/inc/css/bootstrap.min.css',   array(),              null);
    wp_enqueue_style('global',          $theme_uri . '/inc/css/global.css',           array('bootstrap'),   null);
    wp_enqueue_style('components',      $theme_uri . '/inc/css/components.css',       array('global'),      null);
    wp_enqueue_style('internal-page',   $theme_uri . '/inc/css/internal_page.css',    array('components'),  null);

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap',   $theme_uri . '/inc/js/bootstrap.bundle.min.js', array('jquery'),  null, true);
    wp_register_script('owl-carousel', $theme_uri . '/inc/js/owl.carousel.min.js', array('jquery'), null, true);
    wp_register_style('owl-carousel',  $theme_uri . '/inc/css/owl.carousel.min.css', array(), null);
    wp_register_style('owl-theme',     $theme_uri . '/inc/css/owl.theme.default.css', array('owl-carousel'), null);
    wp_enqueue_script('functions',   $theme_uri . '/inc/js/functions.js', array('jquery', 'owl-carousel'), null, true);

    if (!empty($font_awesome_kit_code)) {
        wp_enqueue_script('font-awesome-kit', 'https://kit.fontawesome.com/' . $font_awesome_kit_code . '.js', array(), null, false);
    }

    // ── Page-specific styles ──────────────────────────────────
    if ($is_homepage) {
        wp_enqueue_style('owl-carousel');
        wp_enqueue_style('owl-theme');
        wp_enqueue_script('owl-carousel');
        wp_enqueue_style('new-homepage',  $theme_uri . '/inc/css/new_homepage.css',       array('owl-theme', 'components'), null);
        wp_enqueue_script('homepage',     $theme_uri . '/inc/js/homepage.js',             array('jquery', 'owl-carousel'), null, true);
    } elseif (is_page_template('page-gift.php')) {
        wp_enqueue_style('gift',          $theme_uri . '/inc/css/gift.css',               array('components'), null);
    } elseif (is_page_template('page-about-us.php')) {
        wp_enqueue_style('about-us',      $theme_uri . '/inc/css/about_us.css',           array('components'), null);
    } elseif (is_page_template('page-carr.php')) {
        wp_enqueue_style('carr',          $theme_uri . '/inc/css/carr.css',               array('components'), null);
    } elseif (is_page_template('page-contact-us.php')) {
        wp_enqueue_style('contact',       $theme_uri . '/inc/css/contact_us.css',         array('components'), null);
    } elseif (is_page_template('page-security-and- compliance.php')) {
        wp_enqueue_style('security-compliance', $theme_uri . '/inc/css/security-and-compliance.css', array('components'), null);
        wp_enqueue_style('stay-informed', $theme_uri . '/inc/css/stay-informed.css', array('components'), null);
    } elseif (is_page_template('page-fuel.php')) {
        wp_enqueue_style('fuel',          $theme_uri . '/inc/css/fuel.css',               array('components'), null);
    } elseif (is_page_template('page-seed.php')) {
        wp_enqueue_style('seed',          $theme_uri . '/inc/css/seed.css',               array('components'), null);
    } elseif (
        is_post_type_archive('services') ||
        is_post_type_archive('service') ||
        is_singular('services') ||
        is_singular('service')
    ) {
        wp_enqueue_style('services',      $theme_uri . '/inc/css/services.css',           array('components'), null);
        if (is_singular('services') || is_singular('service')) {
            wp_enqueue_style('single-services', $theme_uri . '/inc/css/single_services.css', array('services'), null);
        }
    } elseif (is_page_template('page-loan-application.php')) {
        wp_enqueue_style('loan-application', $theme_uri . '/inc/css/loan_application.css', array('components'), null);
    } elseif (is_page_template('page-project-financing.php')) {
        wp_enqueue_style('project-financing', $theme_uri . '/inc/css/project_financing.css', array('components'), null);
    } elseif (is_post_type_archive('project') || is_singular('project')) {
        wp_enqueue_style('archive-project', $theme_uri . '/inc/css/archive_project.css', array('components'), null);
        if (is_singular('project')) {
            wp_enqueue_style('single-project', $theme_uri . '/inc/css/single_project.css', array('global'), null);
        }
    } elseif (is_single() && get_post_type() === 'post') {
        wp_enqueue_style('single-post',   $theme_uri . '/inc/css/single_post.css',        array('components'), null);
    } elseif (is_page_template('page-resources.php') || is_home() || is_archive()) {
        wp_enqueue_style('resources',     $theme_uri . '/inc/css/resources.css',           array('components'), null);
    } elseif (is_page_template('page-terms-and-condition.php')) {
        wp_enqueue_style('terms-and-conditions', $theme_uri . '/inc/css/terms_and_conditions.css', array('components'), null);
    } elseif (is_page_template('page-disc.php')) {
        wp_enqueue_style('disc',          $theme_uri . '/inc/css/disc.css',                array('components'), null);
    } elseif (is_page_template('page-privacy-policy.php') || is_page('privacy-policy')) {
        wp_enqueue_style('privacy-policy', $theme_uri . '/inc/css/privacy_policy.css',    array('components'), null);
    } elseif (is_page_template('page-accessibility.php') || is_page('accessibility')) {
        wp_enqueue_style('accessibility', $theme_uri . '/inc/css/accessibility.css',       array('components'), null);
    } elseif (is_page_template('page-disclosure.php')) {
        wp_enqueue_style('disclosure',    $theme_uri . '/inc/css/disclosure.css',          array('components'), null);
    }
}
add_action('wp_enqueue_scripts', 'exam_enqueue_assets');
