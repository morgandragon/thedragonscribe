<?php
    get_header();
  ?>

  <div class="archive-container">
    <?php
      if (have_posts()) {
        while(have_posts()) {
          the_post();
          
          get_template_part('template-parts/content', 'archive');
        }
      }
    ?>
  </div>

  <div class="pagination">
    <?php
      the_posts_pagination();
    ?>
  </div>


<?php
      get_footer();
?>