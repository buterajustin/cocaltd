<?php

/**
 * Plugin Name: 	Gallery Images Gallery Video
 * Plugin URI: 		http://wptools.co/gallery
 * Description: 	Gallery with wide range of settings for the widget and grid layout for the images 
 * Version: 		1.0.22
 * Author: 			Gallery by wpTools
 * Author URI: 		http://wptools.co/
 * License: 		GPL2
 * Text Domain:		gallery-images-gallery-video
 * Domain Path:		/languages
*/

if ( ! defined( 'WPINC' ) )  die;
if ( ! defined( 'ABSPATH' ) ) exit;

	define('WPTOOLS_GIGV_VERSION', 			'1.0.22'); 
	define("WPTOOLS_GIGV_URL", 				plugin_dir_url( __FILE__ ) );
	define("WPTOOLS_GIGV_PATH", 			plugin_dir_path( __FILE__ ) );
	define("WPTOOLS_GIGV_INCLUDES_PATH", 	WPTOOLS_GIGV_PATH.'includes/');

add_action( 'plugins_loaded', 'wpTools_GIGV_load_textdomain' );
function wpTools_GIGV_load_textdomain() {
  load_plugin_textdomain( 'gallery-images-gallery-video', false, dirname(plugin_basename( __FILE__ )) . '/languages' ); 
}


function start_wpTools_GIGV(){ 	require_once WPTOOLS_GIGV_PATH.'init.php'; wpTools_GIGV_Activator::start(); }
	register_activation_hook( __FILE__, 'start_wpTools_GIGV' );
function end_wpTools_GIGV(){ 	require_once WPTOOLS_GIGV_PATH.'init.php'; wpTools_GIGV_Activator::end(); }
	register_deactivation_hook( __FILE__, 'end_wpTools_GIGV' );

require_once WPTOOLS_GIGV_INCLUDES_PATH.'widget.php';