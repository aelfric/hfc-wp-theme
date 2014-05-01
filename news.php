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
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      query_posts('posts_per_page=5i&paged='.$paged);
      //$page_query = new WP_Query('posts_per_page=5'); 
      while (have_posts()) {
         the_post();

         get_template_part('content', get_post_format());
      }
      posts_nav_link();
   ?>
</div>
</div>
<?php get_footer(); ?>
