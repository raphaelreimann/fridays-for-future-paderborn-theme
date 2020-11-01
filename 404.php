<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package fridays_for_future_paderborn
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<section class="error-404 not-found">
			<header class="entry-header post-header">
				<div class="container">
					<div class="row header-row <?php if (get_field('header_embed') || get_the_post_thumbnail()) {
													echo "";
												} else {
													echo "justify-content-center no-photo";
												} ?>">
						<div class="header-blocks header-content col-md-6">
							<h1 class="entry-title">
								<b>
									Ups! Diese Seite wurde nicht gefunden.
								</b>
							</h1>
						</div>
					</div>
				</div>
				<div class="header-background-image">
					<?php if (get_field('header_image')) : ?>
						<div class="header-background-image">
							<img src="<?php echo get_field('header_image'); ?>" />
						<?php endif ?>
						</div>

			</header><!-- .entry-header -->

			<div class="page-content entry-content">
				<div class="row">
					<p class="col-md-6"><?php esc_html_e('Hier wurde anscheinend nichts gefunden. Vielleicht hilft eine Suche?', 'fridays-for-future-paderborn'); ?></p>
					<div class="col-md-6 text-align-right">
						<?php
						get_search_form();
						?>
					</div>



				</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
