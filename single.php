<?php
	/*
		For single posts
	*/
	
	get_header();
	include('slideshow.inc');
	
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
		$page_query = new WP_Query('post_id='.$post->ID);
		get_header();
		if (have_posts()) :
			  $page_query->the_post();
		?>
		<div class="news">
			<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			<span class="byline">Posted <?php the_time('F jS, Y') ?> by <?php the_author() ?></span>
			<p><?php  the_content(); ?></p>
			
               <?php comments_template() ?>
			<div class="singlepg_comments">
				<?php comment_form(); ?>
				
				<?php
					$comments = get_comments('post_id='.$post->ID);
					foreach($comments as $comment) :
				if ($comment->approved != 0){	
					// for comment byline
					if($comment->comment_author_url!=NULL) {
						$c_byline = '<a href="'.$comment->comment_author_url.' target="_blank">';
					} else if($comment->comment_author_email!=NULL) {
						$c_byline = '<a href="mailto:'.$comment->comment_author_email.'">';
					} else {
						$c_byline = '<a href="#">"';
					}
					$c_byline_date = date("F jS, Y", strtotime($comment->comment_date));

					$c_byline.= $comment->comment_author."</a> on ".$c_byline_date;
				?>
				<div class="comment">
					<span class="byline">Posted by <?php echo $c_byline; ?></span>
					<?php echo $comment->comment_content; ?>
                 </div>
                 <?php }?>
						
						
				
				<?php endforeach; ?>
			</div>
		</div>
		<?php 
			endif;
		?>
	</div>
</div>
<?php get_footer(); ?>
