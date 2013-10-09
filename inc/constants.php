<?php

/**
 * TF2013  Constants
 *
 * */
$defaultoptions = array(
    'js-version' => '1.1',
    'default-color' => 'e6e6e6',
    'thumbnail-width' => 624,
    'thumbnail-height' => 9999,
    'content-width' => 625,
    'src_basemod_zusatzinfo' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_zusatzinfo.css',
    'aktiv-basemod_zusatzinfo' => 1,
    'src_basemod_links' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_links.css',
    'aktiv-basemod_links' => 1,
    'src_basemod_sidebar' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_sidebar.css',
    'aktiv-basemod_sidebar' => 1,
    'farbvarianten' => ' ',
    'src_basemod_gelb' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_gelb.css',
    'src_basemod_orange' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_orange.css',
    'src_basemod_rot' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_rot.css',
    'src_basemod_gruen' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_gruen.css',
    'src_basemod_hellblau' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_hellblau.css',
    'src_basemod_studium-berufspadagogik-technik' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-berufspadagogik-technik.css',
    'src_basemod_studium-cbi' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-cbi.css',
    'src_basemod_studium-ce' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-ce.css',
    'src_basemod_studium-cen' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-cen.css',
    'src_basemod_studium-cme' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-cme.css',
    'src_basemod_studium-eei' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-eei.css',
    'src_basemod_studium-et' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-et.css',
    'src_basemod_studium-informatik' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-informatik.css',
    'src_basemod_studium-ip' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-ip.css',
    'src_basemod_studium-ipm' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-ipm.css',
    'src_basemod_studium-iuk' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-iuk.css',
    'src_basemod_studium-lehramt-informatik' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-lehramt-informatik.css',
    'src_basemod_studium-lse' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-lse.css',
    'src_basemod_studium-mb' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-mb.css',
    'src_basemod_studium-mechatronik' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-mechatronik.css',
    'src_basemod_studium-medizintechnik' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-medizintechnik.css',
    'src_basemod_studium-nano' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-nano.css',
    'src_basemod_studium-win' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-win.css',
    'src_basemod_studium-wing' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-wing.css',
    'src_basemod_studium-ww' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_studium-ww.css',
    'src_socialmediabuttons' => get_template_directory_uri() . '/css/techfak-2013/screen/basemod_socialmediaicons.css',
    'aktiv-socialmediabuttons' => 1,
    'aktiv-autoren' => 1,
    'aktiv-commentreplylink' => 0,
    'default_comment_notes_before' => '<p class="comment-notes">' . __('Deine E-Mail-Adresse wird nicht ver&ouml;ffentlicht. Erforderliche Felder sind markiert <span class="required">*</span>', 'tf2013') . '</p>',
    'disclaimer_post' => '',
    'logo-width' => 170,
    'logo-height' => 106,
    'background-header-color' => 'ffffff',
    'background-header-image' => '',
    'login_errors' => 0,
    'src-breadcrumb-image' => get_template_directory_uri() . '/img/breadcrumbarrow.gif',
    'src-teaser-thumbnail_default' => '',
    'category-teaser' => 1,
    'category-num-article-fullwidth' => 10,
    'category-num-article-halfwidth' => 0,
    'category-teaser-maxlength' => 500,
    'category-teaser-titleup' => 1, /* Titles up */
    'category-teaser-datebox' => 0,
    /*
     * 1 = Thumbnail (or: first picture, first video, fallback picture),
     * 2 = First picture (or: thumbnail, first video, fallback picture),
     * 3 = First video (or: thumbnail, first picture, fallback picture),
     * 4 = First video (or: first picture, thumbnail, fallback picture),
     * 5 = Nothing */
    'category-teaser-floating' => 0,
    'category-teaser-dateline' => 0, /* 1 = show Date on line up of the text if no datebox */
    'category-teaser-maxlength-halfwidth' => 200,
    'category-teaser-titleup-halfwidth' => 1, /* Titles up */
    'category-teaser-datebox-halfwidth' => 1,
    'category-teaser-floating-halfwidth' => 1,
    'category-teaser-dateline-halfwidth' => 0, /* 1 = show Date on line up of the text if no datebox */

    'num-article-startpage-fullwidth' => 1,
    'num-article-startpage-halfwidth' => 4,
    'teaser-thumbnail_width' => 120,
    'teaser-thumbnail_height' => 120,
    'teaser-thumbnail_crop' => 0,
    'src-teaser-thumbnail_default' => get_template_directory_uri() . '/grafiken/techfak-2013/default-teaserthumb.gif',
    'teaser-thumbnail_fallback' => 1,
    'teaser-title-maxlength' => 50,
    'teaser-subtitle' => __('Topthema', 'tf2013'),
    'teaser-title-words' => 7,
    'teaser_maxlength' => 500,
    'teaser-titleup' => 1, /* Titles up */
    'teaser-datebox' => 0,
    'teaser-floating' => 0,
    'teaser-dateline' => 0, /* 1 = show Date on line up of the text if no datebox */
    'teaser-maxlength-halfwidth' => 200,
    'teaser-titleup-halfwidth' => 1, /* Titles up */
    'teaser-datebox-halfwidth' => 1,
    'teaser-floating-halfwidth' => 1,
    'teaser-dateline-halfwidth' => 0, /* 1 = show Date on line up of the text if no datebox */

    'text-startseite' => __('Startseite', 'tf2013'),
    'default_text_title_home_backlink' => __('Zur&uuml;ck zur Startseite', 'tf2013'),
    'default_footerlink_key' => 'Fakultaeten',
    'aktiv-buttons' => 1,
    'aktiv-button1' => 1,
    'url-button1' => '#',
    'title-button1' => 'Anmelden',
    'color-button1' => 'gruen',
    'aktiv-button2' => 0,
    'url-button2' => '#',
    'title-button2' => 'Newsletter',
    'color-button2' => 'gelb',
);


