<?php get_header(); ?>

<main class="wrapper node-<?php the_ID(); ?>" role="main">
	<div class="container">
    <div class="wrapper_content">
			<?php if ( have_posts() ) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="section node node_default">
						<div class="article_node">
							<h2><?php the_title(); ?></h2>
              <p><?php the_field('test'); ?></p>
						</div>
					</div>
				<?php endwhile;?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</div>
	</div>

</main>

<?php get_footer(); ?>
