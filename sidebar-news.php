<?php
	// news sidebar		
    $news_cat_id = 0;
?>
<div id="content_zone">
	<!--- Content goes here -->
	<div class="box b280">
       <?php dynamic_sidebar('sidebar');
            $output = NULL;
			// if the News & Media page has sub pages, lsit them with a "News & Media" header.  Only show this if there are subpages.
			if (is_page()) {
			  $page = $post->ID;
			  if ($post->post_parent) {
				$page = $post->post_parent;
			  }
			  $children = wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
			  if ($children) {
				$output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=');
			  }
			}
			if($output!=NULL) {
				echo "<ul><b>NEWS &amp; MEDIA</b>";
				echo $output."</ul>";
			}
			
			// if the news&media has sub-categories (with NEWS being the parent category) show them here
		?>
			<?php
				$child_cats = wp_list_categories('echo=0&title_li=&child_of='.$news_cat_id);
			?>
					<ul><b>NEWS &amp; MEDIA CATEGORIES</b>
					<li><a href="<?php echo get_page_link(9); ?>">All News &amp; Media</a></li>
				<?php echo $child_cats."</ul>"; ?>
		<!--- sidebar with buttons --->
		<?php if($post->ID !=19 && $post->post_parent != 19) { ?>
		<a href="<?php echo get_permalink(19); ?>">
			<div class="rbut hp">The Hope Players</div>
		</a>
		<?php } ?>
		<a href="<?php echo get_permalink(17); ?>" class="eolink">
			<div class="rbut eo">Educational Outreach</div>
		</a>
	</div>
