<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fridays_for_future_paderborn
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<?php if (get_field('action_tag')) : ?>
			<div class=" auto-created">
				<?php echo get_field('action_tag'); ?>
			</div>
		<?php else : ?>

		<?php endif ?>
		<?php
		the_content();

		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'fridays-for-future-paderborn'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->