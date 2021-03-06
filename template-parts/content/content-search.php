<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fridays_for_future_paderborn
 */

?>
<a href="<?php the_permalink(); ?>">
	<article class="content-search " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-md-4">
				<div class="card-img">
					<?php if (get_the_post_thumbnail()) : ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail('large'); ?>
						</div><!-- .post-thumbnail -->
					<?php else : ?>
						<div class="post-thumbnail">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-card.jpg" />
						</div>
					<?php endif ?>
				</div>
			</div>
			<div class="col-md-8 search-content">
				<header class="entry-header">
					<h3>
						<?php echo the_title(); ?>
					</h3>
					<?php if (get_field('dates')) : ?>
						<h3 class="dates">
							<?php echo get_field('dates'); ?>
							<?php if (get_field('times')) : ?>
								um <?php echo get_field('times'); ?> Uhr
							<?php endif ?>
						</h3>
					<?php endif ?>

					<?php if ('post' === get_post_type()) : ?>
						<div class="entry-meta">
							<?php
							fridays_for_future_paderborn_posted_on();
							echo ' von ';
							the_author();
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</header><!-- .entry-header -->


				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</div>
		</div>
	</article>
</a>
<!-- #post-<?php the_ID(); ?> -->