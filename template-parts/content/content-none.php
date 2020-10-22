<?php

/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fridays_for_future_paderborn
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e('Nichts gefunden', 'fridays-for-future-paderborn'); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<div class="row">
			<?php
			if (is_home() && current_user_can('publish_posts')) :

				printf(
					'<p>' . wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__('Bereit deinen ersten Post zu veröffentlichen? <a href="%1$s">Loslegen</a>.', 'fridays-for-future-paderborn'),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					) . '</p>',
					esc_url(admin_url('post-new.php'))
				);

			elseif (is_search()) :
			?>

				<p class="col"><?php esc_html_e('Mit diesem Suchbegriff wurde nichts gefunden.', 'fridays-for-future-paderborn'); ?></p>
				<div class="col text-align-right">
					<?php
					get_search_form();
					?>
				</div>
			<?php
			else :
			?>
				<div class="col ">
					<p><?php esc_html_e('Wir konnten leider nicht finden wonach du suchst. Vielleicht hilft eine Suche.', 'fridays-for-future-paderborn'); ?></p>
				</div>
				<div class="col text-align-right">
					<?php
					get_search_form();
					?>

				</div>
			<?php
			endif;
			?>
		</div>
	</div><!-- .page-content -->
</section><!-- .no-results -->