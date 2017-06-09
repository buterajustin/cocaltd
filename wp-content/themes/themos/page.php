<?php get_header();?>


<div id="zone_contenu">              
	
	<div id="contenu" class = "container">
    <div class = "h_20"></div>
        
    
<div id="bg_contenu">
<div class = "col-md-12">
	
    
    <div id = "bloc_diaporama_actualite">
        <?php include (ABSPATH . '/wp-content/plugins/wp-featured-content-slider/content-slider.php'); ?>

        <!--<div  class = "col-md-8 no-margin" id="bloc_actu_gauche">
	

	<div id="slider_actualite_image">
        

        <?php query_posts('cat=1&showposts=1') ; while(have_posts()) : the_post() ; 
        	$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
        ?>
	        <div> 
	            <div class = "actualite_image" style = "background-image:url('<?php echo $featured_image[0]; ?>')">
	            </div>
	        </div>
    </div>

</div>

<div class = "col-md-4" id="bloc_actu_droite">
<div class="separe h_10"></div>
<span class="titre_bleu">News</span><br /><br />

			
	<div id="slider_actualite_texte">
		<div class="lien_noir" style="cursor:pointer" onclick="window.location.href='<?php the_permalink();?>'">
			<span class="titre_actu"><b><?php the_title();?></b></span>
			<div id="h_10"></div>
			<span class="texte_bandeau"><?php the_excerpt();?></span>
		</div>
	<?php endwhile;?>

	</div>






<div class = "h_10"></div>
<div class="ls_button">
	 <a href="<?php the_permalink();?>" class="lien_noir">&raquo; Read more</a>
</div>

<?php wp_reset_query();?>

</div>-->
<div class="separe"></div>    </div>
</div>

<div class="separe h_20"></div>

<div id="bloc_activite" class = "col-md-12">
	
<div id = "bloc_activite_content">
<div class = "h_10"></div>
	<div class = "p_5"><span class="titre_bleu">Our activities</span></div>
<div class = "h_10"></div>
        
        	
                          
            
            
            
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

</div>
			            
            
            
            
            			 
			
        	
       
		

<div class = "separe h_10"></div>
</div>
<div class = "separe"></div>

<script>
	resize_hauteur(".bloc_activite_content");
</script>




</div>
<div class="separe h_20"></div>


<div id = "bloc_innovation" class = "col-md-4">
	
<div id="bloc_innovation_content">
    <span class="titre_bleu">  Innovations </span>
    <div class = "h_20"></div>
                    
                				  <center> <img class = "bloc_publication_image" src="<?php echo get_template_directory_uri();?>/img/innovation_2.jpg"></center>
			                 <div class = "h_10"></div>
                
                
                <span class="titre_innovation"></span>
                <div class = "h_5"></div>
                <span class="ls_button"><a href="17-litto-cms-plateforme-innovante-pour-ameliorer-la-gestion-du-littoral-du-golfe-du-lion-36.html" class="lien_noir"> &raquo;&nbsp;Read more</a></span>
                <div class="h_20"></div>            	
                 
     
</div> 

<div class="ls_button pull-right">
     <a href="innovations-5.html" class="lien_noir">&raquo; Lire la rubrique Innovations</a>
</div>


    <div class = "h_10"></div>
</div>

<div id = "bloc_publication" class = "col-md-4">
	<div id="bloc_publication_content">
	<span class="titre_bleu">  Publications & Videos </span>
	<div class = "h_20"></div>
      
				
			<div class = "col-md-12" style="text-align:center">
			   				  					<a href="force_download_publications.php?id=114" title="Télécharger le fichier">
									   <center><img class = "bloc_publication_image" src="<?php echo get_template_directory_uri();?>/img/publication_82.jpg"></center>
				   </a>
				                  <div class = "h_10"></div>
			</div>
			<div class = "col-md-12">
                <span class="titre_innovation"></span>
                                <div class = "h_5"></div>
                <span class="ls_button">
							
        				<a href="114-braconnage-de-la-grande-faune-en-afrique-le-cas-du-gabon-et-du-mozambique-28.html#114" class="lien_noir">
                    	                    &raquo; Read more</a>
                                    </span>
			</div>
			<div class="separe h_20"></div>
			</div>

<div class="ls_button pull-right">
	<a href="publications-scientifiques-27.html" class="lien_noir">&raquo; Lire la rubrique Publications et vidéos</a>
</div>
<div class="separe h_10"></div>



    <div class = "h_10"></div>
</div>

<<div id = "bloc_rejoignez_nous" class = "col-md-4">
	<table style="height: 100%; width: 100%;" border="0" cellspacing="0" cellpadding="0">
<tbody>
<tr class="titre_ble2u">
<td style="height: 20px; padding: 5px; background-color: #03b300;"><span>Join Us &nbsp;!</span></td>
</tr>
<tr>
<td><a href="../rejoignez-nous-41.html"><img src="<?php echo get_template_directory_uri();?>/img/recrute2017.jpg" alt="" width="100%" /></a></td>
</tr>
<tr>
<td style="height: 30px; padding: 5px; background-color: #03b300;">&nbsp;<span style="color: #005989;"><a style="color: #005989;" href="../rejoignez-nous-41.html"></a></span></td>
</tr>
</tbody>
</table>    <div class = "h_10"></div>
</div>

<div id="h_10"></div>

<?php get_footer();?>