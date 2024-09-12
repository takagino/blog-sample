<?php get_header(); ?>
<main>
  <div class="contents">
    <div class="post-all">
      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
      ?>

          <article class="post">
            <img src="<?php echo get_theme_file_uri('/images/pic_post01.jpg'); ?>" alt="">
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date"><?php the_time('Y年n月j日'); ?></p>
            <div class="post-contents">
              <?php the_content(); ?>
            </div>
            <div class="post-info">
              <ul>
                <li class="post-category">Category: <?php echo get_the_category_list(','); ?></li>
                <li class="post-tag"><?php echo get_the_tag_list('Tag: ', ' / '); ?></li>
              </ul>
            </div>
          </article>

      <?php
        endwhile;
      endif;
      ?>

      <div class="nav-page">
        <ul>
          <li><a href="#">←前の記事</a></li>
          <li><a href="#">一覧に戻る</a></li>
          <li><a href="#">次の記事→</a></li>
        </ul>
      </div>
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
