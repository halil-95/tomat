<?php $title = get_sub_field('title'); ?>
<?= $title = ($title) ? '<h2 class="section__title">' . $title . '</h2>' : ' '; ?>

<?php if (have_rows('benefits')) : ?>
    <div class="splide benefits_carousel carousel" role="group">
        <div class="carousel_arrow">
            <div class="arrow__link"></div>
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev"><i class="demo-icon icon-play"></i></button>
                <button class="splide__arrow splide__arrow--next"><i class="demo-icon icon-play"></i></button>
            </div>
        </div>
        <div class="splide__track">
            <ul class="splide__list">
                <?php while (have_rows('benefits')) : the_row('benefits'); ?>
                    <?php  $title = get_sub_field('title');
                           $text = get_sub_field('text'); ?>
                    <li class="splide__slide benefits_carousel__item">
                        <div class="benefits_carousel__title">
                            <strong><?= $title; ?></strong>
                        </div>
                        <?= $text = ($text) ? '<div class="benefits_carousel__text">' . $text . '</div>' : ' '; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
<?php endif; ?>