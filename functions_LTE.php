<?php
function tf2013_contenttitle() {
	global $defaultoptions;
	global $options;
	$before = '';
	$after = '';
	$delimiter = ': ';
	$home = $options['text-startseite']; // text for the 'Home' link

	if (!is_home() && !is_front_page() || is_paged()) {
		global $post;
		$homeLink = home_url('/');

		if (is_category()) {
			global $wp_query;
			$cat_obj = $wp_query->get_queried_object();
			$thisCat = $cat_obj->term_id;
			$thisCat = get_category($thisCat);
			$parentCat = get_category($thisCat->parent);
			if ($thisCat->parent != 0)
				echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
		//	echo $before . __('Artikel der Kategorie ', 'tf2013') . '"' . single_cat_title('', false) . '"' . $after;
			echo $before . single_cat_title('', false) . $after;		
		}elseif (is_author()) {
		global $author;
 		$userdata = get_userdata($author);
		$specialstaffheading=get_the_author_meta('specialstaffheading', $userdata->ID);
		if(empty($specialstaffheading))
				{$specialstaffheading="[:de]Mitarbeiter[:en]Staff[:]";}
		echo $before .__($specialstaffheading).$after;
		unset($userdata);
		}

		elseif (is_day()) {
			echo $before . get_the_time(_x('j. F Y','Date format for Daily Archive Title','tf2013')) . $after;
		} elseif (is_month()) {
			echo $before . get_the_time('F Y') . $after;
		} elseif (is_year()) {
			echo $before . get_the_time('Y') . $after;
		} elseif (is_single() && !is_attachment()) {
			echo $before . get_the_title() . $after;
		} elseif (!is_single() && !is_page() && !is_search() && get_post_type() != 'post' && !is_404()) {
			$post_type = get_post_type_object(get_post_type());
			echo $before . $post_type->labels->singular_name . $after;
		} elseif (is_attachment()) {
			echo $before . get_the_title() . $after;
		} elseif (is_page() && !$post->post_parent) {
			echo $before . get_the_title() . $after;
		} elseif (is_page() && $post->post_parent) {
			echo $before . get_the_title() . $after;
		} elseif (is_search()) {
			echo $before . __('Suche nach ', 'tf2013') . '"' . get_search_query() . '"' . $after;
		} elseif (is_tag()) {
			echo $before . __('Artikel mit Schlagwort ', 'tf2013') . '"' . single_tag_title('', false) . '"' . $after;
		
		} elseif (is_404()) {
			echo $before . '404' . $after;
		} else {
			echo $before . get_the_title() . $after;
		}
	} elseif (is_home() || is_front_page()) {
		echo $before . $home . $after;
	}
}





/* HTML bei Biographischen Angaben erlauben */
remove_filter('pre_user_description', 'wp_filter_kses');
add_filter( 'pre_user_description', 'wp_filter_post_kses' );

/*
function modify_contact_methods($profile_fields) {

	// Add new fields
	//$profile_fields['twitter'] = 'Twitter Username';
	//$profile_fields['facebook'] = 'Facebook URL';
	$profile_fields['gplus'] = 'Google+ URL';
	unset($profile_fields['user-url']);
	return $profile_fields;
}
add_filter('user_contactmethods', 'modify_contact_methods');
*/

