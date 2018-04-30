<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <div id="wptime-plugin-preloader"></div>

      <div id="header" class="fixed transition" style="position: fixed; width: 100%; z-index: 10000;">
      <header class="row no-max pad main">
        <div id="hamburger" class="show-for-small-only">
          <div id="nav-icon3">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>

        <style media="screen">
        @media screen and (max-width: 768px){
          .desk-logo{
            width: 100px;
          }

        }
        </style>

        <a class="desk-logo" href="<?php bloginfo('url'); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2017/03/new_accent_logo.png" width="200" alt="<?php bloginfo('name'); ?>"/></a>
        <nav id="mainnav" class="mainnav" role="navigation">
          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'main-nav',
              'menu_class' => 'no-bullet menu sticky cap hide-for-small-only'
            );

            wp_nav_menu($defaults)
           ?>
        </nav>

        <div class="mobile-nav hide">
          <?php
            $defaults = array(
              'container' => false,
              'theme_location' => 'main-nav',
              'menu_class' => 'no-bullet menu-vertical transition text-center'
            );

            wp_nav_menu($defaults)
           ?>
        </div>
      </header>
    </div>
