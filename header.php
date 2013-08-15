<?php
global $options;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
<<<<<<< HEAD
    <head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>  <!-- begin: body -->
	<div class="page_margins">  <!-- begin: page_margins -->
	    <div id="seite" class="page">  <!-- begin: seite -->
		<a name="seitenmarke" id="seitenmarke"></a>

		<header>
		    <div id="kopf">  <!-- begin: kopf -->   
			<div id="logo">

			    <?php if (!is_home()) { ?>
    				<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="logo">
				    <?php } ?>
				    
				    <?php $header_image = get_header_image();
				    if (!empty($header_image)) :
					?>
    				    <img src="<?php echo esc_url($header_image); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" />
<?php endif; ?>

				    <p>
					<?php bloginfo('name'); ?>
					<span class="description"><?php bloginfo('description'); ?></span>
				    </p>

				<?php if (!is_home()) { ?> 
    				</a>  
<?php } ?>	
			 
			</div>

<?php get_search_form(); ?>

			<div id="titel">
			    <h1><?php tf2013_contenttitle(); ?></h1>
			</div>

			<div id="breadcrumb">
			    <h2>Sie befinden sich hier: </h2>
			    <p>
<?php if (function_exists('tf2013_breadcrumbs')) tf2013_breadcrumbs(); ?>
			    </p>
			</div>

			<div id="sprungmarken">
			    <h2>Sprungmarken</h2>
			    <ul>
				<li class="first"><a href="#contentmarke">Zum Inhalt springen</a><span class="skip">. </span></li>
				<li><a href="#bereichsmenumarke">Zur Navigation springen</a><span class="skip">. </span></li>		
				<li class="last"><a href="#hilfemarke">Zu den allgemeinen Informationen springen</a><span class="skip">. </span></li>            
			    </ul>
			</div>

			<div id="hauptmenu" class="zielgruppen-menue" role="navigation">
			    <h2 class="skip"><a id="hauptmenumarke" name="hauptmenumarke"></a>Zielgruppennavigation</h2>    
			    <?php
			    if (has_nav_menu('targetmenu')) {
				wp_nav_menu(array('theme_location' => 'targetmenu', 'fallback_cb' => '', 'depth' => 1));
			    }
			    ?> 	  
			</div><!-- #target-navigation -->
		    </div>
		</header>  <!-- end: kopf -->

		<hr id="nachkopf" />  

		<div id="main">  <!-- begin: main -->

		    <div id="menu">  <!-- begin: menu -->	  
			<div id="bereichsmenu">
			    <h2><a name="bereichsmenumarke" id="bereichsmenumarke">Navigation</a></h2>
			    <?php
			    if (has_nav_menu('primary')) {
				wp_nav_menu(array('container' => 'ul', 'menu_class' => 'menu',
				    'menu_id' => 'navigation', 'theme_location' => 'primary', 'walker' => ''));
			    } else {
				?>
    			    <ul id="navigation" class="menu">      
    <?php
    wp_page_menu(array(
	'sort_column' => 'menu_order, post_title',
	'echo' => 1,
	'show_home' => 1));
    ?>          
    			    </ul>

<?php } ?>
			</div>

		    <?php
		    if (is_active_sidebar('kurzinfo-area')) {
			dynamic_sidebar('kurzinfo-area');
		    }
		    ?>

		    </div>  <!-- end: menu -->


<?php get_sidebar(); ?>

		    <div id="content">  <!-- begin: content -->
			<a name="contentmarke" id="contentmarke"></a>
=======
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
>>>>>>> 096653a11a5c6404753e0415ab2a83cf81ffefa4
