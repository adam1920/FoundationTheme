<?php
/**
 * Register theme support for languages, menus, post-thumbnails, post-formats etc.
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

if ( ! function_exists( 'foundation_theme_support' ) ) :
function foundation_theme_support() {
	// Add language support
	load_theme_textdomain( 'foundation', get_template_directory() . '/languages' );

	// Add menu support
	add_theme_support( 'menus' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
	add_theme_support( 'post-thumbnails' );

	// RSS thingy
	add_theme_support( 'automatic-feed-links' );

	// Add post formarts support: http://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') );

	/*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
                'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
        ) );

	// Setup the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'foundation_custom_background_args', array(
                'default-color'      => 'ffffff',
                'default-attachment' => 'fixed',
        ) ) );
}

add_action( 'after_setup_theme', 'foundation_theme_support' );
endif;
?>
