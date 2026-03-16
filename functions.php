<?php
if (!defined('ABSPATH')) {
    exit;
}

if (! function_exists('theme_setup')) :
    function theme_setup_setup()
    {
        add_theme_support('post-thumbnails');
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));
        add_theme_support('woocommerce');
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'theme_setup'),
            'navigation-links' => __('Navigation links', 'theme_setup'),
            'quick-links' => __('Quick Links', 'theme_setup'),
            'programs' => __('Programs', 'theme_setup'),
        ));
    }
    add_action('after_setup_theme', 'theme_setup_setup');
endif;

function remove_br_from_cf7_form($form)
{

    $form = str_replace('<br>', '', $form);
    $form = str_replace('<br />', '', $form);
    return $form;
}
add_filter('wpcf7_form_elements', 'remove_br_from_cf7_form');

require_once get_template_directory() . '/css_script_manager/css_script_manager.php';
