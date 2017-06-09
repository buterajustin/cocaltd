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
                        <a href="javascript:void(0);" onclick="window.open('print.html','Print','width=650px, height=550px,resizable=no,scrollbars=yes')" title="Impression page">
                          <img src="<?php echo get_template_directory_uri();?>/img/print.gif" alt="Impression page " border="0" style="vertical-align:middle" /></a>
                    </div>
                </div>
            </div>
      	</div>
        
    
<div id="menu_gauche" class = "col-md-3 ">
    <ul class="menu_gauche">
         <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=183265711823162";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/COCA-ltd-1635999333095146" data-tabs="timeline" data-height="400px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/COCA-ltd-1635999333095146" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/COCA-ltd-1635999333095146">COCA ltd</a></blockquote></div>
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
<div class="separe h_10"></div>


<div class="separe h_20"></div>
             </div>
             <div class="separe"></div>
    	
	</div>
</div>


<?php get_footer();?>
