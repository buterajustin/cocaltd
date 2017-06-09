<?php
/*
*      wpTools GIGV
*      Version: 1.0.2
*      By wpTools
*      Contact: http://wptools.co/
*      Licensed under the GPLv3 license - https://opensource.org/licenses/gpl-3.0.html
*      Copyright (c) 2016, wpTools. All rights reserved.
*/


if ( ! defined( 'WPINC' ) )  die;
if ( ! defined( 'ABSPATH' ) ) exit;

class wpTools_GIGV_Activator {
			public static function start() { add_option( 'wpTools_GIGV_BeforeActivator', 'start' ); }
			public static function end() {
		//echo 
	}
}
