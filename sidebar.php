<div id="content_zone">
	<!--- Content goes here -->
	<div class="box b280">
		<!-- If a page has child pages, they go here. -->
		
        <?php dynamic_sidebar( 'sidebar' );
		    	// print Hope Players button BEFORE sub menu on appropriate page.
				// this will print *after* every other submenu
			$hopeplayers_flag = FALSE;
			
			if($post->ID == 19 || $post->post_parent == 19) { ?>
		<a href="<?php echo get_permalink(19); ?>">
			<div class="rbut hp">The Hope Players</div>
		</a>
		<?php 
			$hopeplayers_flag = TRUE;
			} ?>
		
		<?php
		$output = NULL;
		if (is_page()) {
		  $page = $post->ID;
		  if ($post->post_parent) {
			$page = $post->post_parent;
		  }
		  $children=wp_list_pages( 'echo=0&child_of=' . $page . '&title_li=' );
		  if ($children) {
			$output = wp_list_pages ('echo=0&child_of=' . $page . '&title_li=');
		  }
		}
		echo "<ul>".$output."</ul>";
		?>
		<!--- sidebar with buttons --->
		<?php // don't print it again if it happens.
			if(isset($hopeplayers_flag) && !$hopeplayers_flag) { ?>
		<a href="<?php echo get_permalink(19); ?>">
			<div class="rbut hp">The Hope Players</div>
		</a>
		<?php } ?>
		<a href="<?php echo get_permalink(17); ?>" class="eolink">
			<div class="rbut eo">Educational Outreach</div>
		</a>


	</div>
