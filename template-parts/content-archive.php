<div class="archive">
  <h2>
    <a href="<?php the_permalink() ?>" class="archive-title">
      <?php
        the_title();
      ?>
    </a>
  </h2>

  <image src="<?php the_post_thumbnail_url("thumbnail"); ?>" class="preview-thumbnail"></image>
  
  <div class="metadata-archive">
    <span class="metadata-item-archive">
      <?php 
        echo get_the_date(); 
      ?>
    </span>
    <span class="metadata-item-archive">
        <?php
          comments_number();
        ?>
    </span>
  </div>
  <?php
    the_excerpt();
  ?>

  <a href="<?php the_permalink() ?>">Read More</a>


</div>