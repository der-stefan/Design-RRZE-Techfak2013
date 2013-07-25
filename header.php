<?php
global $options;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
		<div class="header-image">
		    
			<?php if ( ! is_home() ) { ?>
                            <a href="<?php echo home_url( '/' ); ?>" title="<?php echo $defaultoptions['default_text_title_home_backlink']; ?>" rel="home" class="logo">
                            <?php } ?>                                                             
                                <h1><img src="<?php header_image(); ?>" alt="<?php bloginfo( 'name' ); ?>"></h1>
                            <?php                                
                            if ( ! is_home() ) { ?> </a>  <?php } ?>

		</div>
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>
	</header><!-- #masthead -->

	<?php 
	if ( has_nav_menu( 'tecmenue' ) ) {
	    echo '<nav id="tec-menue" class="tec-menue" role="navigation">';
		wp_nav_menu( array( 'theme_location' => 'tecmenue', 'fallback_cb' => '','depth' => 1  ) );     
	    echo '</nav><!-- #tec-navigation -->';
         }  
	if ( has_nav_menu( 'targetmenue' ) ) { ?>
	    <nav id="zielgruppen-menue" class="zielgruppen-menue" role="navigation">
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'techfak-2013' ); ?>"><?php _e( 'Skip to content', 'techfak-2013' ); ?></a>
		<?php wp_nav_menu( array( 'theme_location' => 'targetmenue', 'fallback_cb' => '', 'depth' => 1 ) );?>
	    </nav><!-- #target-navigation -->
         <?php }  
	 
	 if ($options['aktiv_menueselectlist']) { ?>			
	
	
	<nav id="zielgruppen-menue-select" class="zielgruppen-menue-select" role="navigation">
		<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'techfak-2013' ); ?>"><?php _e( 'Skip to content', 'techfak-2013' ); ?></a>
		<?php wp_nav_menu(    array( 
                            'show_description' => false,
                            'menu' => 'targetmenue', 
                            'items_wrap'     => '<select id="drop-nav"><option value="">Informationen f&uuml;r...</option>%3$s</select>',
                            'container' => false,
                            'walker'  => new Walker_Nav_Menu_Dropdown(),
                            'theme_location' => 'targetmenue'));  ?>
	</nav><!-- #target-navigation -->
	 <?php } ?>
	
	<div id="main" class="wrapper">