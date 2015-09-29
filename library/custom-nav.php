<?php
/**
 * Allow users to select Topbar or Offcanvas menu. Adds body class of offcanvas or topbar based on which they choose.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'wpt_register_theme_customizer' ) ) :
function wpt_register_theme_customizer( $wp_customize ) {
	// Create custom panels
	$wp_customize->add_panel( 'mobile_menu_settings', array(
	  'priority' => 1000,
	  'theme_supports' => '',
	  'title' => __( 'Mobile Menu Settings', 'foundation' ),
	  'description' => __( 'Controls the mobile menu', 'foundation' ),
	) );

	// Create custom field for mobile navigation layout
	$wp_customize->add_section( 'mobile_menu_layout' , array(
		'title'	=> __('Mobile navigation layout','foundation'),
		'panel' => 'mobile_menu_settings',
		'priority' => 1000,
	));

	// Create custom field for mobile navigation position
	$wp_customize->add_section( 'mobile_menu_position' , array(
		'title'	=> __('Mobile navigation position','foundation'),
		'panel' => 'mobile_menu_settings',
		'priority' => 1001,
	));

	// Set default navigation layout
	$wp_customize->add_setting(
		'wpt_mobile_menu_layout',
		array(
			'default'	=> 'offcanvas',
			'sanitize_callback' => 'foundation_sanitize_navigation_mobile_layout',
	                'transport'         => 'postMessage',
		)
	);

	// Set default navigation position
	$wp_customize->add_setting(
		'wpt_mobile_menu_position',
		array(
			'default'	=> 'left',
			'sanitize_callback' => 'foundation_sanitize_navigation_mobile_position',
	                'transport'         => 'postMessage',
		)
	);

	// Add options for navigation layout
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mobile_menu_layout',
			array(
				'type'		=> 'radio',
				'section' 	=> 'mobile_menu_layout',
				'settings' 	=> 'wpt_mobile_menu_layout',
		        	'choices' => array(
		            		'offcanvas' => 'Offcanvas',
		            		'topbar' => 'Topbar',
		        	),
			)
		)
	);

	// Add options for navigation position
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'mobile_menu_position',
			array(
				'type'		=> 'radio',
				'section' 	=> 'mobile_menu_position',
				'settings' 	=> 'wpt_mobile_menu_position',
		        	'choices' => array(
		            		'left' => 'left',
		            		'right' => 'right',
		        	),
			)
		)
	);
}

add_action( 'customize_register', 'wpt_register_theme_customizer' );

// Return the mobile nav position
add_filter( 'filter_mobile_nav_position', 'mobile_nav_position' );
function mobile_nav_position( $position ) {
	if ( get_theme_mod( 'wpt_mobile_menu_position' ) == 'right' ) :
		$position = 'right';
	else:
		$position = 'left';
	endif;
	return $position;
}

// Add class to body to help w/ CSS
add_filter( 'body_class', 'mobile_nav_class' );
function mobile_nav_class( $classes ) {
	if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'topbar' ) :
		$classes[] = 'topbar';
	else:
		$classes[] = 'offcanvas';
	endif;
	return $classes;
}
endif;

if ( ! function_exists( 'foundation_sanitize_navigation_mobile_layout' ) ) :
/**
 * Sanitization callback for mobile layout.
 *
 * @since Foundation Theme 0.5.0
 *
 * @return string Layout name
 */
function foundation_sanitize_navigation_mobile_layout( $value ) {
        $choises = Array('offcanvas', 'topbar');

        if ( ! array_key_exists( $value, $choises ) ) {
                $value = 'offcanvas';
        }
        return $value;
}
endif; // foundation_sanitize_navigation_mobile_layout


if ( ! function_exists( 'foundation_sanitize_navigation_mobile_position' ) ) :
/**
 * Sanitization callback for mobile position
 *
 * @since Foundation Theme 0.5.0
 *
 * @return string Position name
 */
function foundation_sanitize_navigation_mobile_position( $value ) {
        $choises = Array('left', 'right');

        if ( ! array_key_exists( $value, $choises ) ) {
                $value = 'left';
        }
        return $value;
}
endif; // foundation_sanitize_navigation_mobile_position


