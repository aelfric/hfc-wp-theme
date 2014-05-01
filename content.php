<div class="news">
   <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
   <span class="byline">Posted <?php the_time('F jS, Y') ?> by <?php the_author() ?></span>
   <p><?php  the_content(); ?></p>

   <?php comments_template() ?>
</div>
