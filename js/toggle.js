/**
 * sidebar.js
 *
 * Handles toggling the sidebar for small screens.
 */
( function () {
	var nav = document.getElementById( 'site-navigation' );
	if ( ! nav )
		return;
	var sidebar = document.getElementById( 'extra-sidebar' );
	if ( ! sidebar )
		return;
	menutoggle = document.getElementById( 'menu-toggle' );
	sidebartoggle = document.getElementById( 'sidebar-toggle' );

	menutoggle.onclick = function() {
		if (nav.style.display == 'none') {
			nav.style.display = 'block';
			nav.style.clear = 'both';
		}
		else
			nav.style.display = 'none';
	}
	
	sidebartoggle.onclick = function() {
		if (sidebar.style.display == 'none') {
			sidebar.style.display = 'block';
			sidebar.style.clear = 'right';
		}
		else
			sidebar.style.display = 'none';
	}
} )();

( window.onload = function() {
	if(document.documentElement.clientWidth >= 960) {
		document.getElementById('extra-sidebar').style.display = 'block';
		document.getElementById('sidebar-toggle').style.display = 'none';
		document.getElementById('site-navigation').style.display = 'block';
		document.getElementById('menu-toggle').style.display = 'none';
	};
	if(document.documentElement.clientWidth < 960) {
		document.getElementById('site-navigation').style.display = 'block';
		document.getElementById('menu-toggle').style.display = 'none';
		document.getElementById('extra-sidebar').style.display = 'none';
		document.getElementById('sidebar-toggle').style.display = 'block';
	};
	if(document.documentElement.clientWidth < 600) {
			document.getElementById('site-navigation').style.display = 'none';
			document.getElementById('menu-toggle').style.display = 'block';
			document.getElementById('extra-sidebar').style.display = 'none';
			document.getElementById('sidebar-toggle').style.display = 'block';
	};

}  )();