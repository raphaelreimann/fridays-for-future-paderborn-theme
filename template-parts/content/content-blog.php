<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fridays_for_future_paderborn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (get_the_post_thumbnail()) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div><!-- .post-thumbnail -->
	<?php else : ?>
		<div class="post-thumbnail">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/blog-card.jpg" />
		</div>
	<?php endif ?>
	<header class="entry-header">
		<?php fridays_for_future_paderborn_entry_category(); ?>
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		?>
		<?php if (get_field('secondary_header')) :
			echo '<h3>' . get_field('secondary_header') . '</h3>';
		endif
		?>
		<?php
		if ('post' === get_post_type()) :
		?>
			<div class="entry-meta">
				<div class="entry-details">
					<?php
					fridays_for_future_paderborn_posted_by();
					// echo get_field('post_author')['display_name'];
					fridays_for_future_paderborn_posted_on();

					?>
				</div>
				<div class="entry-share">
					<ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'social',
								'container'       => '',
								'container_class' => '',
								'items_wrap'      => '%3$s',
								'menu_id'         => '',
								'menu_class'      => '',
								'depth'           => 1,
								'link_before'     => '<span class="screen-reader-text">',
								'link_after'      => '</span>',
								'fallback_cb'     => '',
							)
						);
						?>

					</ul><!-- .footer-social -->
				</div>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'fridays-for-future-paderborn'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		));

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'fridays-for-future-paderborn'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->