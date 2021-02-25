<header class="content-header">
  <div class="metadata">
    <span class="metadata-item">
      <?php the_date(); ?>
    </span>
    <span class="metadata-item">
      <?php
        the_tags();
      ?>
    </span>
    <span class="metadata">
      <?php
        comments_number();
      ?>
    </span>
  </div>
</header>
<hr class="main">
<?php
  the_content();
?>