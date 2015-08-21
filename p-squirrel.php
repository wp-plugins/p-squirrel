<?php
/*
 *	Plugin Name: p Squirrel
 *	Plugin URI: https://kauai.zendy.net/wordpress/plugins/p-squirrel/
 *	Description: Hides empty paragraph tags to prevent users from breaking your beautiful designs.
 *	Version: 1.1.8
 *	Author: Zendy Web Studio
 *	Author URI: https://kauai.zendy.net/
 *	License: GPL2v2 or later
 *
*/

function p_squirrel_includes() {
	// include the JavaScript at the bottom of each page
    wp_enqueue_script( 'p_squirrel_js', plugins_url( 'p-squirrel/p-squirrel.js' ), array('jquery'), '', true );
}

// connect our function p_squirrel_includes with the wp_enqueue_scripts hook
add_action( 'wp_enqueue_scripts', 'p_squirrel_includes' );



// Plugin page links
// Row meta links (links under description of plugin)
// Add action links on plugin page in to Plugin Description block
if ( ! function_exists ( 'zendy_mailman_register_plugin_row_meta_links' ) ) {
	
	// Add row meta links (links under description of plugin)
	// Gets hooked on plugin_row_meta
	function zendy_mailman_register_plugin_row_meta_links( $links, $file ) {
		
		// If our plugin name is in the file name, let's do stuff
		if ( strpos( $file, 'p-squirrel.php' ) !== false ) {
		
			// Add all new links into an array
			$new_links = array(	
				'<a href="https://kauai.zendy.net/wordpress/plugins/" target="_blank">More plugins by Zendy Web Studio</a>'
			);
		
			// Merge new links into main row meta links array
			$links = array_merge( $links, $new_links );
		}
	
		return $links;	      
	
	}

}

// Add row meta links on plugin page (links under plugin description)
add_filter( 'plugin_row_meta', 'zendy_mailman_register_plugin_row_meta_links', 10, 2 );

