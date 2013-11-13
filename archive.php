<?php get_header(); ?>
<?php 
	$title = "";
	$recipecat = "";
	
	if(is_day())
	{
		$title = "Viewing " . get_the_date() . " daily archives.";
	}
	elseif(is_month())
	{
		$title= "Viewing " . get_the_date("F Y") . " monthly archives.";
	}
	elseif(is_year())
	{
		$title = "Viewing " . get_the_date("Y") . " yearly archives.";
	}
	elseif(is_category(array('breads-biscuits', 'breakfast', 'cookies', 'misc', 'muffins')))
	{
		$title = "Viewing the " . single_cat_title("", false) . " archives.";
	}
	else
	{
		$recipecat = 1; //needed to display the recipes category ONLY below
		$title = "Recipes!!!!";
	}
?>
	<div id="middle" class="clear"> <!-- middle div ends in footer -->
		<div id="content" class="clear"> <!-- content div ends in footer after Recent Posts div and Bottom Nav -->
				
			<?php if($recipecat == 1): ?> <!-- if this is the recipes category ONLY -->
				<div id="page-title">
					<?php wp_title(""); ?>
				</div>				
				<nav class="breadcrumb">
					<?php if(function_exists("bcn_display"))bcn_display(); ?>
				</nav>	
				<?php
					$subcategories = get_categories('&child_of=5&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
					
					foreach ($subcategories as $subcategory) {
					  echo '<div class="recipe-category left">';
					  echo sprintf('<h2><a href="%s">%s</a></h2>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
					  echo '<img src="' . get_template_directory_uri() . '/images/' . $subcategory->slug . '.jpg">';
					  echo '</div>';
					}
				?>
				<div  class="blue-line blue-line-big-margins clear"></div>
			
			<?php else: ?> <!-- displays every other option BUT recipes category -->			
				<h3 id="archive-title"><?php echo $title ?></h3>
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
					<p>Sorry, we found no posts.</p>
				<?php endif; ?>	
			<?php endif; ?>	


<?php get_footer(); ?>