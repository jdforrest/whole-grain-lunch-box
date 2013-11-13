<!-- Content div opened on main page -->
					<!--
					<div id="recent-posts">
						<h2>Recent Posts</h2>
						<section class="section-gutter">
							<a href="blog.php"><img src="http://placekitten.com/170/120" alt="apple cranberry crisp" title="Apple Cranberry Crisp"></a>
							<h3><a href="blog.php">Apple-Cranberry Crisp</a></h3>
						</section>
						<section class="section-gutter">
							<a href="blog.php"><img src="http://placekitten.com/170/120" alt="whole wheat pineapple upside down muffin" title="Whole Wheat Pineapple Upside-Down Muffin"></a>
							<h3><a href="blog.php">Pineapple Upside-Down Muffins</a></h3>
						</section>
						<section>
							<a href="blog.php"><img src="http://placekitten.com/170/120" alt="blueberry power muffins" title="Blueberry Power Muffins"></a>
							<h3><a href="blog.php">Blueberry Power Muffins</a></h3>
						</section>
						<p id="to-top"><a href="#wrapper">&uarr;&nbsp;Back to top</a></p>
					-->
					
						<?php get_sidebar("bottom"); ?>
					</div> <!-- / recent posts div -->
				</div> <!-- / content div -->
				<?php get_sidebar("right"); ?>
			</div> <!-- /middle -->
			<footer class="clear" id="bottom">
				<?php
					$footerMenu = array(
					"theme_location" => "footer_menu",
					"container" => "nav",
					"container_class" => "",
					"container_id" => "footer_nav",
					"depth" => 1);
				?>
				<?php wp_nav_menu($footerMenu); ?>
				<p class="clear indent">
	        	    Content &amp; Photography &copy; Jennie Norton 2013
	        	    <br><a href="https://twitter.com/CascadingJohn" target="_blank">Web Design &amp; Development</a> &copy; John Forrest 2013	        	    
	        	</p>
			</footer>
		</div> <!-- /wrapper -->
		<?php wp_footer(); ?> <!-- plugins like Google Analytics rely on this -->
	</body>
</html>