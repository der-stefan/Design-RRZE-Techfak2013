<?php
global $options;
global $defaultoptions;
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title('|', true, 'right'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>  <!-- begin: body -->
	<script type="text/javascript">var b=document.body.clientWidth;</script>
	<div class="page_margins">  <!-- begin: page_margins -->
	    <div id="seite" class="page">  <!-- begin: seite -->
		<a name="seitenmarke" id="seitenmarke"></a>

		<header>
		    <div id="kopf" <?php if (!empty(get_header_image())) : ?>  style="background-image: url(<?php header_image(); ?>)" <?php endif; ?>>  <!-- begin: kopf -->
			<div id="logo">

			    <?php if (!is_home()) { ?>
    				<a href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home" class="logo">
				    <?php } ?>

				    <img border="0" src="<?php print (!empty($options['logo']) ? esc_url($options['logo']) : esc_url($defaultoptions['logo'])); ?>" alt="Logo">

					<div class="site-name" style="color:#<?php echo esc_attr(get_header_textcolor()); ?>">
						<?php bloginfo('name'); ?>
						<span class="description"><?php echo html_entity_decode(get_bloginfo('description')); ?></span>
					</div>


				<?php if (!is_home()) { ?>
    				</a>
<?php } ?>

			</div>

<?php //get_search_form(); ?>

		<!-- <div id="titel">
			    <h1><?php tf2013_contenttitle(); ?></h1>
			</div> -->

			<div id="breadcrumb">
			    <h2><?php _e('Sie befinden sich hier:', 'tf2013') ?> </h2>
			    <p>
<?php if (function_exists('tf2013_breadcrumbs')) tf2013_breadcrumbs(); ?>
			    </p>
			</div>

			<div id="lang_selector">
			    <p><?php
				global $q_config;
				$flag_location=qtranxf_flag_location();
				if(!isset($url)){$url="";}
				foreach(qtranxf_getSortedLanguages() as $language) {
					echo "<a href=\"".qtranxf_convertURL($url, $language, false, true)."\"><img src=\"".$flag_location.$q_config['flag'][$language]."\" title=\"".$language."\" /></a>";
				}
				?> </p>
			</div>

			<div id="sprungmarken">
			    <h2>Sprungmarken</h2>
			    <ul>
				<li class="first"><a href="#contentmarke">Zum Inhalt springen</a><span class="skip">. </span></li>
				<li><a href="#bereichsmenumarke">Zur Navigation springen</a><span class="skip">. </span></li>
				<li class="last"><a href="#hilfemarke">Zu den allgemeinen Informationen springen</a><span class="skip">. </span></li>
			    </ul>
			</div>

			<!--<div id="hauptmenu" class="zielgruppen-menue" role="navigation">
			    <?php if (has_nav_menu('targetmenu')) { ?>
					<h2 class="skip"><a id="hauptmenumarke" name="hauptmenumarke"></a>Zielgruppennavigation</h2>
					<?php
					wp_nav_menu(array('theme_location' => 'targetmenu', 'fallback_cb' => '', 'depth' => 1));
				 }?>
			</div>--><!-- #target-navigation -->
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
<div id="logos">
	<a href="https://uni-erlangen.de" title="Friedrich-Alexander-Universität Erlangen-Nürnberg"><img src="<?php echo home_url('/'); ?>graphics/FAU_logo.png"></a>
	<!--<a href="https://uni-erlangen.de"><img src="<?php echo home_url('/'); ?>graphics/fau-logo-transparent.gif"></a>-->
	<a href="https://techfak.uni-erlangen.de" title="<?php echo __("[:de]Technische Fakult&auml;t[:en]Faculty of Engineering[:]"); ?>"><img src="<?php echo home_url('/'); ?>graphics/logo-techfak-blau.png"></a>
	<a href="https://eei.uni-erlangen.de" title="<?php echo __("[:de]Department Elektrotechnik, Elektronik und Informationstechnik[:en]Department of Electrical, Electronic and Communication Engineering[:]"); ?>"><img src="<?php echo home_url('/'); ?>graphics/eei_logo.png"></a>
	<a href="https://www.studon.uni-erlangen.de/cat15404.html" title="<?php echo __("[:de]Lernplattform StudOn[:en]Learning platform StudOn[:]"); ?>"><img src="<?php echo home_url('/'); ?>graphics/studon_logo.png"></a>
</div>
			</div>

		    <?php
		    if (is_active_sidebar('kurzinfo-area')) {
				dynamic_sidebar('kurzinfo-area');
		    } ?>

		    </div>  <!-- end: menu -->


<?php get_sidebar(); ?>

		    <div id="content">  <!-- begin: content -->
			<a name="contentmarke" id="contentmarke"></a>

			<div id="titel">
			    <h1><?php tf2013_contenttitle(); ?></h1>
			</div>

