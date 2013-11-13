<?php
	/*
	 * Template Name: Recipes Template
	 * 
	 */
?>
<?php get_header(); ?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content">
			<div id="page-title">
				<?php wp_title(""); ?>
			</div>				
			<nav class="breadcrumb">
				<?php if(function_exists("bcn_display"))bcn_display(); ?>
			</nav>
	
			<?php
				
			
			?>
	
			<div class="clear"></div>
<?php get_footer(); ?>