<?php
/**
 * SKT Spiritedlite
 *
 * @package SKT Spiritedlite
 */
 
//about theme info
add_action( 'admin_menu', 'spiritedlite_abouttheme' );
function spiritedlite_abouttheme() {    	
	add_theme_page( __('About Theme', 'spirited-lite'), __('About Theme', 'spirited-lite'), 'edit_theme_options', 'spiritedlite_guide', 'spiritedlite_mostrar_guide');   
} 

//guidline for about theme
function spiritedlite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<style type="text/css">
@media screen and (min-width: 800px) {
.col-left {float:left; width: 65%; padding: 1%;}
.col-right {float:right; width: 30%; padding:1%; border-left:1px solid #DDDDDD; }
}
</style>

<div class="wrapper-info">
	<div class="col-left">
   		   <div style="font-size:16px; font-weight:bold; padding-bottom:5px; border-bottom:1px solid #ccc;">
			  <?php esc_attr_e('About Theme Info', 'spirited-lite'); ?>
		   </div>
          <p><?php esc_attr_e('Spirited Lite is a responsive WordPress theme which is suitable for business, industrial, commercial, office, personal and any other multipurpose website use. Compatible with Nextgen gallery for portfolio purposes and compatible with WooCommerce for shop, selling and E-commerce.','spirited-lite'); ?></p>
		  <a href="<?php echo SKT_PRO_THEME_URL; ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	
	<div class="col-right">			
			<div style="text-align:center; font-weight:bold;">
				<hr />
				<a href="<?php echo SKT_LIVE_DEMO; ?>" target="_blank"><?php esc_attr_e('Live Demo', 'spirited-lite'); ?></a> | 
				<a href="<?php echo SKT_PRO_THEME_URL; ?>"><?php esc_attr_e('Buy Pro', 'spirited-lite'); ?></a> | 
				<a href="<?php echo SKT_THEME_DOC; ?>" target="_blank"><?php esc_attr_e('Documentation', 'spirited-lite'); ?></a>
                <div style="height:5px"></div>
				<hr />                
                <a href="<?php echo SKT_THEME_URL; ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>