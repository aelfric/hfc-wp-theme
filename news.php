<?php
	/*
		Template Name: News Page
	*/
	
	get_header();
	$slideshow = get_stylesheet_directory_uri().'/slideshow.inc';
	include $slideshow;
	
	define('WP_USE_THEMES', false);
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
		$page_query = new WP_Query('posts_per_page=5'); 
		get_header();
		if (have_posts()) :
		   while ($page_query->have_posts()) :
			  $page_query->the_post();
		?>
		<div class="news">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<span class="byline">Posted <?php the_time('F jS, Y') ?> by <?php the_author() ?></span>
			<p><?php  the_content(); ?></p>
			<span class="commentline"><a href="<?php comments_link(); ?>">Comments (<?php echo get_comments_number('%', '%', '%'); ?>)</a></span>
		</div>
		<?php
		   endwhile;
		endif;
		?>
	</div>
</div>
<?php get_footer(); ?>