add_action('admin_head', 'hide_profile_info');
function hide_profile_info() {
    global $pagenow;  // get what file we're on

    if(!current_user_can('edit_others_posts')) { // we want admins and editors to still see it
      switch($pagenow) {
        case 'profile.php':
          $output  = "\n\n" . '<script type="text/javascript">' . "\n";
            $output .= 'jQuery(document).ready(function() {' . "\n";
            $output .= 'jQuery("form#your-profile > h3:first").hide();' . "\n"; // hide "Personal Options" header
            $output .= 'jQuery("form#your-profile > table:first").hide();' . "\n"; // hide "Personal Options" table
            $output .= 'jQuery("form#your-profile > h3:eq(1)").hide();' . "\n"; // hide "Name" header
            $output .= 'jQuery("form#your-profile > h3:eq(3)").hide();' . "\n"; // hide "Name" header
            $output .= 'jQuery("table.form-table:eq(1) tr:first").hide();' . "\n"; // hide "username"
            $output .= 'jQuery("table.form-table:eq(1) tr:eq(1)").hide();' . "\n"; // hide "firstname"
            $output .= 'jQuery("table.form-table:eq(1) tr:eq(2)").hide();' . "\n"; // hide "lastname"
            $output .= 'jQuery("table.form-table:eq(1) tr:eq(3)").hide();' . "\n"; // hide "nickname"
            
            
            $output .= 'jQuery("table.form-table:eq(1) tr:eq(4)").hide();' . "\n"; // hide "display name publicly as"
            $output .= 'jQuery("table.form-table:eq(1)+h3").hide();' . "\n"; // hide "Contact Info" header
            $output .= 'jQuery("table.form-table:eq(3)+h3").hide();' . "\n"; // hide "Übersetzbare felder" header
            $output .= 'jQuery("table.form-table:eq(4)").hide();' . "\n"; // hide "Übersetzbare felder" table
            $output .= 'jQuery("table.form-table:eq(2)").hide();' . "\n"; // hide "Contact Info" table
            $output .= 'jQuery("table.form-table:eq(3) tr:eq(0)").hide();' . "\n"; // hide "Biographical Info"
            $output .= '});' . "\n";
            $output .= '</script>' . "\n\n";
        break;

        default:
          $output = '';
      }
    }
    echo $output;
}


function add_custom_user_profile_fields( $user ) {
	

echo "<h3>Full profile description:</h3>";
echo "<table class=\"form-table\">
<colgroup span=\"2\">
<col width=\"50%\"></col>
<col width=\"50%\"></col>
</colgroup>";
//echo "<th><label for=\"bigbiobox\">"._e('Full profile description')."</label></th>";
/*echo "<label for=\"cleartodefault\">";
echo "<input type=\"checkbox\" name=\"clear_biography_to_default\" value=\"Clear to Default/Zurücksetzen\" id=\"cleartodefault\">";
echo "Clear to Default/Zurücksetzen</label>";*/
echo "<tr><th>Deutscher Text:</th><th>English Text:</th></tr><tr>";
echo "	<td>";

	$settings = array(
		'wpautop' => false,
		'media_buttons' => false,
		'textarea_rows' => '20',
		'tinymce' => array(
			'block_formats' => 'Standard=p;Überschrift 1=h3;Überschrift 2=h4;Vorformatiert=pre',
			'toolbar'=> 'code',
			'toolbar1'=> 'code,bold,italic,underline,strikethrough,forecolor,|,subscript,superscript,|,link,unlink,|,charmap,|,undo,redo',
			'toolbar2'=> 'formatselect,bullist,numlist,|,alignleft,aligncenter,alignright,|,indent,outdent,|,blockquote',
		),
	);	
	$oldentry=html_entity_decode(get_the_author_meta( 'biography', $user->ID ));
	if(empty($oldentry))
	  {
	    $oldentry=html_entity_decode(get_the_author_meta( 'description', $user->ID ));
	    //update_user_meta($user->ID, 'biography',"");
	    echo "Reset data to default";
	  }
	  $search = '/.*\[\:de\](.*)(\[\:.*)/siU';
  preg_match($search, $oldentry, $match);
	$german=$match[1];
	$search = '/.*\[\:en\](.*)(\[\:.*)/siU';
  preg_match($search, $oldentry, $match);

  $english=$match[1];
	  
	  //
	  
	wp_editor($german, 'biography_de', $settings); 

		echo "</td><td>";
		
	wp_editor($english, 'biography_en', $settings); 
		
	echo "</td></tr></table>";
	/*
	  echo "<br />";
	  echo "<table class=\"preview\" width=100%><tr>";
	  echo "<th>Deutsche Vorschau</th><th>English Preview</th>";
	  echo "<tr><td>".$german."</td><td>".$english."</td></tr>";
		echo "</table>";
		*/

	echo "<br />";

////***************
////Parse-Einstellunegn
	$papercite_string="bibtex group=year group_order=desc ignore=";
		$papercite_string.=" author=\"".$user->user_firstname." ".$user->user_lastname."\"";
		$papercite_string.=" highlight=\"".$user->user_firstname{0}.". ".$user->user_lastname."\"";

print "<h3>Bibtex-Parse-Einstellungen</h3>
	<table class=\"form-table\">
		<tr>
			<td>";
echo "<input type=\"text\" name=\"bibparserstring\" id=\"bibparserstring\" style=\"width:100%\" value=\"".esc_attr( get_the_author_meta( 'bibparserstring', $user->ID ) )."\" class=\"regular-text\" />\n<br />";
	echo "<span class=\"description\">Bibtex-parse-string eingeben, hilfe gibts <a href=\"http://www.bpiwowar.net/wp-content/plugins/papercite/documentation/\">HIER</a> <br />Standardwert: ".$papercite_string."</span>";
print			"</td>
		</tr>
	</table>";
////***************
////Special-heading -- Only for admins
   if(current_user_can('edit_others_posts')) { 
  print "<h3>Special Staff Heading</h3>
	  <table class=\"form-table\">
		<tr>
		<th>Heading:</th>
			<td>";
    echo "<input type=\"text\" name=\"specialstaffheading\" id=\"specialstaffheading\" value=\"".esc_attr( get_the_author_meta( 'specialstaffheading', $user->ID ) )."\" class=\"regular-text\" />\n<br />";
	  echo "<span class=\"description\">Spezielle Überschrift für Mitgliederbereich, nur für Profs<br />Standardwert: leer, Beispiel: [:de]Mitarbeiter[:en]Staff[:]</span>";
    print			"</td>
		</tr>
	</table>";
	}	



}



