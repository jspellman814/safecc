<?php
// Adds your styles to the WordPress editor
add_action( 'init', 'add_editor_styles' );
function add_editor_styles() {
    add_editor_style( get_template_directory_uri() . '/assets/css/style.min.css' );
}

function wpb_mce_buttons_2($buttons) {
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');

/*
* Callback function to filter the MCE settings
*/

function custom_mce_before_init_insert_formats( $init_array ) {  

// Define the style_formats array

	$style_formats = array(  
		// Each array child is a format with it's own settings
		array(  
			'title' => '4-col Column',  
			'block' => 'div',  
			'classes' => 'large-4 medium-4 columns',
			'wrapper' => true,
		),  
		array(  
			'title' => 'Announcement Icon',  
			'block' => 'span',  
			'classes' => 'fa fa-bullhorn fa-4x',
			'wrapper' => true,
		),  
		array(  
			'title' => 'Shelter Icon',  
			'block' => 'span',  
			'classes' => 'fa fa-home fa-4x',
			'wrapper' => true,
		),  
		array(  
			'title' => 'Prevention Icon',  
			'block' => 'span',  
			'classes' => 'fa fa-book fa-4x',
			'wrapper' => true,
		),
		array(
			'title' => 'Inline Quote',
			'block' => 'span',
			'classes' => 'inline-quote',
			'wrapper' => true,
		),
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'custom_mce_before_init_insert_formats' ); 