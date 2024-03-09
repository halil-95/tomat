<?php
$style =  get_sub_field('style');
$txt =  get_sub_field('text');
$img =  get_sub_field('img');
$bgImg =  get_sub_field('bg_image');
?>


<section class="video__pro__left left">
    <?= $txt; ?>
</section>
<section class="video__pro__right right">
    <img src="<?php echo $img["url"]; ?>"></img>
</section>
<section class="video__pro__bg">
    <img src="<?php echo $bgImg["url"]; ?>"></img>
</section>