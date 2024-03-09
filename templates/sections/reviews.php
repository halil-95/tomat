<?php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
?>
<?php if ($title or $subtitle) : ?>
    <div class="section__header">
        <?= $title = $title ? '<h2 class="section__title">' . $title . '</h2>' : ' '; ?>
        <?= $subtitle = $subtitle ? '<div class="section__subtitle">' . $subtitle . '</div>' : ' '; ?>
    </div>
<?php endif; ?>
<?php $reviews = new WP_Query(['post_type' => 'reviews', 'posts_per_page' => -1]); ?>
<?php if ($reviews->have_posts()) : ?>
    <div class="reviews_carousel carousel splide">
        <div class="carousel_arrow">
            <div class="arrow__link">
                <span data-fancybox data-src="#form_reviews" class="button">Оставить отзыв</span>
            </div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
                    <i class="demo-icon icon-play"></i>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <i class="demo-icon icon-play"></i>
                </button>
            </div>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <?php while ($reviews->have_posts()) : $reviews->the_post(); ?>
                    <?php
                    $name = get_the_title();
                    $text = get_the_content();
                    ?>
                    <?php if (have_rows("reviews")) :
                        while (have_rows("reviews")) : the_row();
                            $video = get_sub_field('code_video');
                            $image = get_sub_field('img');
                            $thumb = $image ? $image['url'] : "https://img.youtube.com/vi/" . $video . "/maxresdefault.jpg"; ?>
                            <li class="splide__slide reviews_carousel__item">
                                <div class="reviews_carousel__center">
                                    <a href="https://www.youtube.com/watch?v=<?= $video; ?>" data-fancybox>
                                        <span class="splide__image">
                                            <i class="demo-icon icon-video1"></i>
                                            <img data-splide-lazy="<?= $thumb; ?>" alt="<?= $name; ?>">
                                        </span>
                                        <strong><?= $name; ?></strong>
                                        <?php if ($text) : ?>
                                            <span class="reviews_carousel__text"><?= $text; ?></span>
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>