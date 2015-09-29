<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php my_body(); ?>
<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
        <div class="off-canvas-wrap" data-offcanvas>
        <div class="inner-wrap">
<?php endif; ?>

<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'foundation' ); ?></a>

	<?php
        if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' || !get_theme_mod( 'wpt_mobile_menu_layout' ) ) :
	        get_template_part( 'parts/off-canvas-menu' );
        endif;
        ?>

        <?php get_template_part( 'parts/top-bar' ); ?>

	<div id="content" class="site-content">

	<?php 
	$breadcrumb_forbidden_templates = Array('templates/featured-image.php', 'templates/hero.php');
	if (!in_array(get_page_template_slug(), $breadcrumb_forbidden_templates) &&  function_exists('yoast_breadcrumb') ):?>
                <div class="row">
                        <div class="columns small-12">
                                <?php yoast_breadcrumb('<div id="breadcrumbs" class="breadcrumbs">','</div>');?>
                        </div>
                </div>
	<?php endif;?>
