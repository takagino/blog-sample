<aside class="side-search">
  <?php get_search_form(); ?>
</aside>

<aside class="side-category">
  <h2 class="side-title">category</h2>
  <ul class="side-list">
    <?php
    $args = array(
      'title_li' => ''
    );
    wp_list_categories($args);
    ?>
  </ul>
</aside>

<aside class="side-archive">
  <h2 class="side-title">archive</h2>
  <ul class="side-list">
    <?php
    $args = array(
      'show_post_count' => '1'
    );
    wp_get_archives($args);
    ?>
  </ul>
</aside>

<aside class="side-about">
  <h2 class="side-title">about</h2>
  <p class="about-name">Yamada Trou</p>
  <ul>
    <li>トライデントコンピュータ専門学校Webデザイン学科</li>
  </ul>
</aside>
