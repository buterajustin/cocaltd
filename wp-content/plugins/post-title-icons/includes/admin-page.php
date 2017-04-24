<?php

function ggs_options_page() {

	global $ggs_options;

	ob_start(); ?>
	<div class="wrap">
	
		
		<h2>Post Icons Settings</h2>
		
		<form method="post" action="options.php">
		
			<?php settings_fields('ggs_settings_group'); ?>
		

<script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Select multiple icons for specific categories ↓";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Select 1 icon for every post ↑";
	}
} 
</script>
 

			
			<h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_url]" name="ggs_settings[icon_url]" type="text" value="<?php echo $ggs_options['icon_url']; ?>"/>
				<label class="description" for="ggs_settings[icon_url]"><?php _e('Paste the url of your icon (keep size under 35x35 px)', 'ggs_domain'); ?></label>
			</p>
			
				
			<h4><?php _e('Location', 'ggs_domain'); ?></h4>
			<label class="description" for="ggs_settings[location]"><?php _e('Where do you want your icon to show?', 'ggs_domain'); ?></label>
			<p>
				<?php $location = array('page', 'post', 'BOTH'); ?>
				<select name="ggs_settings[location]" id="ggs_settings[location]">
					<?php foreach($location as $style) { ?>
						<?php if($ggs_options['location'] == $style) { $selected = 'selected="selected"'; } else { $selected = ''; } ?>
						<option value="<?php echo $style; ?>" <?php echo $selected; ?>><?php echo $style; ?></option>
					<?php } ?>
				</select>
			</p>
			<p>
			<?php echo $style; ?>
			</p>
			<p>
			<?php echo $ggs_options['location']; ?>
			</p>
						
			<a id="displayText" href="javascript:toggle();">Select multiple icons for specific categories ↓</a>
			<div id="toggleText" style="display: none">

			<h1>Select an icon for a specific post category</h1>
			
			<div style="float:left;width:30%;line-height:0.5"><h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[url_1]" name="ggs_settings[url_1]" type="text" value="<?php echo $ggs_options['url_1']; ?>"/>
				<label class="description" for="ggs_settings[url_1]"><?php _e('1) Icon URL', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:70%;line-height:0.5">
			<h4><?php _e('Post Category Name', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_1]" name="ggs_settings[icon_1]" type="text" value="<?php echo $ggs_options['icon_1']; ?>"/>
				<label class="description" for="ggs_settings[icon_1]"><?php _e('1) Category Name', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:30%;line-height:0.5"><h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[url_2]" name="ggs_settings[url_2]" type="text" value="<?php echo $ggs_options['url_2']; ?>"/>
				<label class="description" for="ggs_settings[url_2]"><?php _e('2) Icon URL', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:70%;line-height:0.5">
			<h4><?php _e('Post Category Name', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_2]" name="ggs_settings[icon_2]" type="text" value="<?php echo $ggs_options['icon_2']; ?>"/>
				<label class="description" for="ggs_settings[icon_2]"><?php _e('2) Category Name', 'ggs_domain'); ?></label>
			</p>
			</div>
			
			<div style="float:left;width:30%;line-height:0.5"><h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[url_3]" name="ggs_settings[url_3]" type="text" value="<?php echo $ggs_options['url_3']; ?>"/>
				<label class="description" for="ggs_settings[url_3]"><?php _e('3) Icon URL', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:70%;line-height:0.5">
			<h4><?php _e('Post Category Name', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_3]" name="ggs_settings[icon_3]" type="text" value="<?php echo $ggs_options['icon_3']; ?>"/>
				<label class="description" for="ggs_settings[icon_3]"><?php _e('3) Category Name', 'ggs_domain'); ?></label>
			</p>
			</div>			
			
			<div style="float:left;width:30%;line-height:0.5"><h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[url_4]" name="ggs_settings[url_4]" type="text" value="<?php echo $ggs_options['url_4']; ?>"/>
				<label class="description" for="ggs_settings[url_4]"><?php _e('4) Icon URL', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:70%;line-height:0.5">
			<h4><?php _e('Post Category Name', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_4]" name="ggs_settings[icon_4]" type="text" value="<?php echo $ggs_options['icon_4']; ?>"/>
				<label class="description" for="ggs_settings[icon_4]"><?php _e('4) Category Name', 'ggs_domain'); ?></label>
			</p>
			</div>
			
			<div style="float:left;width:30%;line-height:0.5"><h4><?php _e('Icon url', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[url_5]" name="ggs_settings[url_5]" type="text" value="<?php echo $ggs_options['url_5']; ?>"/>
				<label class="description" for="ggs_settings[url_5]"><?php _e('5) Icon URL', 'ggs_domain'); ?></label>
			</p>
			</div>
			<div style="float:left;width:70%;line-height:0.5">
			<h4><?php _e('Post Category Name', 'ggs_domain'); ?></h4>
			<p>
				<input id="ggs_settings[icon_5]" name="ggs_settings[icon_5]" type="text" value="<?php echo $ggs_options['icon_5']; ?>"/>
				<label class="description" for="ggs_settings[icon_5]"><?php _e('5) Category Name', 'ggs_domain'); ?></label>
			</p>
			</div>			
			</div>
			<div style="">
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'ggs_domain'); ?>" />
			</p>
			</div>
		
		</form>
			<div class="feedback">
				<p style="background:#ccc;color:#000;border: solid black 1px;width: 500px;">Need a customization? It's free and can be done in 1 day. Email me at hello@tallwaves.com</p>
			</div>
		
	</div>
	

	
	
	<?php
	echo ob_get_clean();
}

function ggs_add_options_link() {
	add_options_page('Post Icons', 'Post Icons', 'manage_options', 'ggs-options', 'ggs_options_page');
}
add_action('admin_menu', 'ggs_add_options_link');

function ggs_register_settings() {
	// creates our settings in the options table
	register_setting('ggs_settings_group', 'ggs_settings');
}
add_action('admin_init', 'ggs_register_settings');