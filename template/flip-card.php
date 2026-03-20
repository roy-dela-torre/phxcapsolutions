<?php
/**
 * Reusable Flip Card Component
 *
 * Usage:
 * get_template_part('template/components/flip-card', null, [
 *     'label'       => 'Category',
 *     'title'       => 'Card Title',
 *     'image'       => get_template_directory_uri() . '/assets/img/example.jpg',
 *     'back_label'  => 'Details',
 *     'back_items'  => ['Point one', 'Point two', 'Point three'],
 *     'height'      => '320px',   // optional, default 320px
 * ]);
 *
 * For a grid of flip cards, wrap in Bootstrap columns:
 * <div class="row g-4">
 *   <div class="col-md-4">
 *     <?php get_template_part('template/components/flip-card', null, [...]) ?>
 *   </div>
 * </div>
 */

$label      = $args['label']      ?? '';
$title      = $args['title']      ?? '';
$image      = $args['image']      ?? '';
$back_label = $args['back_label'] ?? $label;
$back_items = $args['back_items'] ?? [];
$height     = $args['height']     ?? '320px';
?>

<div class="flip_card" style="height: <?php echo esc_attr($height); ?>">
    <div class="flip_card_inner">

        <!-- Front -->
        <div class="flip_card_front">
            <?php if (!empty($image)) : ?>
            <div class="front_image">
                <img loading="lazy" src="<?php echo esc_url($image); ?>" alt="<?php echo esc_attr($title); ?>" title="<?php echo esc_attr($title); ?>">
            </div>
            <?php endif; ?>
            <?php if (!empty($label)) : ?>
            <p class="card_label"><?php echo esc_html($label); ?></p>
            <?php endif; ?>
            <?php if (!empty($title)) : ?>
            <h3><?php echo esc_html($title); ?></h3>
            <?php endif; ?>
        </div>

        <!-- Back -->
        <div class="flip_card_back">
            <?php if (!empty($back_label)) : ?>
            <p class="card_label"><?php echo esc_html($back_label); ?></p>
            <?php endif; ?>
            <?php if (!empty($back_items)) : ?>
            <ul class="item_list">
                <?php foreach ($back_items as $item) : ?>
                <li><?php echo wp_kses_post($item); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>
        </div>

    </div>
</div>
