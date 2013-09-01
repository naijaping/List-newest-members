<?php
/*
Plugin Name: BP List Newest members
Plugin URI: http://cityflavourmagazine.com
Description: Show the list of  newest members in the widget area max 5
Version: 1.0
Requires at least: WordPress 3.0 / BuddyPress 1.5
Tested up to: WordPress 3.6  / BuddyPress 1.8.1
License: GNU/GPL 2
Author URI: http://cityflavourmagazine.com/
Author:Prince Abiola Ogundipe
*/

function omo_my_list_newest_members_init() {
	require( dirname( __FILE__ ) . '/list-newest-members-for-bp.php' );
}
add_action( 'bp_include', 'omo_my_list_newest_members_init' );
?>
