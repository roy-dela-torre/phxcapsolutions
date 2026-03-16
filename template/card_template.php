<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
$svg = $args['svg'] ?? '';
?>

<div class="content">
    <h3 class="text-white mb-3">
        <?= $svg ?>
        <?= $title ?>
    </h3>
    <?php if (!empty($description)): ?>
        <p class="text-white"><?= $description ?></p>
    <?php endif; ?>
</div>