<?php
/**
 * Foundation Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
*/

/** Required for Foundation to work properly */
require_once(get_template_directory().'/library/foundation.php' );

/** Register all navigation menus */
require_once(get_template_directory().'/library/navigation.php' );

/** Add desktop menu walker */
require_once(get_template_directory(). '/library/menu-walker.php' );

/** Add off-canvas menu walker */
require_once(get_template_directory(). '/library/offcanvas-walker.php' );

/** Custom template tags for this theme */
require_once(get_template_directory() .'/library/template-tags.php');

/** Create widget areas in sidebar and footer */
require_once(get_template_directory().'/library/widget-areas.php');

/** Enqueue scripts */
require_once(get_template_directory().'/library/enqueue-scripts.php');

/** Add theme support */
require_once(get_template_directory(). '/library/theme-support.php' );

/** Implement the Custom Header feature  */
require_once(get_template_directory() . '/library/custom-header.php');


/** Add protocol relative theme assets */
require_once(get_template_directory().'/library/protocol-relative-theme-assets.php' );

/** Add Nav Options to Customer */
require_once( get_template_directory().'/library/custom-nav.php' );

/** Add Custom Actions */
require_once(get_template_directory().'/library/custom-actions.php' );

/** Add Custom Shortcodes */
require_once(get_template_directory().'/library/custom-shortcodes.php' );

/** Add Posts Navigation */
require_once(get_template_directory().'/library/posts_navigation.php' );

/** Mimes upload */
require_once(get_template_directory().'/library/mimes_upload.php' );

