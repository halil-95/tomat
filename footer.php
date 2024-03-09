
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<footer id="footer" class="footer" >
    <div class="footer__inner">
        <div class="container">
            <div class="footer__top">
                <div class="footer__item footer__contacts">
                    <div class="footer__logo">
                        <?php get_template_part('templates/contacts/logo'); ?>
                    </div>
                    <div class="contacts">
                        <ul>
                            <li class="contacts__item">
                                <?php get_template_part('templates/contacts/work-time'); ?>
                            </li>
                            <li class="contacts__item">
                                <?php get_template_part('templates/contacts/contact'); ?>
                            </li>
                            <li class="contacts__item">
                                <?php get_template_part('templates/contacts/email'); ?>
                            </li>
                            <li class="contacts__item">
                                <?php get_template_part('templates/contacts/map_links'); ?>
                            </li>
                            <li class="contacts__item">
                                <?php get_template_part('templates/contacts/legal_info'); ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__item footer__menu">
                    <?php wp_nav_menu(  ['theme_location' => 'footer']  ); ?>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copy">
                    &copy <?php echo date('Y'); ?>. <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>. Копирование запрещено.
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="form_hero text__list display-no" id="form_hero">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="b6cf6f7" title="Оставить заявку"]');?>
    </div>
</div>

<div class="form_hero text__list display-no" id="form_portfolio">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="b6cf6f7" title="Оставить заявку"]');?>
    </div>
</div>

<div class="form_hero text__list display-no" id="form_price">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="eecf8e0" title="Заказать расчёт"]');?>
    </div>
</div>

<div class="form_hero text__list display-no" id="form_reviews">
    <div class="container">
        <?php echo do_shortcode('[contact-form-7 id="f58d19a" title="Оставить отзыв"]');?>
    </div>
</div>

<script>
        Fancybox.bind('[{data-fancybox="gallery"]', {});
        Fancybox.bind('[data-fancybox]', {}); 
</script>
<script src="<?= get_template_directory_uri();?>/dist/js/hero-change-color.js"></script>
<script src="<?= get_template_directory_uri();?>/dist/js/hide.js"></script>
<script src="<?= get_template_directory_uri();?>/dist/js/slide.js"></script>
<div class="totop_button">
    <a href="#" class="totop"><i class="demo-icon icon-up2"></i></a>
</div>
<?php wp_footer(); ?>
</body>
</html>


