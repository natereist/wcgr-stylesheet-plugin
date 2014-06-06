<?php

/*
Plugin Name:WCGR Styles
Plugin URI: http://mindutopia.com
Description:for development this will go much faster, we can compile and enqueue stylesheet in here, for production we will switch to using jetpack css!
Author: Mindutopia
Version: 1.0
Author URI: http://mindutopia.com
*/

function wcgr_stylesheet(){
	wp_enqueue_style( 'wcgr', plugins_url('style.css', __FILE__ ) );
}
add_action( 'wp_enqueue_styles', 'wcgr_stylesheet', 10, 1 );

?>