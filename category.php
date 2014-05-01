<?php
	/*
		Category pg
	*/
	
	get_header();
    include('slideshow.inc');
	
?>

<div class="tealcor"></div>
	<div class="teal">
		<?php echo generate_teal_bar($post->id); ?>
		<img id="ribbon" src="<?php echo get_stylesheet_directory_uri() ?>/img/ribbon.png" class="noselect"/>
	</div>
</div>
<?php get_sidebar('news'); ?>
<div class="box b640">
		<!--- news loop stuff -->
		<?php
		
           query_posts('posts_per_page=5&category_name='.get_the_cat_slug()); 
           while (have_posts()) {
              the_post();
              get_template_part('content', get_post_format());
           }
           posts_nav_link();
		?>
	</div>
</div>
<?php get_footer(); ?>
