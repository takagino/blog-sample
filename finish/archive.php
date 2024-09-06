<?php get_header(); ?>
    <main>
      <div class="contents">
        <div class="post-all">
          <?php the_archive_title(); ?>

          <?php
          if(have_posts()):
          while(have_posts()):
          the_post();
          ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>

            <?php
            if( has_post_thumbnail() ):
              the_post_thumbnail('thumbnail');
            else:
            ?>

            <img src="<?php echo get_theme_file_uri('/images/pic_post01.jpg'); ?>" alt="">

            <?php
            endif;
            ?>

            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date"><?php the_time('Y.n.j.'); ?></p>
            <div class="post-contents">
              <?php the_excerpt(); ?>
            </div>
            <a class="post-btn" href="<?php the_permalink(); ?>">続きを読む</a>
            <div class="post-info">
              <ul>
                <li class="post-category">Category: <?php the_category(','); ?></li>
                <li class="post-tag">Tag: <?php the_tags('Tag:', ' / '); ?></li>
              </ul>
            </div>
          </article>

          <?php
          endwhile;
          else:
          ?>
          <p>記事がありません。</p>
          <?php
          endif;
          ?>

          <div class="nav-page">
            <ul>
              <li><?php previous_posts_link(); ?></li>
              <li><?php next_posts_link('古い記事へ'); ?></li>
            </ul>
          </div>

          <div class="nav-page blog">
            <?php
            the_posts_pagination(
              array(
                'mid_size' => 3,
                'next_text' => '>',
                'type' => 'list'
              )
            );
            ?>
          </div>
        </div>
        <div class="sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </main>
  </div>
<?php get_footer(); ?>
