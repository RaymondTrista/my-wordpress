<?php
/**
 * Returns theme options
 *
 * Uses sane defaults in case the user has not configured any theme options yet.
 */


// Return theme options
function smartline_theme_options() {
    
	// Merge Theme Options Array from Database with Default Options Array
	$theme_options = wp_parse_args( 
		
		// Get saved theme options from WP database
		get_option( 'smartline_theme_options', array() ), 
		
		// Merge with Default Options if setting was not saved yet
		smartline_default_options() 
		
	);

	// Return theme options
	return $theme_options;
	
}


// Build default options array
function smartline_default_options() {

	$default_options = array(
		'layout' 							=> 'right-sidebar',
		'header_tagline' 					=> true,
		'header_search' 					=> false,
		'header_icons' 						=> false,
		'posts_length' 						=> 'index',
		'post_thumbnails_index'				=> true,
		'post_thumbnails_single' 			=> true,
		'excerpt_text'						=> false,
		'slider_activated_front_page' 		=> false,
		'slider_activated_blog' 			=> false,
		'slider_animation' 					=> 'horizontal'
	);
	
	return $default_options;
}


?>