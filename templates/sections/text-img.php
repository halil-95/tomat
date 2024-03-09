<?php
$txt =  get_sub_field('text');
$img =  get_sub_field('img');
$bgImg =  get_sub_field('bg_image');
?>

<section class="left">


    <?php if ($txt): ?> 
        <p><?= $txt; ?></p>
    <?php endif; ?>

</section>
<section class="right">
    <img src="<?php echo $img["url"]; ?>"></img>
</section>
<section class="bg">
    <img src="<?php echo $bgImg["url"]; ?>"></img>
</section>