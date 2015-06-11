<?php
/* 
 * Footer
 */
?>
    
      		 <hr id="vorfooter" />
	      	</div>  <!-- end: content -->                       
     	</div>  <!-- end: main -->                   
       <footer><div id="footer">  <!-- begin: footer -->         			

           <div id="footerinfos">  <!-- begin: footerinfos -->
<?php 
	global $wpdb;
	$query = "SELECT post_modified_gmt FROM $wpdb->posts ORDER BY post_modified_gmt DESC";
	$site_mod_date = mysql2date('U',$wpdb->get_var( $query ));
  //echo $site_mod_date." ";
	$query = "SELECT meta_value  FROM $wpdb->usermeta WHERE `meta_key` LIKE 'last_profile_update_timestamp' ORDER BY `meta_value`  DESC Limit 1";
	$profile_mod_date = $wpdb->get_var( $query );
	//echo $profile_mod_date." ";
	if(!function_exists('get_home_path')){require_once ABSPATH . 'wp-admin/includes/file.php';}
	$bib_mod_date	= filemtime(get_home_path()."/wp-content/papercite-data/bib/elib.bib");
	//echo $bib_mod_date." ";

	$recent_timestamp=max($site_mod_date,$profile_mod_date,$bib_mod_date);
	$date_format =" j.n.Y H:i T";
	if(isset($recent_timestamp))
		{
			$wp_timezone=get_option('timezone_string');
	    $defaulttimezone=date_default_timezone_get();
	    date_default_timezone_set($wp_timezone);
      $recent_date_string=date($date_format, $recent_timestamp);
	    date_default_timezone_set($defaulttimezone);
      //Print output:
		  echo "<div id=\"last_update\">";
			echo _e("[:de]Letzte Aktualisierung:[:en]Last update:[:]");
			echo $recent_date_string;
			echo "</div>";
		}
?>
<?php if ( has_nav_menu( 'tecmenu' ) ) { ?>
	       <nav role="navigation">
			<div id="tecmenu">   <!-- begin: tecmenu -->	
		        	<h2 class="skip"><a name="hilfemarke" id="hilfemarke">Technisches Menu</a></h2>		
		<?php wp_nav_menu( array( 'theme_location' => 'tecmenu', 'fallback_cb' => '' ) );?>
	        	</div>  <!-- end: tecmenu -->	
		</nav>
	       <?php } ?>
              <div id="zusatzinfo" class="noprint">  <!-- begin: zusatzinfo -->
		<a id="zusatzinfomarke" name="zusatzinfomarke"></a> 	
		    <?php if ( is_active_sidebar( 'zusatzinfo-area' ) ) { 
			    dynamic_sidebar( 'zusatzinfo-area' ); 
			 } ?>
		
		<p class="skip"><a href="#seitenmarke">Zum Seitenanfang</a></p>
		</div>  <!-- end: zusatzinfo -->

           </div> <!-- end: footerinfos -->	
        </div></footer>   <!-- end: footer --> 
	
    </div>  <!-- end: seite -->
  </div>  <!-- end: page_margins  -->
    <?php wp_footer(); ?>
    </body> <!-- end: body -->
</html>
