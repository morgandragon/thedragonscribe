<div class="post-body" id="comments">

  <h2 class="comment-reply-title">
    <?php
      if (!have_comments()) {
        echo "Leave a comment";
      } else {
        comments_number();
      }
    ?>
  </h2>

  <hr class="main">

  <div class="comments-inner">
      <?php
        wp_list_comments(
          array(
            'avatar_size' => 60,
            'style' => 'div'
          )
        )
      ?>
  </div>

  <div class="comments-form">
    <?php
      if (comments_open()) {
        comment_form(
          array(
            'class_form' => '',
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after' => '</h2>'
          )
        );
      } else {
        echo "Comments are turned off for this post";
      }
    ?>
  </div>

</div>