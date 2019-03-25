<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header d-flex align-items-center" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="d-flex justify-content-between align-items-center">
            <div class="header__logo">
              <img src="<?php bloginfo('template_url') ?>/img/logo.png" srcset="<?php bloginfo('template_url') ?>/img/logo-01@2x.png 2x, <?php bloginfo('template_url') ?>/img/logo-01@3x.png 3x" alt="Logo">
            </div>
            <div class="header__menu">
              <?php wp_nav_menu([
                  'theme_location' => 'head_menu',
                  'container' => 'nav',
                  'container_class' => 'head_menu',
                  'menu_id' => 'head_menu',
                  'menu_class' => 'd-flex'
                ]); ?>
            </div>
            <div class="header__lang d-flex">
              <li class="header__lang-active"><a href="#">укр</a></li>
              <li><a href="#">рус</a></li>
              <li><a href="#">en</a></li>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">