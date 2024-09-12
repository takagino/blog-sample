<aside class="side-category">
  <h2 class="side-title">category</h2>
  <ul class="side-list">
    <?php
    $arg = array(
      'title_li' => ''
    );
    wp_list_categories($arg);
    ?>
  </ul>
</aside>
<aside class="side-archive">
  <h2 class="side-title">archive</h2>
  <ul class="side-list">
    <?php wp_get_archives(); ?>
  </ul>
</aside>
<aside class="side-about">
  <h2 class="side-title">about</h2>
  <p class="about-name">Yamada Trou</p>
  <ul>
    <li>トライデントコンピュータ専門学校Webデザイン学科</li>
  </ul>
</aside>
