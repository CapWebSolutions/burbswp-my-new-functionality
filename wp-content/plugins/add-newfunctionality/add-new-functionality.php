<?php
/*
Plugin Name: Add New Functionality
Plugin URI: http://github.com/capwebsolutions/add-new-functionality/
Description: This is not just a plugin, it is a testing ground for greatness.
Author: Matt Ryan
Version: 1.0.0
Author URI: https://capwebsolutions.com/
*/

/**
 * mr_reorder_admin_menu
 *
 * @param [boolean] $menu_ord
 * @return boolean
 */
function mr_reorder_admin_menu( $menu_ord ) {
	
	//* Use this code for user specific applications
	//* $current_user = wp_get_current_user();
	//* if ( !'@capwebsolutions.com' === substr($current_user->user_email, -20) ) return false;	
	
	if ( !$menu_ord ) return true;   //Required to activate the custom_menu_order filter
		return array(
		'index.php',   //Dashboard
		'edit.php?post_type=page', //Posts 
		'edit.php',   //Pages
		'plugins.php',   //Plugins
		'themes.php', //Appearance
		'tools.php',  // Tools
		'options-general.php', // Settings 
		);
 }
 add_filter( 'custom_menu_order', 'mr_reorder_admin_menu', 11, 1); //First call to activate filter
 add_filter( 'menu_order', 'mr_reorder_admin_menu', 11, 1);	 //Second call to do re-ordering

 
