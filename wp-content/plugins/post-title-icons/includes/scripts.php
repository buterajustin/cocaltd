<?php

/******************************
* script control
******************************/

function ggs_load_scripts() {
	if(is_singular()) {
		wp_enqueue_style('ggs-styles', plugin_dir_url( __FILE__ ) . 'css/plugin_styles.css');
	}
}
add_action('wp_enqueue_scripts', 'ggs_load_scripts');