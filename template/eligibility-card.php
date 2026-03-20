<?php
/**
 * Reusable Eligibility Card Component
 * Icon + title + description card used in eligibility/requirements sections.
 *
 * Usage:
 * get_template_part('template/components/eligibility-card', null, [
 *     'svg'   => '<svg>...</svg>',   // inline SVG icon (required)
 *     'title' => 'Requirement Title',
 *     'text'  => 'Supporting description.',
 * ]);
 */

$svg   = $args['svg']   ?? '';
$title = $args['title'] ?? '';
$text  = $args['text']  ?? '';

if (empty($title)) return;
?>

<div class="eligibility_card">
    <?php if (!empty($svg)) : ?>
    <div class="elig_icon">
        <?php echo $svg; ?>
    </div>
    <?php endif; ?>
    <h3><?php echo wp_kses_post($title); ?></h3>
    <?php if (!empty($text)) : ?>
    <p><?php echo wp_kses_post($text); ?></p>
    <?php endif; ?>
</div>
