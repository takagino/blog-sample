<?php get_header(); ?>
  <main>
    <div class="contents">
      <div class="about">
        <p>page.php</p>

        <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post(); ?>

        <?php the_content(); ?>

        <?php endwhile; ?>
        <?php endif ?>

      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>
