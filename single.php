<?php get_header(); ?>
    <main>
      <div class="contents">
        <div class="post-all">

          <?php
          if(have_posts()):
          while(have_posts()):
          the_post();
          ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
            <h2 class="post-title"><?php the_title(); ?></h2>
            <p class="post-date"><?php the_time('Y年n月j日'); ?></p>
            <div class="post-contents">
              <?php the_content(); ?>
            </div>
            <div class="post-info">
              <ul>
                <li class="post-category">Category: <?php the_category(','); ?></li>
                <li class="post-tag">Tag: <?php the_tags('Tag:', ' / '); ?></li>
              </ul>
            </div>
          </article>

          <?php comments_template(); ?>

          <?php
          endwhile;
          endif;
          ?>

          <div class="nav-page">
            <ul>
              <li><?php previous_post_link('%link', '←前の記事'); ?></li>
              <li><a href="<?php echo home_url('/'); ?>">一覧に戻る</a></li>
              <li><?php next_post_link('%link', '次の記事→'); ?></li>
            </ul>
          </div>

          <!-- サブループのサンプル -->
          <?php
          $args = array(
            'orderby' => 'rand',
            'posts_per_page' => 6
          );
          $the_query = new WP_Query($args);

          if($the_query->have_posts()):
          while($the_query->have_posts()):
          $the_query->the_post();
          ?>

          <article class="post">
            <?php the_title(); ?>
          </article>

          <?php
          endwhile;
          endif;
          wp_reset_postdata();
          ?>
        </div>
        <div class="sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </main>
  </div>
<?php get_footer(); ?>
