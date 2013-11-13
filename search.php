<?php get_header(); ?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content" class="clear"> <!-- content div ends in footer after Recent Posts div and Bottom Nav -->
			<h3 id="search-title">Search results for "<?php echo get_search_query(); ?>".</h3>
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class("post left"); ?>>						
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small>posted on <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); 
							//lots of parameters here, look at lecture notes?></time></small>	
						<p><?php the_content(); ?></p>						
						<p><small><?php comments_number("0 comments", "1 comment", "% comments"); 
							//shows number of comments, parameters reflect having no comments, 1 comment, or plural 
							//plural uses % to show the right number?>
						</p></small>
					</article>			
			<?php endwhile; else: ?>
				<div id="blank-search">
					<p>Sorry, the search produced no results.</p>
					<?php get_search_form(); ?>
				</div>	
				<div class="blue-line" id="blank-search-bottom"></div>			
			<?php endif; ?>	
<?php get_footer(); ?>