<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

get_header(); ?>

<div class="row">
	<div id="primary" class="content-area small-12 large-8 columns">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'foundation' ); ?></h1>
				</header><!-- .page-header -->


				<article class="hentry">
					<div class="entry-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'foundation' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .page-content -->
				</article>
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
