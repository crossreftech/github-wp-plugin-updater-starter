<?php
/**
* Plugin Name: GitHub Updated Plugin
* Plugin URI: http://wpcoder.ca/
* Description: A starter for writing a plugin that's updated using GitHub instead of the WordPress repository.
* Version: 1.0.1
* Author: Joshua Hammill
* Author URI: http://wpcoder.ca/
* License: GPL2
*/

//* Include the update functions
include ('inc/updater.php');
include ('inc/update-control.php');

//* Test to see if the plugin is working
add_action('wp_head','hook_css');

function hook_css() {

	$output="<style>
		#adminmenu, 
		#adminmenu .wp-submenu, 
		#adminmenuback, 
		#adminmenuwrap {
	    		background-color: #0e1318 !important;
		} 
	</style>";

	echo $output;

}
