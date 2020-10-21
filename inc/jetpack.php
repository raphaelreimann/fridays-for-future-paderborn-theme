<?php

/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.com/
 *
 * @package fridays_for_future_paderborn
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.com/support/infinite-scroll/
 * See: https://jetpack.com/support/responsive-videos/
 * See: https://jetpack.com/support/content-options/
 */
function fridays_for_future_paderborn_jetpack_setup()
{
	// Add theme support for Infinite Scroll.
	add_theme_support('infinite-scroll', array(
		'container' => 'main',
		'render'    => 'fridays_for_future_paderborn_infinite_scroll_render',
		'footer'    => 'page',
	));

	// Add theme support for Responsive Videos.
	add_theme_support('jetpack-responsive-videos');

	// Add theme support for Content Options.
	add_theme_support('jetpack-content-options', array(
		'post-details'    => array(
			'stylesheet' => 'fridays-for-future-paderborn-style',
			'date'       => '.posted-on',
			'categories' => '.cat-links',
			'tags'       => '.tags-links',
			'author'     => '.byline',
			'comment'    => '.comments-link',
		),
		'featured-images' => array(
			'archive'    => true,
			'post'       => true,
			'page'       => true,
		),
	));
}
add_action('after_setup_theme', 'fridays_for_future_paderborn_jetpack_setup');

/**
 * Custom render function for Infinite Scroll.
 */
function fridays_for_future_paderborn_infinite_scroll_render()
{
	while (have_posts()) {
		the_post();
		if (is_search()) :
			get_template_part('template-parts/content/content', 'search');
		else :
			get_template_part('template-parts/content/content', get_post_type());
		endif;
	}
}
