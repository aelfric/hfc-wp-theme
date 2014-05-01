<div class="singlepg_comments">
   <?php
   if (have_comments()){
      echo "<h4>Comments:</h4>";
      wp_list_comments(array('style'=>'div'));
   }
   /*$comments = get_comments('post_id='.$post->ID);
   foreach($comments as $comment) {
      // for comment byline
      if($comment->comment_author_url!=NULL) {
         $c_byline = '<a href="'.$comment->comment_author_url.' target="_blank">';
      } elseif($comment->comment_author_email!=NULL) {
         $c_byline = '<a href="mailto:'.$comment->comment_author_email.'">';
      } else {
         $c_byline = '<a href="#">"';
      }
      $c_byline_date = date("F jS, Y", strtotime($comment->comment_date));

      $c_byline.= $comment->comment_author."</a> on ".$c_byline_date;
      echo '<div class="comment">';
      echo '<span class="byline">Posted by '.$c_byline.'</span>';
      echo $comment->comment_content;
      echo "</div>";
   } */
   comment_form(); ?>
</div>
