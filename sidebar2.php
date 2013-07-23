<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'techfak-2013' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'techfak-2013' ); ?>"><?php _e( 'Skip to content', 'techfak-2013' ); ?></a>
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</nav><!-- main navigation -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<!--<h3 class="sidebar-toggle"><?php _e( 'Additional Info', 'techfak-2013' ); ?></h3>-->
	    <div id="extra-sidebar" class="widget-area" role="complementary">
	        <?php dynamic_sidebar( 'sidebar-4' ); ?>
	    </div><!-- .extra-sidebar .widget-area -->
	<?php endif; // end extra sidebar widget area ?>