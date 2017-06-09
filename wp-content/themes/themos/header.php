<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/xhtml" lang="fr" xml:lang="fr">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" >
<title>	<?php echo wp_title('|', true, 'right'); bloginfo('name');?></title>
<meta name="Description" content="Accueil - BRL Ingenierie -  Aménagement et gestion des eaux,        Développement territorial, Eau potable et assainissement, Gestion des espaces naturels, Infrastructures hydrauliques, Irrigation et Drainage, Ports et gestion des zones côtières, Régulation et télégestion " />
<meta name="Keywords" content="BRLI,BRL,BRL Ingenierie, Aménagement et gestion des eaux,        Développement territorial, Eau potable et assainissement, Gestion des espaces naturels, Infrastructures hydrauliques, Irrigation et Drainage, Ports et gestion des zones côtières, Régulation et télégestion " />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<!-- Css site -->
<?php wp_head(); ?>



<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">


</head>
<body <?php body_class();?>>

<header> 
    <div id="zone_haut"  class = "hidden-xs">
        <div class = "container" id="bandeau_haut" >
        <div id="logo" onclick="window.location.href='.'">
        	 <img src="<?php echo get_template_directory_uri();?>/img/logobrli.png" >
        </div>
        <div id = "baseline"><?php echo get_bloginfo( 'description', 'display' );?><br /></div>
        <div id="drapeau">
            
<!--<a href="#" onclick="setLangue('fr');">-->
<a href="#">
<img src="<?php echo get_template_directory_uri();?>/img/fr.jpg" alt="" style="filter:alpha(opacity=100);" />
</a>

<a href="#">
<img src="<?php echo get_template_directory_uri();?>/img/en.jpg" alt="" style="filter:alpha(opacity=40);" />
</a>
<!--</a>-->

<!--<a href="#" onclick="setLangue('en');"><img src="img/en.jpg" alt="" style="filter:alpha(opacity=40);" /></a>-->


        </div>
        </div>
    </div>
    
    
    <div id="zone_haut_mobile" class = "hidden-lg">
        <div class = "container">
        <div id="logo" onclick="window.location.href='.'">
        	 <img src="<?php echo get_template_directory_uri();?>/img/logobrli.png" >
        </div>
        <div id="drapeau_mobile">
            
<!--<a href="#" onclick="setLangue('fr');">-->
<a href="#">
<img src="<?php echo get_template_directory_uri();?>/img/fr.jpg" alt="" style="filter:alpha(opacity=100);" />
</a>

<a href="#">
<img src="<?php echo get_template_directory_uri();?>/img/en.jpg" alt="" style="filter:alpha(opacity=40);" />
</a>
<!--</a>-->

<!--<a href="#" onclick="setLangue('en');"><img src="maj/phototheque/photos/pictos/en.jpg" alt="" style="filter:alpha(opacity=40);" /></a>-->


        </div>
        </div>
    </div>
    
    <div id="zone_menu_haut">
        <div id="zone_menu" class = "container">
           <div class="row" id="menu"> 
			<?php
				
				$default= array(
					'container' => false,
					'theme_location' => 'primary-menu',
					'menu_class' => 'niveau1'
					);
				wp_nav_menu($default);
			?>
            </div>
            
        </div>
    </div>

    <div class="container">
        <button id="bouton-menu" type="button" class="button-nostyle" >
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </button>
    </div>
    
</header>