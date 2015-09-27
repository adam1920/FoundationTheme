<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>
<div id="secondary" class="secondary small-12 large-4 columns">

	<?php if ( is_active_sidebar( 'sidebar-widgets' ) ) : ?>
		<div id="widget-area" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

</div><!-- .secondary -->

