<?php
//初期設定
function my_theme_support() {
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
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
add_filter('excerpt_length', 'custom_excerpt_length');

//抜粋の文末文字を指定
function custom_excerpt_more($more) {
  return ' ... 続く';
}
add_filter('excerpt_more', 'custom_excerpt_more');