if (isset($options['aktiv-buttons']) && ($options['aktiv-buttons'] == 1)) {
    if (isset($options['aktiv-button1']) && ($options['aktiv-button1'] == 1)
	    && isset($options['url-button1'])) {
	echo '<div class="button breit ' . $options['color-button1'] . '">';
	echo '<a href="' . $options['url-button1'] . '">' . $options['title-button1'] . '</a></div>';
	echo "\n";
    }

    if (isset($options['aktiv-button2']) && ($options['aktiv-button2'] == 1)
	    && isset($options['url-button2'])) {
	echo '<div class="button breit ' . $options['color-button2'] . '">';
	echo '<a href="' . $options['url-button2'] . '">' . $options['title-button2'] . '</a></div>';
	echo "\n";
    }
}



/*
 * Liste Social Media
 */
$default_socialmedia_liste = array(
    'delicious' => array(
	'name' => 'Delicious',
	'content' => '',
	'active' => 0,
    ),
    'diaspora' => array(
	'name' => 'Diaspora',
	'content' => '',
	'active' => 0,
    ),
    'facebook' => array(
	'name' => 'Facebook',
	'content' => 'https://www.facebook.com/pages/Webkongress-Erlangen',
	'active' => 1,
    ),
    'twitter' => array(
	'name' => 'Twitter',
	'content' => 'https://twitter.com/#!/wke',
	'active' => 1,
    ),
    'gplus' => array(
	'name' => 'Google Plus',
	'content' => '',
	'active' => 1,
    ),
    'flattr' => array(
	'name' => 'Flattr',
	'content' => '',
	'active' => 0,
    ),
    'flickr' => array(
	'name' => 'Flickr',
	'content' => 'http://flickr.com/photos/tags/wke2010/',
	'active' => 0,
    ),
    'identica' => array(
	'name' => 'Identica',
	'content' => '',
	'active' => 0,
    ),
    'itunes' => array(
	'name' => 'iTunes',
	'content' => '',
	'active' => 0,
    ),
    'skype' => array(
	'name' => 'Skype',
	'content' => '',
	'active' => 0,
    ),
    'youtube' => array(
	'name' => 'YouTube',
	'content' => '',
	'active' => 1,
    ),
    'xing' => array(
	'name' => 'Xing',
	'content' => '',
	'active' => 0,
    ),
    'tumblr' => array(
	'name' => 'Tumblr',
	'content' => '',
	'active' => 1,
    ),
    'github' => array(
	'name' => 'GitHub',
	'content' => '',
	'active' => 0,
    ),
    'appnet' => array(
	'name' => 'App.Net',
	'content' => '',
	'active' => 0,
    ),
    'feed' => array(
	'name' => 'RSS Feed',
	'content' => get_bloginfo('rss2_url'),
	'active' => 1,
    ),
);

