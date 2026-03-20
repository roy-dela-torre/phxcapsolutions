<?php
/**
 * Reusable Highlight Box Component
 *
 * Usage:
 * get_template_part('template/components/highlight-box', null, [
 *     'text'    => 'Important note text here.',
 *     'variant' => 'default',   // 'default' | 'warning' | 'info'
 *     'icon'    => true,        // show/hide icon (default: true)
 * ]);
 */

$text    = $args['text']    ?? '';
$variant = $args['variant'] ?? 'default';
$icon    = $args['icon']    ?? true;

if (empty($text)) return;

$icons = [
    'default' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>',
    'warning'  => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>',
    'info'     => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#c59b32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 8 12 12 16 14"/></svg>',
];

$variant_class = $variant !== 'default' ? ' highlight_box--' . esc_attr($variant) : '';
?>

<div class="highlight_box<?php echo $variant_class; ?>">
    <?php if ($icon && isset($icons[$variant])) : ?>
    <div class="highlight_icon">
        <?php echo $icons[$variant]; ?>
    </div>
    <?php endif; ?>
    <p><?php echo wp_kses_post($text); ?></p>
</div>
