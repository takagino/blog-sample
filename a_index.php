<!doctype html>
<html <?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <style>
    [data-link] {
      cursor: pointer;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="inner">
    <header>
      <h1><a href="<?php echo home_url('/'); ?>">Sample Blog</a></h1>
      <nav class="nav-global">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.html">CONTACT</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div class="contents">
        <div class="post-all">

          <?php
          if (have_posts()):
            while (have_posts()):
              the_post();
          ?>

              <article data-link="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
                <img src="<?php echo get_theme_file_uri('/images/pic_post01.jpg'); ?>" alt="">
                <h2 class="post-title"><?php the_title(); ?></h2>
                <p class="post-date"><?php the_time('Y年n月j日'); ?></p>
                <div class="post-contents">
                  <?php the_excerpt(); ?>
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
  </div>
  <footer>
    <div class="inner">
      <ul class="nav-sns">
        <li><a href="#">Twittr</a></li>
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Facebook</a></li>
      </ul>
      <p><small>Copyright sample-blog All Rights Reserved.</small></p>
    </div>
  </footer>

  <script>
    window.addEventListener('DOMContentLoaded', () => {
      const post = document.querySelectorAll('[data-link]');
      for (const element of post) {
        element.addEventListener('click', () => {
          location.href = element.dataset.link;
        });
      }
    });
  </script>
  <?php wp_footer(); ?>
</body>

</html>
