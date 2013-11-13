<?php get_header(); ?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class("single-post left"); ?>>	
						<?php the_post_thumbnail(); //this inserts the featured image ?>
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<small>posted on <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F j, Y'); 
									//lots of parameters here, look at lecture notes?></time></small>	
						
						<p><?php the_content(); ?></p>	
						<!-- the_author() will display what the user has picked as the public name in the dashboard
							but if you use the_author_meta(), you can specify what is displayed -->
						<?php echo do_shortcode('[hupso]'); ?> 
						<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
						
						<small>
							<p>
								Listed in: <?php the_category(", "); ?><br>
								<?php if(get_the_tags()): ?> 
									<?php the_tags(); ?>
								<?php endif; ?>
							</p>
						</small>
						<div  class="blue-line"></div>
						<div id="comments-div">
							<?php comments_template(); ?> <!-- references comments.php (originally in includes folder, brought it over into theme folder) -->
						</div>
					</article>			
			<?php endwhile; else: ?>
				<p>WRITE MOAR POSTS!!!!!1</p>
			<?php endif; ?>			
		
		<div class="clear"></div>

<?php get_footer(); ?>