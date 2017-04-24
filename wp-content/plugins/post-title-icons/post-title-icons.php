<?php
/*
Plugin Name: Post Title Icons
Plugin URI: http://orangetree.farm/post-title-icons/
Description: This plugin will add an icon to your post titles
Author: Orange Tree
Author URI: http://orangetree.farm
Version: 1.3
*/


/******************************
* global variables
******************************/

$ggs_prefix = 'ggs_';
$ggs_plugin_name = 'Post Title Icons';

// retrieve our plugin settings from the options table
$ggs_options = get_option('ggs_settings');

/******************************
* includes
******************************/

include('includes/scripts.php'); // this controls all JS / CSS
include('includes/data-processing.php'); // this controls all saving of data
include('includes/display-functions.php'); // display content functions
include('includes/admin-page.php'); // the plugin options page HTML and save functions
