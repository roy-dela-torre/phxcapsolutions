<?php
/**
 * Reusable Content Card Component
 * Dark card with gold top-line reveal on hover, optional label
 *
 * Usage:
 * get_template_part('template/components/content-card', null, [
 *     'label'   => 'Optional Label',   // small gold uppercase label
 *     'title'   => 'Card Title',       // h3 heading (required)
 *     'text'    => 'Body text here.',  // paragraph text
 *     'items'   => ['Point 1', ...],   // optional bullet list (detail_list)
 *     'variant' => 'default',          // 'default' | 'gold' (gold border variant)
 * ]);
 */

$label   = $args['label']   ?? '';
$title   = $args['title']   ?? '';
$text    = $args['text']    ?? '';
$items   = $args['items']   ?? [];
$variant = $args['variant'] ?? 'default';

if (empty($title) && empty($text)) return;

$extra_class = $variant === 'gold' ? ' content_card--gold' : '';
?>

<div class="content_card<?php echo $extra_class; ?>">
    <?php if (!empty($label)) : ?>
    <p class="card_label"><?php echo esc_html($label); ?></p>
    <?php endif; ?>

    <?php if (!empty($title)) : ?>
    <h3><?php echo wp_kses_post($title); ?></h3>
    <?php endif; ?>

    <?php if (!empty($text)) : ?>
    <p><?php echo wp_kses_post($text); ?></p>
    <?php endif; ?>

    <?php if (!empty($items)) : ?>
    <ul class="detail_list">
        <?php foreach ($items as $item) : ?>
        <li><?php echo wp_kses_post($item); ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</div>
