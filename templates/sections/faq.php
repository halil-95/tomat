<?php $title = get_sub_field('title'); ?>
<?= $title = $title ? '<h2 class="section__title">' . $title . '</h2>' : ' '; ?>
<?php $faq = new WP_Query(['post_type' => 'faq', 'posts_per_page' => -1]); ?>

<?php if ($faq->have_posts()) : ?>
    <div class="faq accordion">
        <?php $numHide = 0;?>
        <?php while ($faq->have_posts()) : $faq->the_post(); ?>      
            <?php $numHide++; ?>
            <article class="article article_faq ">
                <div class="articles__title " onclick="toggleText(<?= $numHide?>);" >
                    <?php the_title();  ?>
                </div>
                <div class="articles__content hidden-text" >
                    <div class="ac-text page_text">
                        <?php the_content(); ?>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<?php wp_reset_query(); ?>
