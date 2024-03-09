<?php
$title = get_sub_field('title');
$channels = 'channels';
?>

<div class="channels_carousel youtube__splide carousel splide" data-splide='{"perPage":3, "breakpoints": {"768": {"perPage": 2}, "480": {"perPage": 1}} }'>
    <?php if ($title) : ?>
        <h2 class="section__title"><?= $title; ?></h2>
    <?php endif; ?>

    <div class="carousel_arrow">
        <div class="arrow__link"></div>
        <div class="splide__arrows">
            <button class="splide__arrow splide__arrow--prev"><i class="demo-icon icon-play"></i></button>
            <button class="splide__arrow splide__arrow--next"><i class="demo-icon icon-play"></i></button>
        </div>
    </div>
    <div class="splide__track">
        <ul class="splide__list">
            <?php if (have_rows($channels, 'option')) : ?>
                <?php while (have_rows($channels, 'option')) : the_row(); ?>
                    <li class="splide__slide channels_carousel__item">
                        <?php
                        $name = get_sub_field('title');
                        $link = get_sub_field('link');
                        $image = get_sub_field('image');
                        ?>
                        <a href="<?= $link; ?>" target="_blank" rel="noopener">
                            <span class="splide__image">
                                <img data-splide-lazy="<?= $image['url']; ?>" alt="<?= $name; ?>">
                            </span>
                            <strong><?= $name; ?></strong>
                        </a>
                    </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>