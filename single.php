<?php
  get_header();
?>
<article class="post-body">
    <h1 class="post-heading"><?php the_title(); ?></h1>
    <hr class="main">
    <div class="metadata">
      <span class="metadata-item">
        <?php 
          the_date(); 
        ?>
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
  comments_template();
?>

<?php
  get_footer();
?>