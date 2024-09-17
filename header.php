<!doctype html>
<html <?php language_attributes(); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php bloginfo('description'); ?>">
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
