<?php
  get_header();
?>

<?php
  if (have_posts()) {
    while(have_posts()) {
      the_post();
      
      get_template_part('template-parts/content', 'archive');
    }
  }
?>

<div class="pagination">
  <?php
    the_posts_pagination();
  ?>
</div>

<?php
  get_footer();
?>