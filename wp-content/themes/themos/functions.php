<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


function register_theme_menus(){
	register_nav_menus(
		array(
				'primary-menu' => __('Primary Menu'),
				'footer-menu' => __('Footer Menu')
			)
	);
}
add_action('init','register_theme_menus');

function change_submenu_class($menu){
	$menu = preg_replace('/ class="sub-menu"/', '/ class="niveau2"/', $menu);
	return $menu;
}
add_filter('wp_nav_menu','change_submenu_class');

function add_classes_on_li($classes, $item, $args){
	$classes[] = 'bgcolor_menu boder_menu  sous_menu';
	return $classes;
}
add_filter('nav_menu_css_class', 'add_classes_on_li', 1, 3);

function add_menu_link_class($ulclass){
	$link = preg_replace('/<a /', '<a class="menu"', $ulclass);
	return $link;
}
add_filter('wp_nav_menu', 'add_menu_link_class');

/*function add_menu_actif_link_class($ulclass){
	$link = preg_replace('/<a /', '<a class="sous_menu"', $ulclass);
	return $link;
}*/
//add_filter('wp_nav_menu', 'add_menu_actif_link_class', 1, 3);

function change_img_responsive($imgclass){
	$class = str_replace('<img class="', '<img class="img-responsive ', $imgclass);
	return $class;
}
add_filter('the_content','change_img_responsive');

function caption_off(){
	return true;
}
add_filter('disable_captions','caption_off');



function wpc_theme_styles() {
	wp_enqueue_style('bootstrap_css', get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style('default_css', get_template_directory_uri().'/css/default.css');
	wp_enqueue_style('fontawasome_css', get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style('jquerysortable_css', get_template_directory_uri().'/css/jquery.sortable.css');
	wp_enqueue_style('nivoslider_css', get_template_directory_uri().'/css/nivo-slider.css');
	wp_enqueue_style('slick_css', get_template_directory_uri().'/css/slick.css');
	wp_enqueue_style('texte_css', get_template_directory_uri().'/css/texte.css');
	wp_enqueue_style('uitotop_css', get_template_directory_uri().'/css/uitotop.css');
	wp_enqueue_style('uploadify_css', get_template_directory_uri().'/css/uploadify.css');
	wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'wpc_theme_styles');

function wpc_theme_js() {
	wp_enqueue_script('app_js', get_template_directory_uri().'/js/app.js', '', '', true);
	wp_enqueue_script('action_js', get_template_directory_uri().'/js/action.js', '', '', false);
	wp_enqueue_script('addthiswidget_js', get_template_directory_uri().'/js/addthis_widget.js', '', '', false);
	wp_enqueue_script('bootbox_js', get_template_directory_uri().'/js/bootbox.js', '', '', false);
	wp_enqueue_script('bootstrap_js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '', false);
	wp_enqueue_script('function_js', get_template_directory_uri().'/js/function.js', '', '', true);
	wp_enqueue_script('slick_js', get_template_directory_uri().'/js/slick.min.js', '', '', true);
	wp_enqueue_script('imageMapResizer_js', get_template_directory_uri().'/js/imageMapResizer.min.js', '', '', false);
	wp_enqueue_script('uitotop_js', get_template_directory_uri().'/js/jquery.uitotop.js', '', '', true);
	wp_enqueue_script('uploadify_js', get_template_directory_uri().'/js/jquery.uploadify.js', '', '', false);
	//wp_enqueue_script('blockUI_js', get_template_directory_uri().'/js/jquery.blockUI.js', array('jquery','site_js'), '', true);
	wp_enqueue_script('cycleall_js', get_template_directory_uri().'/js/jquery.cycle.all.js', '', '', false);
	wp_enqueue_script('tablesorter_js', get_template_directory_uri().'/js/jquery.tablesorter.js', '', '', false);
	wp_enqueue_script('site_js', get_template_directory_uri().'/js/jquery_site.js', '', '', true);
	wp_enqueue_script('overlib_js', get_template_directory_uri().'/js/overlib.js', '', '', false);
	wp_enqueue_script('popup_js', get_template_directory_uri().'/js/popup.js', '', '', false);
	wp_enqueue_script('setLanguage_js', get_template_directory_uri().'/js/setLanguage.js', '', '', false);
	wp_enqueue_script('swfobject_js', get_template_directory_uri().'/js/swfobject.js', '', '', false);
	wp_enqueue_script('waitingdialog_js', get_template_directory_uri().'/js/waiting-dialog.js', '', '', false);
}
add_action('wp_enqueue_scripts', 'wpc_theme_js');


?>