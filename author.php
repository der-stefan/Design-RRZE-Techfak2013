<?php 
get_header();
global $LocalUnivisID;	
$LocalUnivisID=false;
/*
$blogusers=get_users();
foreach ( $blogusers as $user ) {
	print_r($user);
echo "<br>";
}
*/
//Titel und athor-variable wird bereits in functins.php->tf2013_contenttitle() gesetzt.
$userdata = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));

echo _e(do_shortcode('[univis task="mitarbeiter-einzeln" wpuserid="'.$userdata->ID.'" firstname="'.$userdata->user_firstname.'" lastname="'.$userdata->user_lastname.'"]'));


$lang=$GLOBALS['q_config']['language'];
?>
<!-- This sets the $curauth variable -->
<?php
$biograpy=get_the_author_meta('biography', $userdata->ID);
if(!empty($biograpy))
{
echo _e("<h2>[:de]Über [:en]About[:]")." ".$userdata->display_name."</h2>";
echo _e($biograpy);
}
?>

<div style="clear:both"></div>


<?php

///////////////// Lehrveranstaltungen
if(!empty($LocalUnivisID)){
echo _e(do_shortcode('[univis task="mitarbeiter-lehre" wpuserid="'.$userdata->ID.'" univis_id="'.$LocalUnivisID.'"]'));
}

?>

<?php
///////////////// Publications
$papercite_string=get_the_author_meta('bibparserstring', $userdata->ID);
if(empty($papercite_string))
	{
echo "Warnung: Bibtex-Parsing nicht konfiguriert im Profil, verwende Standard-Werte";
		$papercite_string="bibtex group=year group_order=desc";
		$papercite_string.=" author=\"".$userdata->user_firstname." ".$userdata->user_lastname."\"";
		$papercite_string.=" highlight=\"".$userdata->user_firstname{0}.". ".$userdata->user_lastname."\"";
	}
//echo $papercite_string;
//Print Thesis
$tmp=papercite_staff("[".$papercite_string." allow=mastersthesis group=none]");
if(!empty($tmp))
{
//  echo _e("<h2>[:de]Abschlussarbeiten[:en]Thesis[:]</h2>");
//  echo $tmp;
}
//Print Patents
$tmp=papercite_staff("[".$papercite_string." allow=prize group=none sort=year]");
if(!empty($tmp))
{
  echo _e("<h2>[:de]Preise & Auszeichnungen[:en]Awards[:]</h2>");
  echo $tmp;
}
//Print Patents
$tmp=papercite_staff("[".$papercite_string." allow=patent group=none sort=year]");
if(!empty($tmp))
{
  echo _e("<h2>[:de]Patente[:en]Patents[:]</h2>");
  echo $tmp;
}
//print Publications
$tmp=papercite_staff("[".$papercite_string." deny=patent|prize]");
if(!empty($tmp))
{
  echo _e("<h2>[:de]Publikationen[:en]Publications[:]</h2>");
  echo $tmp;
}

?>



<?php get_sidebar(); ?>
<?php get_footer(); ?>
