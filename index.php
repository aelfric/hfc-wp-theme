<?php
	get_header();
	$slideshow = get_stylesheet_directory_uri().'/slideshow.inc';
	include $slideshow;
?>
<div class="tealcor"></div>
	<div class="teal">
		a unique organization dedicated to breast cancer research
		<img src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbon.png" class="noselect"/>
		<div class="clear noselect">&nbsp;</div>
	</div>
</div>
<div id="content_zone">
	<!--- Content goes here -->
	<div class="box b280">
		<!--- sidebar with buttons --->
		<a href="<?php echo get_permalink(19); ?>">
			<div class="rbut hp">The Hope Players</div>
		</a>
		<a href="<?php echo get_permalink(17); ?>" class="eolink">
			<div class="rbut eo">Educational Outreach</div>
		</a>
	</div>
	<div class="box b640">
		<!--- main content stuff -->
		This is the blank index page that probably won't be seen.
	</div>
<div class="clear noselect">&nbsp;</div>
</div>
<?php get_footer(); ?>