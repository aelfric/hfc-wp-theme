		<div class="tealcor tealheight noselect clearfix">&nbsp;</div>
		<div class="tealspikes noselect">&nbsp;</div>
			<div id="footer">
				<!--- Footer goes here -->
				<div class="box col push1">
					<ul>
						<?php wp_list_pages('meta_key=top_menu&meta_value=true&sort_column=menu_order&title_li='); ?>
					</ul>
				</div>
				<div class="box col push1">
					<ul>
						<?php wp_list_pages('meta_key=sidebar&meta_value=true&sort_column=menu_order&title_li='); ?>
						<li>
							<a href='https://www.facebook.com/pages/The-Hope-for-Change-Foundation/219771063021' class='social'><img src='<?php bloginfo('template_directory'); ?>/img/fb.png' /></a>
							<a href='https://twitter.com/#!/HFC_Foundation' class='social'><img src='<?php bloginfo('template_directory'); ?>/img/tw.png' /></a>
						</li>
					</ul>
				</div>
				<div class="clearfix noselect">&nbsp;</div>
			</div>
		</div>
        <?php wp_footer() ?>
	</body>
</html>
