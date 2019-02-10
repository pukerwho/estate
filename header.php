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
  
  <section id="content" role="main">
    <header>
      <div class="b_header">
        <div class="b_header__top">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-right">
                <?php echo carbon_get_theme_option('crb_header_top_text'); ?>
                <a href="tel:<?php echo carbon_get_theme_option('crb_header_top_phone'); ?>" class="color-yellow"><?php echo carbon_get_theme_option('crb_header_top_phone'); ?></a>
              </div>      
            </div>
          </div>
        </div>
        <div class="b_header__main">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-between">
                  <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                      <img src="<?php echo carbon_get_theme_option('crb_header_logo'); ?>" alt="">
                    </a>
                  </div>
                  <div class="menu">
                    <?php wp_nav_menu([
                      'theme-location' => 'head_menu',
                      'container' => 'nav',
                      'container_class' => 'head_menu',
                      'menu_id' => 'ul_head_menu'
                    ]); ?>
                  </div>  
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mobile-show">
          <div class="b_header__mobile">
            <div class="b_header__mobile__logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php echo carbon_get_theme_option('crb_header_logo'); ?>" alt="">
              </a>
            </div>
            <div class="b_header__mobile__info">
              <?php echo carbon_get_theme_option('crb_header_top_text'); ?>
              <a href="tel:<?php echo carbon_get_theme_option('crb_header_top_phone'); ?>"><?php echo carbon_get_theme_option('crb_header_top_phone'); ?></a>
            </div>
            <div class="toogle-menu"></div>
            <div class="slide-menu">
              <div class="menu">
                <?php wp_nav_menu([
                  'theme-location' => 'head_menu',
                  'container' => 'nav',
                  'container_class' => 'head_menu',
                  'menu_id' => 'ul_head_menu'
                ]); ?>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </header>