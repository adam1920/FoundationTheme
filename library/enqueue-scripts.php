<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

if ( ! function_exists( 'foundation_scripts' ) ) :
        function foundation_scripts() {

	// Deregister the jquery version bundled with WordPress.
        wp_deregister_script( 'jquery' );

	// Add custom fonts, used in the main stylesheet.
        wp_enqueue_style( 'foundation-fonts', foundation_fonts_url(), array(), null );

	// font awesome
	wp_register_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', array(),  '4.4.0', 'all' ) ;
        wp_enqueue_style( 'font-awesome' );

        // Enqueue the main Stylesheet.
        wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/stylesheets/app.css' );

	// Load our main stylesheet.
        wp_enqueue_style( 'foundation-style', get_stylesheet_uri() );

        // Modernizr is used for polyfills and feature detection. Must be placed in header. (Not required).
        wp_register_script( 'modernizr', get_template_directory_uri() . '/bower_components/foundation/js/vendor/modernizr.js', array(), '2.8.3', false );

        // Fastclick removes the 300ms delay on click events in mobile environments. Must be placed in header. (Not required).
        wp_register_script( 'fastclick', get_template_directory_uri() . '/bower_components/foundation/js/vendor/fastclick.js', array(), '1.0.0', false );
	
	// jQuery
        wp_register_script( 'jquery', get_template_directory_uri().'/bower_components/jquery/dist/jquery.min.js', array(), '2.1.4', false );

	// foundation framework main js
        wp_register_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation/js/foundation.min.js', array('jquery'), '5.5.2', true );

	// TO DO
	wp_register_script( 'foundation-app', get_template_directory_uri() . '/js/app.min.js', array('jquery'), '5.5.2', true );

        // Enqueue all registered scripts.
        wp_enqueue_script( 'modernizr' );
        wp_enqueue_script( 'fastclick' );
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'foundation' );
        wp_enqueue_script( 'foundation-app' );
        }

        add_action( 'wp_enqueue_scripts', 'foundation_scripts' );
endif;

if ( ! function_exists( 'foundation_fonts_url' ) ) :
/**
 * Register Google fonts for Foundation Theme.
 *
 * @since Foundation Theme 0.5
 *
 * @return string Google fonts URL for the theme.
 */
function foundation_fonts_url() {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        /*
         * Translators: If there are characters in your language that are not supported
         * by Noto Sans, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Noto Sans font: on or off', FOUNDATION_THEME_DOMAIN ) ) {
                $fonts[] = 'Noto Sans:400italic,700italic,400,700';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Noto Serif, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Noto Serif font: on or off', FOUNDATION_THEME_DOMAIN ) ) {
                $fonts[] = 'Noto Serif:400italic,700italic,400,700';
        }

        /*
         * Translators: If there are characters in your language that are not supported
         * by Inconsolata, translate this to 'off'. Do not translate into your own language.
         */
        if ( 'off' !== _x( 'on', 'Inconsolata font: on or off', FOUNDATION_THEME_DOMAIN ) ) {
                $fonts[] = 'Inconsolata:400,700';
        }

        /*
         * Translators: To add an additional character subset specific to your language,
         * translate this to 'greek', 'cyrillic', 'devanagari' or 'vietnamese'. Do not translate into your own language.
         */
        $subset = _x( 'no-subset', 'Add new subset (greek, cyrillic, devanagari, vietnamese)', FOUNDATION_THEME_DOMAIN );

        if ( 'cyrillic' == $subset ) {
                $subsets .= ',cyrillic,cyrillic-ext';
        } elseif ( 'greek' == $subset ) {
                $subsets .= ',greek,greek-ext';
        } elseif ( 'devanagari' == $subset ) {
                $subsets .= ',devanagari'; 
        } elseif ( 'vietnamese' == $subset ) {
                $subsets .= ',vietnamese'; 
        }

        if ( $fonts ) {
                $fonts_url = add_query_arg( array(
                        'family' => urlencode( implode( '|', $fonts ) ),
                        'subset' => urlencode( $subsets ),
                ), 'https://fonts.googleapis.com/css' );
        }

        return $fonts_url;
}
endif;

