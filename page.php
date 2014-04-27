<?php
	$this_pg_content = get_post($post->ID);
	$content = $this_pg_content->post_content;
	$content = apply_filters('the_content', $content);
	$content = str_replace(']]>', ']]>', $content);
			
	get_header();
	include('slideshow.inc');
?>
<div class="tealcor"></div>
	<div class="teal">
		<?php echo generate_teal_bar($post->id); ?>
		<img id="ribbon" src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbon.png" class="noselect"/>
	</div>
</div>
<?php get_sidebar(); ?>
<div class="box b640">
		<!--- main content stuff -->
		<?php
			echo $content;
		?>
	</div>
</div>
<?php get_footer(); ?>
