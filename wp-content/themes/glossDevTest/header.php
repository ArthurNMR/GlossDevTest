<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Gloss Developer Test Website">
  <meta name="author" content="">

  <title>Gloss Developer Test</title>
  <?php wp_head(); ?>
</head>

<body>
  <?php
  $custom_logo_id = get_theme_mod('custom_logo');
  $image = wp_get_attachment_image_src($custom_logo_id, 'full');
  ?>

  <!-- HEADER CODES -->
  <header>
    <div class="navigation" id="navigation">
      <div class="col-12 offset-lg-1 col-lg-10 navigation-bar">

        <!-- NAVIGATION LOGO -->
        <div class="nav-logo">
          <a href="<?php echo home_url(); ?>">
            <img src="<?php echo $image[0]; ?>" alt="">
          </a>
        </div>
        <!-- NAVIGATION LOGO END -->

        <!-- NAVIGATION MENU -->
        <div class="navigation-menu-container" id="desktop_menu">
          <!-- SOCIAL ICONS -->
          <div class="social-media">
            <div class="social-icon fb-container">
              <a href="<?php echo get_field('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            </div>
            <div class="social-icon li-container">
              <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
          <!--MENU LIST -->
          <div class="nav-list" id="nav_menu">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>
            <!--SIGN IN BUTTON -->
            <div class="signin-btn">
              <?php
              $link = get_field('signin_link');
              if ($link) :
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
                <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                  <button class="btn-sign"><?php echo esc_html($link_title); ?></button>
                </a>
              <?php endif; ?>
            </div>
            <!--SIGN IN BUTTON END -->
          </div>
          <!--MENU LIST END -->
        </div>


        <!-- MOBILE MENU -->
        <div class="mobile-nav-menu" id="mobile_menu">
          <!-- TOGGLE BUTTON -->
          <div class="toggle-btn">
            <a href="javascript:void(0);" id="burger_menu" class="icon">
              <i class="fa fa-bars" id="bars_menu"></i>
              <i class="fa fa-times" id="times_menu"></i>
            </a>
          </div>
          <!-- TOGGLE BUTTON END -->
          <!-- SIDE BAR MENU -->
          <div class="side-bar" id="side_bar_menu">
            <div class="side-bar-container">
              <div class="mobile-social-media">
                <div class="social-icon fb-container">
                  <a href="<?php echo get_field('facebook_link'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                </div>
                <div class="social-icon li-container">
                  <a href="<?php echo get_field('linkedin_link'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
              </div>
              <div class="menu-list">
                <?php wp_nav_menu(array('theme_location' => 'header-menu'));
                ?>
              </div>
              <div class="mobile-signin-btn">
                <?php
                $link = get_field('signin_link');
                if ($link) :
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                  <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                    <button class="btn-sign"><?php echo esc_html($link_title); ?></button>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <!-- SIDE BAR MENU END-->
        </div>
        <!-- MOBILE MENU END -->

      </div>
    </div>
  </header>