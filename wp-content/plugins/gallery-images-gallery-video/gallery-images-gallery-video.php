<?php
/*
 Plugin Name: Gallery Images Gallery Video
 Plugin URI: http://wptools.co/gallery
 Description: gallery plugin with lightbox and simple functionality
 Version: 1.0.2
 Author: gallerywpt
 Author URI: http://wptools.co/
 License: GPL2
*/

if ( ! defined( 'WPINC' ) )  die;
if ( ! defined( 'ABSPATH' ) ) exit;

define('WPTOOLS_GIGV_VERSION', 			'1.0.2'); 
define("WPTOOLS_GIGV_URL", 				plugin_dir_url( __FILE__ ) );
define("WPTOOLS_GIGV_PATH", 			plugin_dir_path( __FILE__ ) );
define("WPTOOLS_GIGV_INCLUDES_PATH", 	WPTOOLS_GIGV_PATH.'includes/');

function start_wpTools_GIGV(){ 	require_once WPTOOLS_GIGV_PATH.'init.php'; wpTools_GIGV_Activator::start(); }
register_activation_hook( __FILE__, 'start_wpTools_GIGV' );
function end_wpTools_GIGV(){ 	require_once WPTOOLS_GIGV_PATH.'init.php'; wpTools_GIGV_Activator::end(); }
register_deactivation_hook( __FILE__, 'end_wpTools_GIGV' );

require_once WPTOOLS_GIGV_INCLUDES_PATH.'widget.php';