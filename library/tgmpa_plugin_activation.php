<?php
require_once(get_template_directory().'/theme_components/TGM-Plugin-Activation-develop/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'foundation_theme_register_required_plugins' );

if ( ! function_exists( 'foundation_theme_register_required_plugins' ) ) :
function foundation_theme_register_required_plugins() {
		/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
		array(
			'name'      => 'WP Foundation Shortcodes',
			'slug'      => 'wp-foundation-shortcodes',
			'required'  => false,
		),
	);

	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
endif;
