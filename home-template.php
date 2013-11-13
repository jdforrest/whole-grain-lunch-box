<?php
	/*
	 * Template Name: Home Template
	 * 
	 */
?>
<?php get_header(); ?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content">
			
		<!-- this is creating the slider that will display the post images -->
		<?php $recipeQuery = new WP_Query("cat=5"); ?> <!--creates a search for posts in category 5 (which is 'recipes')-->
		
		<?php if($recipeQuery->have_posts()): ?> 
			<div class="slider-wrapper theme-light blue-line blue-line-margins">
				<div id="slider" class="nivoSlider">				
					<?php while($recipeQuery->have_posts()): $recipeQuery->the_post(); ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('slider')?></a> <!-- slider is defined in functions.php -->
					<?php endwhile; ?> 
				</div>
			</div>	
		<?php endif; ?>
	
		<div class="clear"></div>
<?php get_footer(); ?>