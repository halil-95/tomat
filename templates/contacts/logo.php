 <?php if (get_field('logo', 'option')):?>
  <a href="<?php bloginfo('url'); ?>" class="logo">
    <img src="<?php the_field('logo', 'option'); ?>" alt="<?php bloginfo('name');?>" >
  </a>
<?php endif; ?>