<?php
/*
Template Name: Hero
*/
get_header(); ?>

<header id="homepage-hero" role="banner">
	<div class="row">
		<div class="small-12 medium-8 columns">
			<div class="site-branding">
				<p class="site-title"><a rel="home" href="<?php echo esc_url(home_url()); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></p>
				<p class="site-description"><?php bloginfo( 'description' ); ?></p>
			</div>
		</div>

		<div class="medium-6 columns end">
			<a role="button" class="download large button hide-for-small" href="#">Download Foundation Theme</a>
		</div>
	</div>

</header>

<div class="row">
	<div id="primary" class="content-area small-12 large-8 columns">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php
          				// Post thumbnail.
		                	foundation_post_thumbnail();
			        ?>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
				<footer>
					<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundation' ), 'after' => '</p></nav>' ) ); ?>
					<p><?php the_tags(); ?></p>
				</footer>
			</article>
			<?php comments_template(); ?>
		<?php endwhile;?>
		</main>
	</div><!-- .content-area -->
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
