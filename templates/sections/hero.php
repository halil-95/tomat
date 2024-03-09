<?php
//  -------- 'flex_video_bg'--------------
$videoBg = 'video_bg'; // this is group
$txt = get_sub_field('text');
$links = 'link'; //  this is  repeter
?>
<?php if (have_rows($videoBg)) : ?>
    <?php while (have_rows($videoBg)) : the_row(); ?>
        <?php
            $img = get_sub_field('image');
            $mp4 = get_sub_field('mp4');
            $webm = get_sub_field('webm');
            $ogv = get_sub_field('ogv');
        ?>
    <?php endwhile; ?>
<?php endif; ?>
<section class="hero__left">
    <?php if($txt):?>
        <?= $txt; ?>
    <?php endif; ?>
</section>
<section class="hero__right">
    <?php if (have_rows($links)) : ?>
        <?php while (have_rows($links)) : the_row(); ?>
            <?php
                $title = get_sub_field('title');
                $link = get_sub_field('link');
                $attr = get_sub_field('attr');
            ?>
            <a href="<?= $link; ?>">
                <span onmouseover="changeClass(this)" onmouseout="removeClass(this)" ><?= $title; ?></span>
                <span  class="icon-play my_icon_play"></span>
            </a>
        <?php endwhile; ?>
    <?php endif; ?>
</section>


