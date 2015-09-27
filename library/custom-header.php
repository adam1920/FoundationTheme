<?php
/**
 * Custom Header functionality for Twenty Fifteen
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses foundation_header_style()
 */
function foundation_custom_header_setup() {
	/**
	 * Filter Twenty Fifteen custom-header support arguments.
	 *
	 * @since Twenty Fifteen 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'foundation_custom_header_args', array(
		'min-width'		=> 2000,
		'width'			=> 2000,
		'height'                => 450,
		'flex-width'		=> true,
		'flex-height'    	=> true,
		'default-text-color'  => 'ffffff',
		'default-image' 	=> '', //get_template_directory_uri().'/images/header.png',
		'wp-head-callback'      => 'foundation_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'foundation_custom_header_setup' );

if ( ! function_exists( 'foundation_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @since Twenty Fifteen 1.0
 *
 * @see foundation_custom_header_setup()
 */
function foundation_header_style() {
	$header_image = get_header_image();

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && ! display_header_text() ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style type="text/css" id="foundation-header-css">
	<?php
		// Has a Custom Header been added?
		if ( ! empty( $header_image ) ) :
	?>
		#homepage-hero {

			/*
			 * No shorthand so the Customizer can override individual properties.
			 * @see https://core.trac.wordpress.org/ticket/31460
			 */
			background-image: url(<?php header_image(); ?>);
		}
		<?php endif; ?>
		
		<?php
                // Has the text been hidden?
                if ( ! display_header_text() ) :
	        ?>
			.site-branding{
				position: absolute;
        	                clip: rect(1px 1px 1px 1px); /* IE7 */
	                        clip: rect(1px, 1px, 1px, 1px);
			}
		<?php
                // If the user has set a custom color for the text, use that.
                else : ?>
	                .site-branding, .site-branding a{
        	                color:#<?php echo get_header_textcolor(); ?>;
                	}
        	<?php endif; ?>
	</style>
	<?php
}
endif; // foundation_header_style

