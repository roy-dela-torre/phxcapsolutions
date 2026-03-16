<?php
function exam_enqueue_assets()
{
    $theme_uri = get_template_directory_uri();
    $is_homepage = is_front_page() || is_home();
    $font_awesome_kit_code = defined('PHX_FONT_AWESOME_KIT_CODE') ? (string) constant('PHX_FONT_AWESOME_KIT_CODE') : '';

    wp_enqueue_style('bootstrap', $theme_uri . '/inc/css/bootstrap.min.css', array(), null);
    wp_enqueue_style('global', $theme_uri . '/inc/css/global.css', array('bootstrap'), null);
    wp_enqueue_script('functions', $theme_uri . '/inc/js/functions.js', array('jquery', 'owl-carousel', 'aos'), null, true);

    if (!empty($font_awesome_kit_code)) {
        wp_enqueue_script('font-awesome-kit', 'https://kit.fontawesome.com/' . $font_awesome_kit_code . '.js', array(), null, false);
    }

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', $theme_uri . '/inc/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    if ($is_homepage) {
        wp_enqueue_style('new-homepage', $theme_uri . '/inc/css/new_homepage.css', array('global'), null);
        wp_enqueue_script('homepage', $theme_uri . '/inc/js/homepage.js', array('jquery'), null, true);
        wp_enqueue_script('functions', $theme_uri . '/inc/js/functions.js', array('jquery', 'owl-carousel', 'aos'), null, true);
    } elseif (is_page_template('page-gift.php')) {
        wp_enqueue_style('gift', $theme_uri . '/inc/css/gift.css', array('global'), null);
    } elseif (is_page('about-us') || is_page_template('page-about-us.php')) {
        wp_enqueue_style('about-us', $theme_uri . '/inc/css/about_us.css', array('global'), null);
    } elseif (is_page_template('page-carr.php')) {
        wp_enqueue_style('carr', $theme_uri . '/inc/css/carr.css', array('global'), null);
    } elseif (is_page('contact-us') || is_page_template('page-contact.php')) {
        wp_enqueue_style('contact', $theme_uri . '/inc/css/contact_us.css', array('global'), null);
    } elseif (is_page('security-and-compliance-framework')) {
        wp_enqueue_style('security-compliance', $theme_uri . '/inc/css/security-and-compliance.css', array('global'), null);
    } elseif (is_page_template('page-fuel.php')) {
        wp_enqueue_style('fuel', $theme_uri . '/inc/css/fuel.css', array('global'), null);
    } elseif (is_page_template('page-seed.php')) {
        wp_enqueue_style('seed', $theme_uri . '/inc/css/seed.css', array('global'), null);
    } elseif (is_page_template('page-services.php') || is_page_template('archive-services.php') || is_post_type_archive('services') || is_post_type_archive('service') || is_singular('services') || is_singular('service')) {
        wp_enqueue_style('services', $theme_uri . '/inc/css/services.css', array('global'), null);
        if (is_singular('services') || is_singular('service')) {
            wp_enqueue_style('single-services', $theme_uri . '/inc/css/single_services.css', array('services'), null);
        }
    } elseif (is_page_template('page-loan-application.php')) {
        wp_enqueue_style('loan-application', $theme_uri . '/inc/css/loan_application.css', array('global'), null);
    } elseif (is_page_template('page-project-financing.php')) {
        wp_enqueue_style('project-financing', $theme_uri . '/inc/css/project_financing.css', array('global'), null);
    } elseif (is_post_type_archive('project') || is_singular('project')) {
        wp_enqueue_style('archive-project', $theme_uri . '/inc/css/archive_project.css', array('global'), null);
        if (is_singular('project')) {
            wp_enqueue_style('single-project', $theme_uri . '/inc/css/single_project.css', array('global'), null);
        }
    } elseif (is_single() && get_post_type() === 'post') {
        wp_enqueue_style('single-post', $theme_uri . '/inc/css/single_post.css', array('global'), null);
    } elseif (is_page_template('page-resources.php') || is_home() || is_archive()) {
        wp_enqueue_style('resources', $theme_uri . '/inc/css/resources.css', array('global'), null);
    }elseif(is_page('privacy-policy')){
        wp_enqueue_style('privacy-policy', $theme_uri . '/inc/css/privacy_policy.css', array('global'), null);
    }
}
add_action('wp_enqueue_scripts', 'exam_enqueue_assets');
