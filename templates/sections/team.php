<?php
$title = get_sub_field('title');
$args = ['post_type' => 'team', 'posts_per_page' => -1];
$teams = new WP_Query($args);
?>

<?php if ($title) : ?>
    <h2 class="section__title"><?= $title ?></h2>
<?php endif; ?>

<?php if ($teams->have_posts()) : ?>
    <div class="splide team_carousel carousel" role="group">
        <div class="splide__track">

            <div class="splide__arrows splide__arrows--ltr">
                <button class="splide__arrow splide__arrow--prev" type="button" aria-label="Previous slide" aria-controls="splide05-track">
                    <span class="icon-play demo-icon"></span>
                </button>
                <button class="splide__arrow splide__arrow--next" type="button" aria-label="Next slide" aria-controls="splide05-track">
                    <span class="icon-play demo-icon"></span>
                </button>
            </div>
            
            <ul class="splide__list">
                <?php while ($teams->have_posts()) : $teams->the_post(); ?>
                    <?php
                    $name = get_the_title();
                    $content = get_the_content();
                    $job = get_field('job');
                    $image = get_field('image');
                    ?>
                    <li class="splide__slide team_carousel__item">
                        <div class="splide__content">
                            <?php if ($name) : ?>
                                <div class="splide__title"><strong><?= $name; ?></strong></div>
                            <?php endif; ?>
                            <?php if ($job) : ?>
                                <div class="splide__job"><?= $job; ?></div>
                            <?php endif; ?>
                            <?php if ($content) : ?>
                                <div class="splide__text"><?= $content; ?></div>
                            <?php endif; ?>
                        </div>
                        <div class="splide__image">
                            <?php if ($image) : ?><img src="<?= $image['url']; ?>" alt="<?= $name; ?>">
                            <?php endif; ?>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <?php wp_reset_query(); ?>
<?php endif; ?>

<script>
    //   new Splide( '.team_carousel' ).mount();
</script>