<?php
/*
Template Name: テンプレートのテスト
*/
?>

<?php get_header(); ?>
  <main>
    <p>カスタムページテンプレートです。</p>

    <?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post(); ?>

    <?php the_content(); ?>

    <?php endwhile; ?>
    <?php endif ?>
  </main>
</div>
<?php get_footer(); ?>
