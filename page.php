<?php get_header(); ?>

<main class="wrapper node-<?php the_ID(); ?>" role="main">
  <?php if (get_the_content()): ?>
    <section class="section section_page">
      <div class="container">
        <?php the_content(); ?>
      </div>
    </section>
  <?php endif; ?>
  <?php get_template_part('templates/hero'); ?>
</main>

<?php get_footer(); ?>

