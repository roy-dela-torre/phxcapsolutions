<?php
if (!defined('ABSPATH')) {
    exit;
}

$theme_uri = get_template_directory_uri();
?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-J6Y57GS1JK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-J6Y57GS1JK');
    </script> -->
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="sticky-top">
        <div class="wrapper">
            <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= get_home_url(); ?>">
                        <img src="<?php echo esc_url($theme_uri . '/assets/img/global/logo.png'); ?>" alt="Phoenix Capital Solutions Logo" title="Phoenix Capital Solutions Logo">
                    </a>
                    <button id="primary-nav-toggle-btn" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary', // Use the registered location
                            'menu_class'     => 'navbar-nav', // The UL class
                            'container'      => false,
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'walker'         => new class extends Walker_Nav_Menu {
                                function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
                                {

                                    if ($item->title == 'Contact Us') {
                                        return;
                                    }
                                    $classes = empty($item->classes) ? array() : (array) $item->classes;
                                    $classes[] = 'nav-item'; // Bootstrap LI class

                                    $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
                                    $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

                                    $output .= '<li' . $class_names . '>';

                                    $atts = array();
                                    $atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
                                    $atts['target'] = ! empty($item->target)     ? $item->target     : '';
                                    $atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
                                    $atts['href']   = ! empty($item->url)        ? $item->url        : '';
                                    $atts['class']  = 'nav-link'; // Bootstrap A class

                                    $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);
                                    $attributes = '';
                                    foreach ($atts as $attr => $value) {
                                        if (! empty($value)) {
                                            $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                                            $attributes .= ' ' . $attr . '="' . $value . '"';
                                        }
                                    }

                                    $title = apply_filters('the_title', $item->title, $item->ID);
                                    $title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

                                    // Normalize $args to safely support both object and array forms.
                                    $before      = is_object($args) ? ($args->before ?? '')      : (is_array($args) && isset($args['before']) ? $args['before'] : '');
                                    $after       = is_object($args) ? ($args->after ?? '')       : (is_array($args) && isset($args['after']) ? $args['after'] : '');
                                    $link_before = is_object($args) ? ($args->link_before ?? '') : (is_array($args) && isset($args['link_before']) ? $args['link_before'] : '');
                                    $link_after  = is_object($args) ? ($args->link_after ?? '')  : (is_array($args) && isset($args['link_after']) ? $args['link_after'] : '');

                                    $item_output = $before;
                                    $item_output .= '<a' . $attributes . '>';
                                    $item_output .= $link_before . $title . $link_after;
                                    $item_output .= '</a>';
                                    $item_output .= $after;

                                    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
                                }
                                function end_el(&$output, $item, $depth = 0, $args = null)
                                {
                                    $output .= "</li>\n";
                                }
                            }
                        ));
                        ?>
                    </div>
                    <a href="<?= get_home_url() ?>/contact-us/" target="_blank" rel="noopener noreferrer" class="contact_us yellow_btn">Contact Us</a>
                </div>
            </nav>
        </div>
    </header>