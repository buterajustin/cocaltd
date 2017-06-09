<?php get_header();?>


<div id="zone_contenu">              
	
	<div id="contenu" class = "container">
    <div class = "h_20"></div>
        
    <div id="bg_contenu">
    	<?php if(have_posts()) : while( have_posts()):the_post();?>
			<div class = "titre_bleu"><h1><?php echo the_title();?></h1></div>
			<div class = "h_20"></div>

			<p style="text-align: center;"> <?php the_content();?> </p>
		<?php endwhile; else:?>
			<p style="text-align: center;"> <h1><?php _e('Sorry, page not found');?> </h1> </p>
		<?php endif;?>
    </div>
    

<?php get_footer();?>