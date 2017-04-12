		<?php themezee_footer_before(); // hook before #footer ?>
		<footer id="footer" class="clearfix" role="contentinfo">
			<?php 
				$options = get_option('zeenoble_options');
				if ( isset($options['themeZee_general_footer']) and $options['themeZee_general_footer'] <> "" ) :
					echo do_shortcode(wp_kses_post($options['themeZee_general_footer']));
				endif;
			?>
			<div id="credit-link"><?php themezee_credit_link(); ?></div>
		</footer>
		<?php themezee_footer_after(); // hook after #footer ?>
	
</div><!-- end #wrapper -->
<?php themezee_wrapper_after(); // hook after #wrapper ?>

<?php wp_footer(); ?>
</body>
</html>