function save_custom_user_profile_fields( $user_id ) {
	if ( !current_user_can( 'edit_user', $user_id ) )
		return FALSE;

	if(isset($_POST['bibparserstring'])){update_usermeta( $user_id, 'bibparserstring', $_POST['bibparserstring'] );}
	if(isset($_POST['specialstaffheading'])){update_usermeta( $user_id, 'specialstaffheading', $_POST['specialstaffheading'] );}
  if(isset($_POST['biography_de'])||isset($_POST['biography_en']))
      { $biography="[:de]".$_POST['biography_de']."[:en]".$_POST['biography_en']."[:]";
        update_user_meta( $user_id, 'biography', $biography);
      }
  if(isset($_POST['clear_biography_to_default'])){update_user_meta( $user_id, 'biography',"");}//Loesche biography
}

add_action( 'show_user_profile', 'add_custom_user_profile_fields' );
add_action( 'edit_user_profile', 'add_custom_user_profile_fields' );

add_action( 'personal_options_update', 'save_custom_user_profile_fields' );
add_action( 'edit_user_profile_update', 'save_custom_user_profile_fields' );

//##############################
//#### Highlight Staff-Menu-Entry while showing Author-Page
//##############################
function highlight_author_at_menu($classes, $item){
    if(is_author() && (($item->title == 'Mitarbeiter')||$item->title == 'Staff')){
         $classes[] = 'current-menu-item';
    }
    return $classes;
}

add_filter('nav_menu_css_class' , 'highlight_author_at_menu' , 10 , 2);

//##########################
// Fix Heading start page
//##########################
add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( is_home() || is_front_page() ) {
    return __(get_bloginfo( 'title' ));
  }
  return $title;
}

//#############################
// Add Dashicons to frontend (show icon for non-existing avatars)
//#############################
add_action( 'wp_enqueue_scripts', 'load_dashicons_front_end' );
function load_dashicons_front_end() {
	wp_enqueue_style( 'dashicons' );
}

