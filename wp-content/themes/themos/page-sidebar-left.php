<?php
/*
	Template Name: Left Sidebar
*/
?>
<?php get_header();?>


<div id="zone_contenu">              
	
	<div id="contenu" class = "container">
    <div class = "h_20"></div>
            
        <div class = "container">
            <div class = "col-md-offset-3">
                <div class = "col-md-6">
                    <div id="add_this" class="addthis_toolbox addthis_default_style">
                        <a class="addthis_button_email"></a> 
                         <a class="addthis_button_twitter"></a> 
                        <a class="addthis_button_facebook"></a>
                        <script type="text/javascript" src="../../s7.addthis.com/js/250/addthis_widget.js#username=brl"></script>
                        <script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
                    </div> 
                </div>
                <div class = "col-md-6 hidden-xs">
                    <div class = "pull-right">
                        <a href="javascript:void(0);" onclick="window.open('print.html','Print','width=650px, height=550px,resizable=no,scrollbars=yes')" title="Impression page">									<img src="<?php echo get_template_directory_uri();?>/img/print.gif" alt="Impression page " border="0" style="vertical-align:middle" /></a>
                         ><a href="<?php the_permalink();?>" class="ariane"> <?php the_title();?></a>> <a href="<?php the_permalink();?>" class="ariane"> <?php the_title();?></a>                    </div>
                </div>
            </div>
      	</div>
        
    
<div id="menu_gauche" class = "col-md-3 ">
    <ul class="menu_gauche">
		<li class="menu_gauche">
 			<a title="About us" href="about-us-35.html"  class="menu_gauche_actif"> <i class="fa fa-chevron-right" aria-hidden="true"></i> About us</a></li>
		<li class="menu_gauche border2">
 			<a title="Organisation chart" href="organisation-chart-10.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Organisation chart</a></li>
		<li class="menu_gauche border2">
 			<a title="Offices" href="offices-11.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Offices</a></li>
		<li class="menu_gauche border2">
 			<a title="Key facts & figures" href="key-facts-%26-figures-12.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Key facts & figures</a></li>
		<li class="menu_gauche border2">
 			<a title="Challenges" href="challenges-66.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Challenges</a></li>
		<li class="menu_gauche border2">
 			<a title="Activities" href="water-supply-and-sanitation-82.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Activities</a></li>
		<li class="menu_gauche border2">
 			<a title="Clients" href="clients-13.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Clients</a></li>
		<li class="menu_gauche border2">
 			<a title="Project experience" href="project-experience-55.html"  class="menu_gauche"> <i class="fa fa-chevron-right" aria-hidden="true"></i> Project experience</a></li>
	</ul>
                                    </div>      
                             <div id="bg_contenu">
               
<div id="zone_texte" class = "col-md-9" >
	<?php if(have_posts()) : while( have_posts()):the_post();?>
	<div class = "titre_bleu"><?php echo the_title();?></div>
	<div class = "h_20"></div>

	<p style="text-align: justify;"> <?php the_content();?> </p>
<?php endwhile; else:?>
	<p style="text-align: justify;"> <?php _e('Sorry, no pages found');?> </p>
<?php endif;?>


<p style="text-align: justify;"></p>

<br /><br /><br /></div>


<div class="separe h_20"></div>

<div id="bloc_activite" class = "col-md-12">
	
<div id = "bloc_activite_content">
<div class = "h_10"></div>
	<span class="titre_bleu">  Our activities </span>
<div class = "h_20"></div>
    
            
<?php query_posts('cat=3&showposts=10') ; while(have_posts()) : the_post() ; ?>
    <div class = "col-md-2 bloc_activite_content">
    	<?php
    		$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); 
    	?>
        <div class = "image_activite" style="background-image:url('<?php echo $featured_image[0]; ?>')"></div>
        <div class = "separe h_5"></div>
        <div class = "libelle_bloc_activite"><a href = "<?php the_permalink();?>" class = "lien_bleu_mention"><?php the_title();?></a></div>
			<div class = "separe h_5"></div>
	</div>
<?php endwhile;?>
<?php wp_reset_query();?>
           		                               	
<div class = "col-md-2 bloc_activite_content hidden-xs">
        <div class = "libelle_bloc_activite_2"><div onclick="window.location.href='project-experience-55.html'" class = "titre_bloc_activite">Our references</div></div>
        <div class = "separe h_5"></div>
        <div class = "image_activite" style="background-image:url('<?php echo get_template_directory_uri();?>/img/fr/image96.png')"></div>
		<div class = "separe h_5"></div>
</div>
			            
            
            
            
            		
<div class = "separe h_10"></div>

</div>

<script>
	resize_hauteur(".bloc_activite_content");
</script></div>


<div class="separe h_20"></div>
             </div>
             <div class="separe"></div>
    	
	</div>
</div>


<?php get_footer();?>