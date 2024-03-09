<?php
    $title = get_sub_field('title');
    $txt = get_sub_field('text');
?>

<?php if ($title) : ?>
    <?= $title; ?>
<?php endif; ?>

<?php if ($txt) : ?>
    <?= $txt; ?>
<?php endif; ?>
