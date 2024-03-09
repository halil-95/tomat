<?php
$flex = 'flex';
$videBg = 'flex_video_bg';
$txtImage = 'flex_text_image';
$galary = 'flex_galary';
$video = 'flex_video';
$txt = 'flex_text';
$portfolio = 'flex_portfolio';
$team = "flex_team";
$benefits = "flex_benefits";
$price = "flex_price";
$faq = "flex_faq";
$reviews = "flex_reviews";
$animate = "flex_animation";
$youtube = "flex_youtube";
$stages = "flex_stages";

function getClass($nameClass){
    $style = [];
    foreach ($nameClass as $styles) {
        $style[] = $styles->slug;
    }
    $classes = !empty($style) ? ' ' . implode(' ', $style) : 'sorry';
    return $classes;
}
?>

<!-- тестовый поля -->
<?php get_template_part("templates/sections/test"); ?>
<!-- тестовый поля -->

<?php  if (have_rows($flex)) : $num = 1; ?>
    <?php while (have_rows($flex)) : the_row($flex); ?>
        <?php if (get_row_layout() == $videBg) : ?>
            <section class="hero <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <div class="hero__list">
                        <?php get_template_part("templates/sections/hero"); ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == $txt) : ?>
            <section class="text <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <div class="text__list">
                        <?php get_template_part("templates/sections/text"); ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == $txtImage) : ?>
            <section class="text__img <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <div class="text__img__list">
                        <?php get_template_part("templates/sections/text-img"); ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == $portfolio) : ?>
            <section class="portfolio <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <div class="portfolio__block">
                        <?php get_template_part("templates/sections/portfolio"); ?>
                    </div>
                </div>
            </section>
        <?php elseif (get_row_layout() == $videBg) : ?>
            <section class="videBg <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/videBg"); ?>
                </div>
            </section>

            <?php elseif (get_row_layout() == $animate) : ?>
            <section class="animate skew <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <?php // get_template_part("templates/sections/animate"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $galary) : ?>
            <section class="galary <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/galary"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $video) : ?>
            <section class="video <?= getClass(get_sub_field('style')) ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/video"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $team) : ?>
            <section class="team <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/team"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $benefits) : ?>
            <section class="benefits <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/benefits"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $price) : ?>
            <section class="prices <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/price"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $faq) : ?>
            <section class="faq <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/faq"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $reviews) : ?>
            <section class="reviews <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/reviews"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $youtube) : ?>
            <section class="youtube <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/youtube"); ?>
                </div>
            </section>
        <?php elseif (get_row_layout() == $stages) : ?>
            <section class="stages <?= getClass(get_sub_field('style')); ?>">
                <div class="container">
                    <?php get_template_part("templates/sections/stages"); ?>
                </div>
            </section>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>