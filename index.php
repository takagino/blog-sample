<!doctype html>
<html <?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="stylesheet" href="https://unpkg.com/modern-css-reset/dist/reset.min.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
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
            <ul>
              <li><a href="#">&lt;</a></li>
              <li><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
        <div class="sidebar">
          <aside class="side-category">
            <h2 class="side-title">category</h2>
            <ul class="side-list">
              <li><a href="#">日常生活</a></li>
              <li><a href="#">読書</a></li>
              <li><a href="#">作品</a></li>
            </ul>
          </aside>
          <aside class="side-archive">
            <h2 class="side-title">archive</h2>
            <ul class="side-list">
              <li><a href="#">2020年9月</a></li>
              <li><a href="#">2020年8月</a></li>
              <li><a href="#">2020年7月</a></li>
            </ul>
          </aside>
          <aside class="side-about">
            <h2 class="side-title">about</h2>
            <p class="about-name">Yamada Trou</p>
            <ul>
              <li>トライデントコンピュータ専門学校Webデザイン学科</li>
            </ul>
          </aside>
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
  <?php wp_footer(); ?>
</body>

</html>
