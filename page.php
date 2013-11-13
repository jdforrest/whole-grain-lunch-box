<?php get_header(); ?>	
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content" class="clear"> <!-- content div ends in footer after Recent Posts div and Bottom Nav -->
			<div id="page-div"> <!-- new div for default content -->
				<div id="page-title">
					<?php wp_title(""); ?>
				</div>				
				<nav class="breadcrumb">
					<?php if(function_exists("bcn_display"))bcn_display(); ?>
				</nav>			
				
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<p><?php the_content(); ?></p>						
													
				<?php endwhile; else: ?>
					<p>Sorry, we couldn't find your page.</p>
				<?php endif; ?>					
			</div>
<?php get_footer(); ?>