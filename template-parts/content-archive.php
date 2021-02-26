<div class="archive">
  <h2>
    <?php
      the_title();
    ?>
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