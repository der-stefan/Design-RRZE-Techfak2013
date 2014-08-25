<?php
global $options;
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
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
		    <?php $header_image = get_header_image();
				if (!empty($header_image)) : ?>
					<div id="kopf" style="background-image:url(<?php echo esc_url($header_image); ?>">  <!-- begin: kopf -->
				<?php else : ?>
					<div id="kopf">  <!-- begin: kopf -->
				<?php endif; ?>

			<div id="logo">

				<?php if (!is_home()) { ?>
    				<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="logo">
				<?php } ?>

						<?php $logo = get_theme_mod( 'tf2013_custom_logo' );
						list($logo_width, $logo_height) = getimagesize($logo);
							if (!empty($logo)) :
						?>
    					    <img src="<?php echo esc_url($logo); ?>" class="logo" width="<?php echo $logo_width; ?>" height="<?php echo $logo_height; ?>" alt="" />
    					<?php endif; ?>

				<?php if (!is_home()) { ?>
    				</a>
				<?php } ?>

    					<p>

							<?php if (!is_home()) { ?>
								<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="logo">
							<?php } ?>

								<?php bloginfo('name'); ?>
									<span class="description"><?php bloginfo('description'); ?></span>

							<?php if (!is_home()) { ?>
								</a>
							<?php } ?>
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
	'show_home' => $options['text-startseite']));
    ?>
    			    </ul>

<?php } ?>
			</div>

		    <?php
		    if (is_active_sidebar('kurzinfo-area')) { ?>

			<div id="kurzinfo">
			    <?php dynamic_sidebar('kurzinfo-area'); ?>
			</div>

 <?php } ?>

		    </div>  <!-- end: menu -->


<?php get_sidebar(); ?>

		    <div id="content">  <!-- begin: content -->
			<a name="contentmarke" id="contentmarke"></a>