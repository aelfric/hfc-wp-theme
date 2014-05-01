<?php
   /*
   Template Name: News Page
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
      $page_query = new WP_Query('posts_per_page=5'); 
      while ($page_query->have_posts()) {
         $page_query->the_post();

         get_template_part('content', get_post_format());
      }
   ?>
</div>
</div>
<?php get_footer(); ?>
