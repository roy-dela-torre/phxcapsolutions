<?php
/**
 * Reusable Section Header Component
 *
 * Usage:
 * get_template_part('template/components/section-header', null, [
 *     'label'    => 'Program Overview',   // small badge label (optional)
 *     'title'    => 'Section Title',      // h2 heading (required)
 *     'subtitle' => 'Optional paragraph', // body text (optional)
 *     'align'    => 'left',               // 'left' | 'center' (default: left)
 *     'title_color' => 'gold',            // 'gold' | 'white' (default: gold)
 * ]);
 */

$label       = $args['label']       ?? '';
$title       = $args['title']       ?? '';
$subtitle    = $args['subtitle']    ?? '';
$align       = $args['align']       ?? 'left';
$title_color = $args['title_color'] ?? 'gold';

if (empty($title)) return;

$align_class  = $align === 'center' ? ' text-center' : '';
$header_class = 'section_header' . $align_class;
$title_class  = $title_color === 'white' ? 'text-white' : 'text_gold';
?>

<div class="<?php echo $header_class; ?>">
    <?php if (!empty($label)) : ?>
    <span class="program_label"><?php echo esc_html($label); ?></span>
    <?php endif; ?>
    <h2 class="<?php echo $title_class; ?>"><?php echo wp_kses_post($title); ?></h2>
    <?php if (!empty($subtitle)) : ?>
    <p><?php echo wp_kses_post($subtitle); ?></p>
    <?php endif; ?>
</div>
