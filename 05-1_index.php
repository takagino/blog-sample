<?php get_header(); ?>
<main>
  <div class="contents">
    <div class="post-all">

      <?php
      if (have_posts()):
        while (have_posts()):
          the_post();
      ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <?php
            if (has_post_thumbnail()):
              the_post_thumbnail('thumbnail');
            else:
            ?>
              <img src="<?php echo get_theme_file_uri('/images/pic_post01.jpg'); ?>" alt="">
            <?php
            endif;
            ?>
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
