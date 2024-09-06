<!doctype html>
<html <?php language_attributes()?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if( is_singular() ): ?>
  <meta name="description" content="<?php echo get_the_excerpt(); ?>">
  <?php else: ?>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php endif; ?>

  <meta name="format-detection" content="telephone=no,address=no,email=no">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="inner">
    <header>
      <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></h1>
      <nav class="nav-global">
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">HOME</a></li>
          <li><a href="<?php echo home_url('/about/'); ?>">ABOUT</a></li>
          <li><a href="<?php echo home_url('/contact/'); ?>">CONTACT</a></li>
        </ul>
      </nav>
    </header>

    <!-- パンくずリスト（プラグイン適応時） -->
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if(function_exists('bcn_display')):
        bcn_display();
      endif; ?>
    </div>
