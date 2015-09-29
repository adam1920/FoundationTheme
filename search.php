<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

get_header(); ?>

<div class="row">
	<section id="primary" class="content-area small-12 large-8 columns">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'foundation' ), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post(); ?>

				<?php
				/*
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'content', 'search' );

			// End the loop.
			endwhile;

			if ( function_exists( 'foundation_pagination' ) ) {
                                foundation_pagination();
                        } else {
                                // Previous/next page navigation.
                                the_posts_pagination( array(
                                        'prev_text'          => __( 'Previous page', 'foundation' ),
                                        'next_text'          => __( 'Next page', 'foundation' ),
                                        'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'foundation' ) . ' </span>',
                                ) );
                        }

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

        <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
