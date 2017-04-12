<?php get_header(); ?>
	<div id="wrap">
		
		<section id="content" class="primary" role="main">
		
		<?php if (have_posts()) : while (have_posts()) : the_post();
		
			

			endwhile;
		
		endif; ?>
			
		
		
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	<?php get_footer(); ?>	