/*
 * Linkliste fuer Footer und Widgets
 */
$default_footerlink_liste = array(
    __('Fakultaeten', 'tf2013') => array(
	'title' => __('Friedrich-Alexander-Universit&auml;t Erlangen-N&uuml;rnberg', 'tf2013'),
	'url' => 'http://www.fau.de',
	'sublist' => array(
	    __('Philosophische Fakult&auml;t und Fachbereich Theologie', 'tf2013') => 'http://www.phil.faude/',
	    __('Rechts- und Wirtschaftswissenschaftliche Fakult&auml;t', 'tf2013') => 'http://www.rw.fau.de/',
	    __('Medizinische Fakult&auml;t', 'tf2013') => 'http://www.med.fau.de/',
	    __('Naturwissenschaftliche Fakult&auml;t', 'tf2013') => 'http://www.natfak.fau.de/',
	    __('Technische Fakult&auml;t', 'tf2013') => 'http://www.techfak.fau.de/',
	)
    ),
    __('RRZE', 'tf2013') => array(
	'title' => __('Regioanles Rechenzentrum Erlangen', 'tf2013'),
	'url' => 'http://www.rrze.fau.de',
	'sublist' => array(
	    __('Service-Theke', 'tf2013') => 'http://www.rrze.fau.de/hilfe/service-theke',
	    __('Informationszentrum Innenstadt', 'tf2013') => 'http://www.izi.rrze.fau.de/',
	    __('Informationszentrum N&uuml;rnberg', 'tf2013') => 'http://www.zzn.rrze.fau.de/',
	    __('Informationszentrum Halbmondstrasse', 'tf2013') => 'http://www.izh.rrze.fau.de/',
	    __('Blogdienst', 'tf2013') => 'http://blogs.fau.de/',
	    __('Videoportal', 'tf2013') => 'http://video.fau.de/',
	    __('IDM', 'tf2013') => 'https://www.idm.fau.de/',
	    __('Aktuelle Meldungen', 'tf2013') => 'http://blogs.fau.de/rrze/',
	)
    ),
);



/*
 * Definition welche Konstanten als Optionen im Backend geaendert werden koennen
 */


