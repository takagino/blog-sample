<?php get_header(); ?>
<main>
  <div class="contents">
    <div class="post-all">
      <p>
        <?php if (is_category()) : ?>
          カテゴリー「<?php single_cat_title(); ?>」に属する記事一覧
        <?php elseif (is_tag()) : ?>
          タグ「<?php single_tag_title(); ?>」が設定された記事一覧
        <?php elseif (is_date()) : ?>
          「<?php echo get_the_date('Y年n月'); ?>」に投稿された記事一覧
        <?php else: ?>
          「<?php the_archive_title(); ?>」に関する記事一覧
        <?php endif; ?>
      </p>

      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
      ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <img src="<?php echo get_theme_file_uri('/images/pic_post01.jpg'); ?>" alt="">
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date"><?php the_time('Y年n月j日'); ?></p>
            <div class="post-contents">
              <?php the_excerpt(); ?>
            </div>
            <a class="post-btn" href="<?php the_permalink(); ?>">続きを読む</a>
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
        <?php
        $arg = array(
          'prev_text' => '<',
          'next_text' => '>',
          'type' => 'list'
        );
        the_posts_pagination($arg);
        ?>
      </div>
    </div>
    <div class="sidebar">
      <?php get_sidebar(); ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>
