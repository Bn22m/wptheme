<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head() ?>
  </head>
  <body>
    <div class="container">
      <header class="navbar0">
        <div class="navbar">
        <div class="navinfo">
        <nav class="navbar2">
          <h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
          <h3><?php bloginfo('description'); ?></h3>
        </nav>
        </div>
        <div class="navinfo">
        <nav class="navbar1">
          <?php wp_nav_menu(
            array (
              'theme_location' => 'primary',
              'menu_class' => 'page-links-menu',
              'depth' => 1,
              'link_before' => '<span class="screen-reader-text">',
              'link_after' => '</span>',
            )
          ) ?>
        </nav>
        </div>
        </div>
      </header>
      <hr>
