<?php get_header(); ?>

<main class="wrapper node-<?php the_ID(); ?>" role="main">
	<div class="<?php if($class != 'services'): ?>container<?php endif; ?><?php if(!$class): ?> width_aside<?php endif; ?>">
		<div class="wrapper_content">
			<section class="section section_archive">
				<?php if (have_posts()) : ?>
					<div class="articles<?php if($class): ?> <?php echo $class; ?>__list<?php endif; ?><?php if($class == 'faq'): ?> faq accordion<?php elseif($class == 'prices'): ?> prices<?php endif; ?>">
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part($templatePart); ?>
						<?php endwhile; ?>
					</div>
					<?php wp_pagenavi(); ?>
				<?php else: ?>
					<div class="container page_text">
						<div class="not_found">
							<p>Такой страницы не существует или она была перенесена.</p>
							<a href="<?php bloginfo('url'); ?>">Вернуться на главную</a>
						</div>
					</div>
				<?php endif; ?>
			</section>
		</div>
		<?php if (!$class && is_active_sidebar( 'right_aside' ) ) : ?>
			<aside class="aside">
				<?php dynamic_sidebar( 'right_aside' ); ?>
			</aside>
		<?php endif; ?>
	</div>
</main>

<?php get_footer(); ?>
