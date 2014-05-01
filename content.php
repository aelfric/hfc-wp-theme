<div class="news">
   <?php 
      if ( is_single() ) {
         the_title( '<h1 class="entry-title">', '</h1>' );
      } else {
         the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
      }
   ?>
   <span class="byline">Posted <?php the_time('F jS, Y') ?> by <?php the_author() ?></span>
   <?php  the_content(); ?>

   <?php 
      if (is_single()) {
         comments_template();
      } else { ?>
      <span class="commentline"><a href="<?php comments_link(); ?>">Comments (<?php echo get_comments_number('%', '%', '%'); ?>)</a></span>
      <?php
      } 
   ?>
</div>
