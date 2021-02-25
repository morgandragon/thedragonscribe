<?php
  get_header();
?>
<article class="post-body">
    <h1 class="post-heading"><?php the_title(); ?></h1>
    <hr class="main">
    <?php
      if (have_posts()) {
        while(have_posts()) {
          the_post();
          
          get_template_part('template-parts/content', 'review');
        }
      }
    ?>
</article>

<?php
  get_footer();
?>