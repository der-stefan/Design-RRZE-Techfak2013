<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	
	<footer>
	
		<nav id="tec-menue-bottom" class="tec-menue-bottom" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'tecmenue', 'fallback_cb' => '' ) );?>
		</nav><!-- #tec-navigation -->
	
		<?php if ( is_active_sidebar( 'sidebar-5' ) ) : ?>
			<?php dynamic_sidebar( 'sidebar-5' ); ?><!-- .zusatzinfo .widget-area -->
		<?php endif; // end extra sidebar widget area ?>
	</footer><!-- #colophon -->
	
	
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
