<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">

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
                    <img src="<?php echo carbon_get_theme_option('crb_header_logo'); ?>" alt="">
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
        <div class="b_header__logo">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="b_header__logo__bg">
                  
                </div>
                
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </header>