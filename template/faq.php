<?php
/**
 * Reusable FAQ Accordion Component
 *
 * Usage:
 * get_template_part('template/components/faq', null, [
 *     'id'    => 'carrFaq',         // unique ID for the accordion group
 *     'items' => [
 *         ['question' => 'Your question?', 'answer' => 'Your answer.'],
 *         ['question' => 'Another question?', 'answer' => 'Another answer.'],
 *     ],
 * ]);
 */

$faq_id = $args['id']    ?? 'faqAccordion';
$items  = $args['items'] ?? [];

if (empty($items)) return;

$chevron_svg = '<svg class="faq_icon" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M4 6l4 4 4-4" stroke="#c59b32" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>';
?>

<div class="faq_accordion" id="<?php echo esc_attr($faq_id); ?>">
    <?php foreach ($items as $index => $item) :
        $item_num   = $index + 1;
        $item_id    = esc_attr($faq_id) . '-' . $item_num;
        $is_first   = ($index === 0);
        $collapsed  = $is_first ? '' : ' collapsed';
        $show       = $is_first ? ' show' : '';
        $expanded   = $is_first ? 'true' : 'false';
    ?>
    <div class="faq_item">
        <button
            class="faq_question<?php echo $collapsed; ?>"
            data-bs-toggle="collapse"
            data-bs-target="#<?php echo $item_id; ?>"
            aria-expanded="<?php echo $expanded; ?>"
        >
            <?php echo esc_html($item['question']); ?>
            <?php echo $chevron_svg; ?>
        </button>
        <div class="faq_answer collapse<?php echo $show; ?>" id="<?php echo $item_id; ?>" data-bs-parent="#<?php echo esc_attr($faq_id); ?>">
            <p><?php echo wp_kses_post($item['answer']); ?></p>
        </div>
    </div>
    <?php endforeach; ?>
</div>
