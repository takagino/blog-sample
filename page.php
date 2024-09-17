<?php get_header(); ?>
<main>
  <div class="contents">
    <div class="about">

      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

          <?php the_content(); ?>

        <?php endwhile; ?>
      <?php endif ?>

    </div>
  </div>
</main>
<?php get_footer(); ?>
