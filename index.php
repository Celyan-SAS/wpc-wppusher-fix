<?php
/**
 *	@package wpc-wppusher-fix
 *	@author Celyan
 *	@version 0.0.1
 */
/*
 Plugin Name: WPC-WPPusher-Fix
 Plugin URI: https://wordpressandco.fr/
 Description: Fixes SSL verify https issue on WP-Pusher license verification
 Version: 0.0.1
 Author: WP&Co
 Author URI: https://wordpressandco.fr/
 License: GPL2
 */

function wpc_wppusher_fix( $parsed_args, $url ) {
	if( !preg_match( '/dashboard\.wppusher\.com/', $url ) ) {
		return $parsed_args;
	}
	$parsed_args['sslverify'] = false;
	return $parsed_args;
}
add_filter( 'http_request_args', 'wpc_wppusher_fix', 10, 2 );