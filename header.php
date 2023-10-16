<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
  <!-- Stylesheets
	============================================= -->
  <?php wp_head(); ?>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header id="navbar-1" class="container-fluid p-0 p-relative z-5 gray-bg" role="banner">
    <div class="p-3">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <a class="navbar-logo" href="/">
            <p>W Relocations Company</p>
          </a>
        </div>
        <div class="col-auto">
          <nav class="navigation-menu d-none d-lg-flex align-items-center">
            <?php $primary = ['theme_location' => 'primary'];
            wp_nav_menu($primary) ?>
          </nav>
          <div id="burger-nav" role="button" aria-label="Open navigation" class="d-lg-none">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="burger-overlay"></div>
        </div>
      </div>
    </div>
    <nav class="mobile-nav d-flex justify-content-center align-items-center">
      <?php $primary = ['theme_location' => 'primary'];
      wp_nav_menu($primary) ?>
    </nav>
  </header>

  <main role="main" style="min-height:75vh;">
