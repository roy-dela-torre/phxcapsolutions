<?php
/**
 * Reusable Stat Block Component
 * Displays a large number, label, and description. Use inside a col.
 *
 * Usage — single block:
 * get_template_part('template/components/stat-block', null, [
 *     'number' => '$2.5M',
 *     'label'  => 'Deployed Capital',
 *     'text'   => 'Across verified NGOs and impact enterprises.',
 * ]);
 *
 * Usage — grid of stats (wrap in row):
 * <div class="row g-3">
 *   <?php foreach ($stats as $stat) : ?>
 *   <div class="col-md-4">
 *     <?php get_template_part('template/components/stat-block', null, $stat); ?>
 *   </div>
 *   <?php endforeach; ?>
 * </div>
 */

$number = $args['number'] ?? '';
$label  = $args['label']  ?? '';
$text   = $args['text']   ?? '';

if (empty($number)) return;
?>

<div class="stat_block">
    <?php if (!empty($number)) : ?>
    <div class="stat_number"><?php echo esc_html($number); ?></div>
    <?php endif; ?>
    <?php if (!empty($label)) : ?>
    <div class="stat_label"><?php echo esc_html($label); ?></div>
    <?php endif; ?>
    <?php if (!empty($text)) : ?>
    <p><?php echo wp_kses_post($text); ?></p>
    <?php endif; ?>
</div>
