<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

if ( ! function_exists( 'foundation_sidebar_widgets' ) ) :
function foundation_sidebar_widgets() {
        register_sidebar(array(
          'id' => 'sidebar-widgets',
          'name' => __( 'Sidebar widgets', FOUNDATION_THEME_DOMAIN ),
          'description' => __( 'Drag widgets to this sidebar container.', FOUNDATION_THEME_DOMAIN ),
          'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
          'after_widget' => '</div></article>',
          'before_title' => '<h6>',
          'after_title' => '</h6>',
        ));

        register_sidebar(array(
          'id' => 'footer-widgets',
          'name' => __( 'Footer widgets', FOUNDATION_THEME_DOMAIN ),
          'description' => __( 'Drag widgets to this footer container', FOUNDATION_THEME_DOMAIN ),
          'before_widget' => '<article id="%1$s" class="medium-4 columns widget %2$s">',
          'after_widget' => '</article>',
          'before_title' => '<h6>',
          'after_title' => '</h6>',
        ));
}

add_action( 'widgets_init', 'foundation_sidebar_widgets' );
endif;

