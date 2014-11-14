// wait for page to be loaded to run 
jQuery(document).ready(function() {
	// select all p tags and loop through them
    jQuery('p').each(function() {
        // check if the p element contains only blank space using the trim method
        // then remove it
        var pString = jQuery(this).text();
        if( jQuery.trim( pString ) == '' ) {
            jQuery(this).remove();
        }
    });
});