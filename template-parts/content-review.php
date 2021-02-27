<article class="post-body">
    <h1 class="post-heading"><?php the_title(); ?></h1>
    <hr class="main">
    <div class="metadata">
      <span class="metadata-item">
        <?php 
          echo get_the_date();
        ?>
      </span>
      <span class="metadata-item">
        <?php
          the_tags();
        ?>
      </span>
      <span class="metadata-item">
        <?php
          comments_number();
        ?>
      </span>
    </div>
    <hr class="main">
    <image src="<?php the_post_thumbnail_url("full"); ?>" class="cover-image"></image>

    <?php
      the_content();
    ?>
</article>