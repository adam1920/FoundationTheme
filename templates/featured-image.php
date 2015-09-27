<?php
/*
Template Name: Featured Image
*/
get_header(); ?>

<?php if (has_post_thumbnail( $post->ID )) : ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
	<header style="background-image: url('<?php echo $image[0]; ?>')" role="banner" id="featured-hero"></header>
<?php endif; ?>


<?php if ( function_exists('yoast_breadcrumb') ):?>
                <div class="row">
                        <div class="columns small-12">
                                <?php yoast_breadcrumb('<div id="breadcrumbs" class="breadcrumbs">','</div>');?>
                        </div>
                </div>
<?php endif;?>

<div class="row">
        <div id="primary" class="content-area small-12 columns">
                <main id="main" class="site-main" role="main">

                <?php
                // Start the loop.
                while ( have_posts() ) : the_post();

                        // Include the page content template.
                        get_template_part( 'content', 'featured-image' );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                                comments_template();
                        endif;

                // End the loop.
                endwhile;
                ?>

                </main><!-- .site-main -->
        </div><!-- .content-area -->
</div>
<?php get_footer(); ?>
