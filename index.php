<?php get_header(); ?>	
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content" class="clear"> <!-- content div ends in footer after Recent Posts div and Bottom Nav -->
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class("post left"); ?>>						
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small>posted on <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); 
							//lots of parameters here, look at lecture notes?></time></small>	
						<p><?php the_content(); ?></p>						
						
					</article>			
				<?php endwhile; else: ?>
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	
				
<?php get_footer(); ?>