<?php
/**
 * Reusable Hero Section Component
 * Two-column hero: content left, image right. Matches all program page hero layouts.
 *
 * Usage:
 * get_template_part('template/components/hero', null, [
 *     'section_class' => 'carr_hero',            // CSS section class (required)
 *     'label'         => 'Program Full Name',     // small gold label above h1
 *     'title'         => 'Main Hero Heading',     // h1 text (required)
 *     'text'          => 'Intro paragraph.',      // body text
 *     'btn_primary'   => [                        // primary CTA button
 *         'text' => 'Request Consultation',
 *         'url'  => '#intake_form',
 *         'class'=> 'btn_gold',
 *     ],
 *     'btn_secondary' => [                        // secondary CTA button (optional)
 *         'text'   => 'Download Overview',
 *         'url'    => 'https://...',
 *         'class'  => 'btn_outline',
 *         'target' => '_blank',
 *     ],
 *     'image_src'     => $img_path . '/hero.png', // hero image URL
 *     'image_alt'     => 'Alt text',
 *     'image_col'     => 'col-lg-6',              // Bootstrap col for image (default: col-lg-6)
 *     'content_col'   => 'col-lg-6',              // Bootstrap col for content (default: col-lg-6)
 *     'flip'          => false,                   // true = image left, content right
 * ]);
 */

$section_class  = $args['section_class']  ?? 'page_hero';
$label          = $args['label']          ?? '';
$title          = $args['title']          ?? '';
$text           = $args['text']           ?? '';
$btn_primary    = $args['btn_primary']    ?? [];
$btn_secondary  = $args['btn_secondary']  ?? [];
$image_src      = $args['image_src']      ?? '';
$image_alt      = $args['image_alt']      ?? '';
$image_col      = $args['image_col']      ?? 'col-lg-6';
$content_col    = $args['content_col']    ?? 'col-lg-6';
$flip           = $args['flip']           ?? false;

$content_block = function() use ($label, $title, $text, $btn_primary, $btn_secondary) { ?>
    <div class="hero_content pe-lg-5">
        <?php if (!empty($label)) : ?>
        <div class="program_label"><?php echo esc_html($label); ?></div>
        <?php endif; ?>

        <?php if (!empty($title)) : ?>
        <h1><?php echo wp_kses_post($title); ?></h1>
        <?php endif; ?>

        <?php if (!empty($text)) : ?>
        <p><?php echo wp_kses_post($text); ?></p>
        <?php endif; ?>

        <?php if (!empty($btn_primary) || !empty($btn_secondary)) : ?>
        <div class="hero_btns">
            <?php if (!empty($btn_primary)) :
                $target = isset($btn_primary['target']) ? ' target="' . esc_attr($btn_primary['target']) . '" rel="noopener noreferrer"' : '';
            ?>
            <a href="<?php echo esc_url($btn_primary['url']); ?>" class="<?php echo esc_attr($btn_primary['class'] ?? 'btn_gold'); ?>"<?php echo $target; ?>>
                <?php echo esc_html($btn_primary['text']); ?>
            </a>
            <?php endif; ?>

            <?php if (!empty($btn_secondary)) :
                $target = isset($btn_secondary['target']) ? ' target="' . esc_attr($btn_secondary['target']) . '" rel="noopener noreferrer"' : '';
            ?>
            <a href="<?php echo esc_url($btn_secondary['url']); ?>" class="<?php echo esc_attr($btn_secondary['class'] ?? 'btn_outline'); ?>"<?php echo $target; ?>>
                <?php echo esc_html($btn_secondary['text']); ?>
            </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
<?php };

$image_block = function() use ($image_src, $image_alt) { ?>
    <div class="hero_image">
        <?php if (!empty($image_src)) : ?>
        <img loading="lazy" src="<?php echo esc_url($image_src); ?>" alt="<?php echo esc_attr($image_alt); ?>" title="<?php echo esc_attr($image_alt); ?>">
        <?php endif; ?>
    </div>
<?php };
?>

<section class="<?php echo esc_attr($section_class); ?>">
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php if ($flip) : ?>
                <div class="<?php echo esc_attr($image_col); ?>">
                    <?php $image_block(); ?>
                </div>
                <div class="<?php echo esc_attr($content_col); ?>">
                    <?php $content_block(); ?>
                </div>
                <?php else : ?>
                <div class="<?php echo esc_attr($content_col); ?>">
                    <?php $content_block(); ?>
                </div>
                <div class="<?php echo esc_attr($image_col); ?>">
                    <?php $image_block(); ?>
                </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>
