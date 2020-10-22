<?php

/**
 * The template for displaying category pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fridays_for_future_paderborn
 */

get_header();
?>

<div id="primary" class="content-area archive">
    <main id="main" class="site-main">
        <header class="entry-header post-header">
            <div class="container">
                <div class="row header-row <?php if (false && get_field('header_embed') || get_the_post_thumbnail()) {
                                                echo "";
                                            } else {
                                                echo "justify-content-center no-photo";
                                            } ?>">
                    <div class="header-blocks header-content col-md-8">
                        <div class="h1-subhead-row">
                            <h4 class="h1-subhead">
                                <b>
                                    Fridays for Future Paderborn
                                </b>
                            </h4>
                        </div>
                        <h1 class="entry-title"><b>Blog</b></h1>
                    </div>
                </div>
                <div class="header-background-image">
                    <?php if (get_field('header_image')) : ?>
                        <div class="header-background-image">
                            <img src="<?php echo get_field('header_image'); ?>" />
                        <?php endif ?>
                        </div>

                </div>
        </header><!-- .entry-header -->
        <div class="list-container">
            <div class="narrow-container">
                <?php if (have_posts()) :
                ?>
                <?php

                    /* Start the Loop */
                    while (have_posts()) :
                        the_post();

                        /*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
                        get_template_part('template-parts/content/content-search', get_post_type());

                    endwhile;

                    // the_posts_navigation(array(
                    //     'prev_text' => 'Ältere Beiträge',
                    //     'next_text' => 'Neuere Beiträge'
                    // ));
                    // the_posts_pagination(array());
                    echo paginate_links();

                else :

                    get_template_part('template-parts/content/content', 'none');

                endif;
                ?>
            </div>
        </div>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
