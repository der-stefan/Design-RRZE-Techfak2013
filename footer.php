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

    	<!-- Scrollbar hack -->
	<script type="text/javascript">
		var br=b-document.body.clientWidth;
		var elem = document.querySelector('body');
		if (window.getComputedStyle) {
			if(window.getComputedStyle(elem).getPropertyValue('padding-left') == "10px") { //default value must be 10px (see CSS file)
				document.body.style.paddingLeft=br+"px";
			}
		}
	</script>

    </body> <!-- end: body -->
</html>
