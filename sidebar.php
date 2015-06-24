<?php           
 
if(is_front_page()) {

  echo '<aside><div id="sidebar_wrapper"><div id="sidebar">  <!-- begin: sidebar -->';
  
  

  get_tf2013_buttons();

  get_tf2013_socialmediaicons();

    
   if ( is_active_sidebar( 'sidebar-area' ) ) { 
	 dynamic_sidebar( 'sidebar-area' ); 
		   
    } 
		
    echo '</div></div></aside>';
}

?>	