$setoptions = array(
    'tf2013_theme_options' => array(
	'design' => array(
	    'tabtitle' => __('Design', 'tf2013'),
	    'fields' => array(
		'aktiv-basemod_sidebar' => array(
		    'type' => 'bool',
		    'title' => __('Sidebar', 'tf2013'),
		    'label' => __('Sidebar rechts anzeigen', 'tf2013'),
		    'default' => $defaultoptions['aktiv-basemod_sidebar'],
		),
		'aktiv-basemod_zusatzinfo' => array(
		    'type' => 'bool',
		    'title' => __('Zusatzinfo', 'tf2013'),
		    'label' => __('Zusatzinfo anzeigen', 'tf2013'),
		    'default' => $defaultoptions['aktiv-basemod_zusatzinfo'],
		),
		'aktiv-basemod_links' => array(
		    'type' => 'bool',
		    'title' => __('Linkicons', 'tf2013'),
		    'label' => __('Automatische Linkicons aktivieren', 'tf2013'),
		    'default' => $defaultoptions['aktiv-basemod_links'],
		),
		'farbvarianten' => array(
		    'type' => 'select',
		    'title' => __('Farbvarianten', 'tf2013'),
		    'label' => __('Farbschema der Webseite auswählen', 'tf2013'),
		    'default' => $defaultoptions['farbvarianten'],
		    'liste' => array(
			' ' => 'Standard Techfak (dunkelblau)',
			'basemod_gelb' => 'Department EEI (gelb)',
			'basemod_orange' => 'Department CBI (orange)',
			'basemod_rot' => 'Department WW (rot)',
			'basemod_gruen' => 'Department MB (grün)',
			'basemod_hellblau' => 'Department INF (blau)',
			'basemod_studium-berufspaedagogik-technik' => 'Studium Berufspädagogik Technik',
			'basemod_studium-cbi' => 'Studium Chemie- und Bioingenieurwesen',
			'basemod_studium-ce' => 'Studium Chemical Engeneering',
			'basemod_studium-cen' => 'Studium Computational Engineering',
			'basemod_studium-cme' => 'Studium Communication and Multimedia Engineering',
			'basemod_studium-eei' => 'Studium Elektrotechnik-Elektronik-Informationstechnik',
			'basemod_studium-et' => 'Studium Energietechnik',
			'basemod_studium-informatik' => 'Studium Informatik',
			'basemod_studium-ip' => 'Studium International Production Engineering and Management',
			'basemod_studium-ipm' => 'Studium Internationales Projektmanagement im Großanlagenbau',
			'basemod_studium-iuk' => 'Studium Informations- und Kommunikationstechnik',
			'basemod_studium-lehramt-informatik' => 'Studium Lehramt Informatik',
			'basemod_studium-lse' => 'Studium Life Science Engineering',
			'basemod_studium-mb' => 'Studium Maschinenbau',
			'basemod_studium-mechatronik' => 'Studium Mechatronik',
			'basemod_studium-medizintechnik' => 'Studium Medizintechnik',
			'basemod_studium-nano' => 'Studium Nanotechnologie',
			'basemod_studium-win' => 'Studium Wirtschaftsinformatik',
			'basemod_studium-wing' => 'Studium Wirtschaftsingenieurwesen',
			'basemod_studium-ww' => 'Studium Werkstoffwissenschaften',
		    ),
		),
		'text-startseite' => array(
		    'type' => 'text',
		    'title' => __('Name Startseite', 'tf2013'),
		    'label' => __('Name der Startseite f&uuml;r die Brotkr&uuml;melnavigation', 'tf2013'),
		    'default' => $defaultoptions['text-startseite'],
		),
		'aktiv-autoren' => array(
		    'type' => 'bool',
		    'title' => __('Autoren anzeigen', 'tf2013'),
		    'label' => __('Bei der Anzeige von Artikeln den Autoren anzeigen und verlinken.', 'tf2013'),
		    'default' => $defaultoptions['aktiv-autoren'],
		),
		'buttons' => array(
		    'type' => 'section',
		    'title' => __('Buttons', 'tf2013'),
		),
		'aktiv-buttons' => array(
		    'type' => 'bool',
		    'title' => __('Buttons anzeigen', 'tf2013'),
		    'label' => __('Rechts oberhalb der Sidebar Buttons anzeigen (z.B. für Anmeldungen, Newsletter etc.)', 'tf2013'),
		    'default' => $defaultoptions['aktiv-buttons'],
		    'parent' => 'buttons'
		),
		'aktiv-button1' => array(
		    'type' => 'bool',
		    'title' => __('Erster Button', 'tf2013'),
		    'label' => __('Ersten Button aktivieren', 'tf2013'),
		    'default' => $defaultoptions['aktiv-button1'],
		    'parent' => 'buttons'
		),
		'url-button1' => array(
		    'type' => 'url',
		    'title' => __('URL', 'tf2013'),
		    'label' => __('Ziel des ersten Buttons', 'tf2013'),
		    'default' => $defaultoptions['url-button1'],
		    'parent' => 'buttons'
		),
		'title-button1' => array(
		    'type' => 'text',
		    'title' => __('Beschriftung', 'tf2013'),
		    'label' => __('Beschriftung des ersten Buttons', 'tf2013'),
		    'default' => $defaultoptions['title-button1'],
		    'parent' => 'buttons'
		),
		'color-button1' => array(
		    'type' => 'select',
		    'title' => __('Farbe', 'tf2013'),
		    'label' => __('Hintergrundfarbe des ersten Buttons', 'tf2013'),
		    'default' => $defaultoptions['color-button1'],
		    'liste' => array(
			'grau' => __("Grau", "tf2013"),
			'gelb' => __("Gelb", "tf2013"),
			'gruen' => __("Gr&uuml;n", "tf2013"),
			'blau' => __("Blau", "tf2013"),
		    ),
		    'parent' => 'buttons'
		),
		'aktiv-button2' => array(
		    'type' => 'bool',
		    'title' => __('Zweiter Button', 'tf2013'),
		    'label' => __('Zweiten Button aktivieren', 'tf2013'),
		    'default' => $defaultoptions['aktiv-button2'],
		    'parent' => 'buttons'
		),
		'url-button2' => array(
		    'type' => 'url',
		    'title' => __('URL', 'tf2013'),
		    'label' => __('Ziel eines zweiten Buttons', 'tf2013'),
		    'default' => $defaultoptions['url-button2'],
		    'parent' => 'buttons'
		),
		'title-button2' => array(
		    'type' => 'text',
		    'title' => __('Beschriftung', 'tf2013'),
		    'label' => __('Beschriftung des zweiten Buttons', 'tf2013'),
		    'default' => $defaultoptions['title-button2'],
		    'parent' => 'buttons'
		),
		'color-button2' => array(
		    'type' => 'select',
		    'title' => __('Farbe', 'tf2013'),
		    'label' => __('Hintergrundfarbe eines zweiten Buttons', 'tf2013'),
		    'default' => $defaultoptions['color-button2'],
		    'liste' => array(
			'grau' => __("Grau", "tf2013"),
			'gelb' => __("Gelb", "tf2013"),
			'gruen' => __("Gr&uuml;n", "tf2013"),
			'blau' => __("Blau", "tf2013"),
		    ),
		    'parent' => 'buttons'
		),
	    )
	),
	'startseite' => array(
	    'tabtitle' => __('Startseite', 'tf2013'),
	    'fields' => array(
		'teaser-title-maxlength' => array(
		    'type' => 'number',
		    'title' => __('Textl&auml;nge', 'tf2013'),
		    'label' => __('Maximale Textl&auml;nge des Titels im Teaser.', 'tf2013'),
		    'default' => $defaultoptions['teaser-title-maxlength'],
		),
		'teaser-title-words' => array(
		    'type' => 'number',
		    'title' => __('Wortzahl', 'tf2013'),
		    'label' => __('Zahl der Worte im Teaser; Die maximale Textl&auml;nge begrenzt diesen Wert jedoch.', 'tf2013'),
		    'default' => $defaultoptions['teaser-title-words'],
		),
		'auszuege' => array(
		    'type' => 'section',
		    'title' => __('Gestaltung Textausz&uuml;ge', 'tf2013'),
		),
		'num-article-startpage-fullwidth' => array(
		    'type' => 'number',
		    'title' => __('Beitr&auml;ge &uuml;ber ganze Breite', 'tf2013'),
		    'label' => __('Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'tf2013'),
		    'default' => $defaultoptions['num-article-startpage-fullwidth'],
		    'parent' => 'auszuege'
		),
		'num-article-startpage-halfwidth' => array(
		    'type' => 'select',
		    'title' => __('Beitr&auml;ge &uuml;ber halbe Breite', 'tf2013'),
		    'label' => __('Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'tf2013'),
		    'liste' => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8),
		    'default' => $defaultoptions['num-article-startpage-halfwidth'],
		    'parent' => 'auszuege'
		),
		'teaser_maxlength' => array(
		    'type' => 'number',
		    'title' => __('L&auml;nge des Teasertextes (Artikelauszug)', 'tf2013'),
		    'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge auf der Startseite.', 'tf2013'),
		    'default' => $defaultoptions['teaser_maxlength'],
		    'parent' => 'auszuege'
		),
		'teaser-titleup' => array(
		    'type' => 'bool',
		    'title' => __('Titel oben', 'tf2013'),
		    'label' => __('Titel &uuml;ber Logo/Datumsbox und Text', 'tf2013'),
		    'default' => $defaultoptions['teaser-titleup'],
		    'parent' => 'auszuege'
		),
		'teaser-datebox' => array(
		    'type' => 'select',
		    'title' => __('Symbolbild/Datumsbox', 'tf2013'),
		    'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels.', 'tf2013'),
		    'default' => $defaultoptions['teaser-datebox'],
		    'liste' => array(
			1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "tf2013"),
			4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "tf2013"),
			5 => __("Nichts anzeigen", "tf2013")),
		    'parent' => 'auszuege'
		),
		'teaser-floating' => array(
		    'type' => 'bool',
		    'title' => __('Flie&szlig;ender Text', 'tf2013'),
		    'label' => __('Text umflie&szlig;t das Bild', 'tf2013'),
		    'default' => $defaultoptions['teaser-floating'],
		    'parent' => 'auszuege'
		),
		'teaser-dateline' => array(
		    'type' => 'bool',
		    'title' => __('Datumszeile', 'tf2013'),
		    'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'tf2013'),
		    'default' => $defaultoptions['teaser-dateline'],
		    'parent' => 'auszuege'
		),
		'teaser-maxlength-halfwidth' => array(
		    'type' => 'number',
		    'title' => __('L&auml;nge des Teasertextes', 'tf2013'),
		    'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['teaser-maxlength-halfwidth'],
		    'parent' => 'auszuege'
		),
		'teaser-titleup-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Titel oben', 'tf2013'),
		    'label' => __('Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['teaser-titleup-halfwidth'],
		    'parent' => 'auszuege'
		),
		'teaser-datebox-halfwidth' => array(
		    'type' => 'select',
		    'title' => __('Symbolbild/Datumsbox', 'tf2013'),
		    'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'tf2013'),
		    'default' => $defaultoptions['teaser-datebox-halfwidth'],
		    'liste' => array(
			1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "tf2013"),
			4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "tf2013"),
			5 => __("Nichts anzeigen", "tf2013")),
		    'parent' => 'auszuege'
		),
		'teaser-floating-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Flie&szlig;ender Text', 'tf2013'),
		    'label' => __('Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'tf2013'),
		    'default' => $defaultoptions['teaser-floating-halfwidth'],
		    'parent' => 'auszuege'
		),
		'teaser-dateline-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Datumszeile', 'tf2013'),
		    'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['teaser-dateline-halfwidth'],
		    'parent' => 'auszuege'
		),
	    ),
	),
	'Indexseiten' => array(
	    'tabtitle' => __('Indexseiten', 'tf2013'),
	    'fields' => array(
		'category' => array(
		    'type' => 'section',
		    'title' => __('Indexseiten (Kategorien, Tags und andere)', 'tf2013'),
		),
		'category-num-article-fullwidth' => array(
		    'type' => 'number',
		    'title' => __('Beitr&auml;ge &uuml;ber ganze Breite', 'tf2013'),
		    'label' => __('Zahl der Beitr&auml;ge, die &uuml;ber die gesamte Inhaltsbreite gehen.', 'tf2013'),
		    'default' => $defaultoptions['category-num-article-fullwidth'],
		    'parent' => 'category'
		),
		'category-num-article-halfwidth' => array(
		    'type' => 'select',
		    'title' => __('Beitr&auml;ge &uuml;ber halbe Breite', 'tf2013'),
		    'label' => __('Zahl der Beitr&auml;ge, die in Spalten mit je zwei Beitr&auml;gen nebeneinander, angezeigt werden.', 'tf2013'),
		    'liste' => array(0 => 0, 2 => 2, 4 => 4, 6 => 6, 8 => 8, 10 => 10, 12 => 12, 14 => 14, 16 => 16),
		    'default' => $defaultoptions['category-num-article-halfwidth'],
		    'parent' => 'category'
		),
		'category-teaser-maxlength' => array(
		    'type' => 'number',
		    'title' => __('L&auml;nge des Teasertextes (Artikelauszug)', 'tf2013'),
		    'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-maxlength'],
		    'parent' => 'category'
		),
		'category-teaser-titleup' => array(
		    'type' => 'bool',
		    'title' => __('Titel oben', 'tf2013'),
		    'label' => __('Titel &uuml;ber Logo/Datumsbox und Text', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-titleup'],
		    'parent' => 'category'
		),
		'category-teaser-datebox' => array(
		    'type' => 'select',
		    'title' => __('Symbolbild/Datumsbox', 'tf2013'),
		    'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels.', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-datebox'],
		    'liste' => array(
			1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "tf2013"),
			4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "tf2013"),
			5 => __("Nichts anzeigen", "tf2013")),
		    'parent' => 'category'
		),
		'category-teaser-floating' => array(
		    'type' => 'bool',
		    'title' => __('Flie&szlig;ender Text', 'tf2013'),
		    'label' => __('Text umflie&szlig;t das Bild', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-floating'],
		    'parent' => 'category'
		),
		'category-teaser-dateline' => array(
		    'type' => 'bool',
		    'title' => __('Datumszeile', 'tf2013'),
		    'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-dateline'],
		    'parent' => 'category'
		),
		'category-teaser-maxlength-halfwidth' => array(
		    'type' => 'number',
		    'title' => __('L&auml;nge des Teasertextes', 'tf2013'),
		    'label' => __('Maximale Textl&auml;nge f&uuml;r Artikelausz&uuml;ge (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-maxlength-halfwidth'],
		    'parent' => 'category'
		),
		'category-teaser-titleup-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Titel oben', 'tf2013'),
		    'label' => __('Titel &uuml;ber Logo/Datumsbox und Text (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-titleup-halfwidth'],
		    'parent' => 'category'
		),
		'category-teaser-datebox-halfwidth' => array(
		    'type' => 'select',
		    'title' => __('Symbolbild/Datumsbox', 'tf2013'),
		    'label' => __('Links des Textauszuges das Datum, das Artikelbild, ein Bild des Artikels oder ein verlinktes Video anzeigen; Abhängig vom Inhalt des Artikels. (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-datebox-halfwidth'],
		    'liste' => array(
			1 => __("Reihenfolge: Artikelbild, erstes Bild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			2 => __("Reihenfolge: Erstes Bild, Artikelbild, erstes Video oder Ersatzbild zeigen", "tf2013"),
			3 => __("Reihenfolge: Erstes Video, Artikelbild, erstes Bild oder Ersatzbild zeigen", "tf2013"),
			4 => __("Reihenfolge: Erstes Video, erstes Bild, Artikelbild oder Ersatzbild zeigen", "tf2013"),
			5 => __("Nichts anzeigen", "tf2013")),
		    'parent' => 'category'
		),
		'category-teaser-floating-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Flie&szlig;ender Text', 'tf2013'),
		    'label' => __('Text umflie&szlig;t das Bild (Bei Beitr&auml;gen &uuml;ber halbe Breite)', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-floating-halfwidth'],
		    'parent' => 'category'
		),
		'category-teaser-dateline-halfwidth' => array(
		    'type' => 'bool',
		    'title' => __('Datumszeile', 'tf2013'),
		    'label' => __('Datumszeile vor dem Text, falls keine Datumsbox angezeigt wird (Bei Beitr&auml;gen &uuml;ber halbe Breite).', 'tf2013'),
		    'default' => $defaultoptions['category-teaser-dateline-halfwidth'],
		    'parent' => 'category'
		),
	    )
	),
	'socialmedia' => array(
	    'tabtitle' => __('Social Media', 'tf2013'),
	    'fields' => array(
		'aktiv-socialmediabuttons' => array(
		    'type' => 'bool',
		    'title' => __('Buttons aktivieren', 'tf2013'),
		    'label' => __('Social Media Buttons auf der Website einblenden', 'tf2013'),
		    'default' => $defaultoptions['aktiv-socialmediabuttons'],
		),
		'sm-list' => array(
		    'type' => 'urlchecklist',
		    'title' => __('Social Media Plattformen', 'tf2013'),
		    'liste' => $default_socialmedia_liste,
		),
	    )
	),
    )
);
?>
