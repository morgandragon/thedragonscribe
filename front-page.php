<?php
  get_header();
?>

  <article class="post-body">
      <h1 class="post-heading"><?php the_title(); ?></h1>
      <?php
        if (have_posts()) {
          while(have_posts()) {
            the_post();
            the_content();
          }
        }
      ?>
  </article>

<?php
  get_footer();
?>