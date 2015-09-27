<?php
/**
 * Add featured image as background image to post navigation elements.
 *
 * @since Foundation Theme 0.5.0
 *
 * @see wp_add_inline_style()
 */
function foundation_post_nav_background() {
        if ( ! is_single() ) {
                return;
        }

        $previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );
        $css      = '';

        if ( is_attachment() && 'attachment' == $previous->post_type ) {
                return;
        }


        if ( $previous &&  has_post_thumbnail( $previous->ID ) ) {
                $prevthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $previous->ID ), 'post-thumbnail' );
                $css .= '
                        .post-navigation .nav-previous { background-image: url(' . esc_url( $prevthumb[0] ) . '); }
                        .post-navigation .nav-previous .post-title, .post-navigation .nav-previous a:hover .post-title, .post-navigation .nav-previous .meta-nav { color: #fff; }
                        .post-navigation .nav-previous a:before { background-color: rgba(0, 0, 0, 0.4); }
                ';
        }

        if ( $next && has_post_thumbnail( $next->ID ) ) {
                $nextthumb = wp_get_attachment_image_src( get_post_thumbnail_id( $next->ID ), 'post-thumbnail' );
                $css .= '
                        .post-navigation .nav-next { background-image: url(' . esc_url( $nextthumb[0] ) . '); border-top: 0; }
                        .post-navigation .nav-next .post-title, .post-navigation .nav-next a:hover .post-title, .post-navigation .nav-next .meta-nav { color: #fff; }
                        .post-navigation .nav-next a:before { background-color: rgba(0, 0, 0, 0.4); }
                ';
        }

        wp_add_inline_style( 'main-stylesheet', $css );
}
add_action( 'wp_enqueue_scripts', 'foundation_post_nav_background' );

