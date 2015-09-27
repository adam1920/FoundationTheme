<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

$class_var = ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' || !get_theme_mod( 'wpt_mobile_menu_layout' ) ) ? 'hide-for-small-only' : '' ;
?>
<div class="top-bar-container contain-to-grid <?php echo $class_var;?>">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area top-bar-<?php echo apply_filters( 'filter_mobile_nav_position', 'mobile_nav_position' ); ?>">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
            <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
        </ul>
        <section class="top-bar-section">
            <?php foundation_top_bar_l(); ?>
            <?php foundation_top_bar_r(); ?>
        </section>
    </nav>
</div>
