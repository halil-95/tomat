<?php
$title =  get_sub_field('title');
$img =  get_sub_field('img');
$taxonomy = get_sub_field('portfolio');
$term = get_term($taxonomy);
$term_name = $term->name;
$term_text = $term->description; ?>

<section class="left">

    <?= $title = ($title) ? '<h2 class="section__title">' .  $title . '</h2>' : " "; ?>
    <?= $term_name = ($term_name) ? '<strong>' .  $term_name . '</strong>' : " "; ?>
    <?= $term_text = ($term_text) ? '<p>' .  $term_text . '</p>' : " "; ?>
    <div class="button" data-fancybox data-src="#form_portfolio">Рассчитать</div>
</section>

<?php
$args = [
    'post_type' => 'portfolio', 'posts_per_page' => -1,
    'tax_query' => [
        ['taxonomy' => 'type_portfolio', 'field' => 'term_id', 'terms' => $taxonomy,]
    ]
];
?>
<section class="right">

    <?php if ($img) : ?>

        <div class="portfolio_block__image">
            <img src="<?= $img['url']; ?>" alt="">
        </div>

    <?php else : $portfolio = new WP_Query($args); ?>
        <?php if ($portfolio->have_posts()) : ?>
            <section class="splide carousel">
                <div class="splide__arrows splide__arrows--ltr">
                    <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" disabled="">
                        <i class="icon-play demo-icon"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide02-track">
                        <i class="icon-play demo-icon"></i>
                    </button>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        <?php while ($portfolio->have_posts()) :
                            $portfolio->the_post();
                            $title = get_the_title();
                            $video = get_field('video'); ?>
                            <div class="splide__slide">
                                <a href="https://www.youtube.com/watch?v=<?= $video ?>" href="javascript:;"  data-fancybox="video-gallery" data-fancybox-index="0">
                                    <img  src="https://img.youtube.com/vi/<?= $video ?>/maxresdefault.jpg" alt="">
                                    <strong class="under_img"> <?= $title; ?> </strong>
                                </a>
                            </div>

                        <?php endwhile; ?>
                    </ul>
                </div>
            </section>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>

<script>
        Fancybox.bind('[{data-fancybox="gallery"]', {});
        Fancybox.bind('[data-fancybox]', {}); 
    </script>