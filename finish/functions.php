<?php
//初期設定
function my_theme_support() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
  add_theme_support('automatic-feed-links');
};
add_action('after_setup_theme', 'my_theme_support');

//区切り文字の変更
function change_title_separator( $sep ){
  $sep = ' | ';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );

//抜粋の文字数を指定
function custom_excerpt_length($length) {
  return 10;
}
add_filter('excerpt_length', 'custom_excerpt_length', 999);

//抜粋の文末文字を指定
function custom_excerpt_more($more) {
  return ' ... 続く';
}
add_filter('excerpt_more', 'custom_excerpt_more');

//cssを追加
function my_style_output() {
  wp_enqueue_style('reset', 'https://unpkg.com/modern-css-reset/dist/reset.min.css');
  wp_enqueue_style('my-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_style_output');

//jsを追加
function my_script_output() {
  if(is_front_page()){
  wp_enqueue_script( 'my-script', get_theme_file_uri('/script.js'), array('jquery'), '1.0.0', true);
  }
}
add_action( 'wp_enqueue_scripts', 'my_script_output');

// 固定ページで「抜粋」を有効化
add_post_type_support('page', 'excerpt');

// カテゴリーとタグのmeta descriptionからpタグを除去
remove_filter('term_description','wpautop');
