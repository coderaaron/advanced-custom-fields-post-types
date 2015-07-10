<?php

/*
Plugin Name: Advanced Custom Fields: Post Types
Plugin URI: PLUGIN_URL
Description: Add a dropdown to select a post type
Version: 1.0.0
Author: Aaron Graham
Author URI: https://medicine.wustl.edu
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-post_types', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_post_types( $version ) {
	
	include_once('acf-post_types-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_post_types');	




// 3. Include field type for ACF4
function register_fields_post_types() {
	
	include_once('acf-post_types-v4.php');
	
}

add_action('acf/register_fields', 'register_fields_post_types');	



	
?>