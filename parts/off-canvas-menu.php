<?php
/**
 * Template part for off canvas menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */


// ini
$mobile_nav_position = (get_theme_mod( 'wpt_mobile_menu_position' )) ? get_theme_mod( 'wpt_mobile_menu_position' ) : 'left';
?>
<div class="show-for-small-only">
<nav class="tab-bar">
  <section class="<?php echo $mobile_nav_position; ?>-small">
    <a class="<?php echo $mobile_nav_position; ?>-off-canvas-toggle menu-icon" href="#"><span></span></a>
  </section>
  <section class="middle tab-bar-section">

    <h1 class="title">
      <?php bloginfo( 'name' ); ?>
    </h1>

  </section>
</nav>

<aside class="<?php echo $mobile_nav_position; ?>-off-canvas-menu" aria-hidden="true">
    <?php foundation_mobile_off_canvas(); ?>
</aside>
</div>
