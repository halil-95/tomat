<?php $title = get_sub_field('title'); ?>
<?php $prices = new WP_Query(['post_type' => 'price', 'posts_per_page' => -1]); ?>
<?php if ($title) : ?>
    <h2 class="section__title"><?= $title; ?></h2>
<?php endif; ?>
<?php if ($prices->have_posts()) : ?>
    <div class="price">
        <?php while ($prices->have_posts()) :  $prices->the_post(); ?>
            <?php
                $titles = get_the_title();
                $subtitle = get_field('subtitle');
                $price = 'price';
                $text = get_the_content();
                $order_button = get_field('order_button');
            ?>
            <article  onmouseover="changeClassPrice(this)" onmouseout="removeClassPrice(this)"  class="article article_prices">
                <div class="article_prices__top equal_height">
                    <div class="article__title">
                        <?php the_title(); ?>
                    </div>
                    <?php if ($subtitle) : ?>
                        <div class="article__subtitle">
                            <?= $subtitle; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (have_rows($price)) : ?>
                    <div class="article__prices">
                        <?php while (have_rows($price)) : the_row(); ?>
                            <?php
                            $sub_price = get_sub_field('price');
                            $discounts = get_sub_field('discounts');
                            ?>
                            <div class="prices__item"><?= $sub_price; ?></div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php if ($text) : ?>
                    <div class="article__text"><?= $text; ?></div>
                <?php endif; ?>
                <?php if ($order_button) : ?>
                    <div class="article__button">
                        <span class="button" rel="nofollow" data-fancybox data-src="#form_price"><?= $order_button; ?></span>
                    </div>
                <?php endif; ?>
            </article>
            <?php wp_reset_postdata(); ?>
        <?php endwhile; ?>
    </div>
<?php else : ?>
    <?= 'Нет доступных записей.'; ?>
<?php endif; ?>