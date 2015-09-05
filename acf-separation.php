<?php

/*
Plugin Name: Advanced Custom Fields: Separation
Plugin URI: https://github.com/yaybrigade/acf-separate
GitHub Plugin URI: https://github.com/yaybrigade/acf-separate
Description: Extends ACF (Advanced Custom Fields) plugin to add a separator field for better visual clarity.
Version: 1.0.1
Author: Romn Jaster, Yay Brigade
Author URI: yaybrigade.com
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-separation', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 


// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_separation( $version ) {
	
	include_once('acf-separation-v5.php');
	
}

add_action('acf/include_field_types', 'include_field_types_separation');	

?>