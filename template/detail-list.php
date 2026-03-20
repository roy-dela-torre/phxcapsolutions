<?php
/**
 * Reusable Detail List Component
 * Gold-dot bulleted list with separator lines between items.
 *
 * Usage:
 * get_template_part('template/components/detail-list', null, [
 *     'items' => [
 *         'Plain item text',
 *         '<strong class="text_gold">Label:</strong> Item with bold label',
 *     ],
 *     'style' => 'dot',    // 'dot' (default) | 'bar' (left gold bar per item)
 * ]);
 */

$items = $args['items'] ?? [];
$style = $args['style'] ?? 'dot';

if (empty($items)) return;

$list_class = $style === 'bar' ? 'detail_list detail_list--bar' : 'detail_list';
?>

<ul class="<?php echo esc_attr($list_class); ?>">
    <?php foreach ($items as $item) : ?>
    <li><?php echo wp_kses_post($item); ?></li>
    <?php endforeach; ?>
</ul>
