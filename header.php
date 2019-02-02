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
  <?php echo get_option('google_analytics'); ?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" role="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo get_home_url(); ?>"><span class="lightdarkblack font-weight-bold">WeModern</span> <span class="mobile-none">|</span><span class="lightdarkblack font-weight-light mobile-none"> SEO-Продвижение</span></a>
            <div class="headermenu">
              <div class="pc-show">
                <div class="menu">
                  <ul class="d-flex align-items-center">
                    <li><a href="tel:380997713997"> +38(099)77-13-997</a></li>
                    <li><a href="tg://resolve?domain=web_WeModern"><i class="fab fa-telegram-plane"></i></a></li>
                    <li><a href="viber://chat?number=+380997713997"><i class="fab fa-viber"></i></a></li>
                    <li><a href="mailto:web.wemodern@gmail.com"><i class="far fa-envelope"></i></a></li>
                    <li> | </i></a></li>
                    <li><div class="btn btn-success" data-toggle="modal" data-target="#seoAuditModal">Заказать аудит</div></li>
                  </ul>
                </div>
              </div>
              <div class="mobile-show">
                <div class="toogle-menu"></div>
                <div class="slide-menu">
                  <div class="menu">
                   <ul>
                      <li class="display-4 font-gagalin">Контакты:</li>
                      <li><a href="tel:380997713997"> Телефон</a></li>
                      <li><a href="tg://resolve?domain=web_WeModern">Telegram</a></li>
                      <li><a href="viber://chat?number=+380997713997">Viber</a></li>
                      <li class="mb-4"><a href="mailto:web.wemodern@gmail.com">Почта</a></li>
                      <li><div class="btn btn-light btn-lg" data-toggle="modal" data-target="#seoAuditModal">Заказать аудит</div></li>
                   </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">