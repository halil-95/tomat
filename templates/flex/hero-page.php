

   
    <!-- Продвижение YouTube канала под -->
    <section class="hero__list_right">
        <?php if (have_rows("link")) : ?>
            <?php while (have_rows("link")) : the_row(); ?>

                <!-- переменный  -->
                <?php
                $title = get_sub_field("title");
                $link = get_sub_field("link");
                ?>
                <a href="<?= $link; ?>">
                    <?= $title; ?>
                    <span class="icon-play"></span></br>
                </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </section>

    <!-- Заполните бриф, а мы сделаем скидку 20% на наши -->
<?/*php elseif (get_row_layout() == "flex_text") : ?>
    <section class="hero__list_bottom">
        <?php echo get_sub_field("text"); ?>
        <?php echo get_sub_field("text"); ?>

    </section>
<?php */?>
