<?php
/**
 * Foundation PHP template
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */

if ( ! isset( $content_width ) ) {
        $content_width = 660;
}

// Pagination.
if ( ! function_exists( 'foundation_pagination' ) ) :
function foundation_pagination() {
        global $wp_query;

        $big = 999999999; // This needs to be an unlikely integer

        // For more options and info view the docs for paginate_links()
        // http://codex.wordpress.org/Function_Reference/paginate_links
        $paginate_links = paginate_links( array(
                'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
                'current' => max( 1, get_query_var( 'paged' ) ),
                'total' => $wp_query->max_num_pages,
                'mid_size' => 5,
                'prev_next' => true,
            	'prev_text' => __( '&laquo;', 'foundation' ),
            	'next_text' => __( '&raquo;', 'foundation' ),
                'type' => 'list',
        ) );

        $paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
        $paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
        $paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
        $paginate_links = str_replace( '</span>', '</a>', $paginate_links );
        $paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
        $paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );

        // Display the pagination if more than one page is found.
        if ( $paginate_links ) {
                echo '<div class="pagination-centered">';
                echo $paginate_links;
                echo '</div><!--/.pagination -->';
        }
}
endif;

/**
 * Add a `screen-reader-text` class to the search form's submit button.
 *
 * @since Foundation Theme 0.5.0
 *
 * @param string $html Search form HTML.
 * @return string Modified search form HTML.
 */
function foundation_search_form_modify( $html ) {
        return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', 'foundation_search_form_modify' );

