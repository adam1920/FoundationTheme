<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationTheme
 * @since Foundation Theme 0.5.0
 */
?>
	</div><!-- .site-content -->

	<div id='layout_footer'></div>
</div><!-- .site -->
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-wrapper">
			<div class="row">
                        	<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<div class="medium-4 columns">
					<nav id="footer-navigation" class="footer-navigation" role="navigation">
						<?php foundation_footer_menu();?>
					</nav><!-- /.footer-navigation -->
				</div>
				<div class="medium-4 columns">
					<nav id="social-navigation" class="social-navigation" role="navigation">
	                                        <?php foundation_social_links_menu();?>
					</nav><!-- /.social-navigation -->
                                </div>
			</div>
			<div class="site-info row">
				<div class="small-6 columns text-left">
					<?php do_action( 'foundation_credits' ); ?>
				</div>
				<div class="small-6 columns text-right">
					<?php _e( 'Proudly powered by', FOUNDATION_THEME_DOMAIN ) ?> <a href="https://wordpress.org/">WordPress</a> & <a href="http://www.zurb.com">ZURB</a>
				</div>
			</div><!-- .site-info -->
		</div><!-- /.footer-wrapper -->
	</footer><!-- .site-footer -->


<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
        </div>
</div>
<?php endif; ?>

<a href="#0" class="cd-top"><?php _e('Top', FOUNDATION_THEME_DOMAIN); ?></a>

<?php wp_footer(); ?>

</body>
</html>
