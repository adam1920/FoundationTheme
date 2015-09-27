<?php
/*
Template Name: Left Sidebar
*/
get_header(); ?>

<div class="row">
        <div id="primary" class="content-area small-12 large-8 large-push-4  columns">
                <main id="main" class="site-main" role="main">

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'page' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                                comments_template();
                        endif;

                // End the loop.
                endwhile;
                ?>

                </main><!-- .site-main -->
        </div><!-- .content-area -->
        <?php get_sidebar('left'); ?>
</div>
<?php get_footer(); ?>

