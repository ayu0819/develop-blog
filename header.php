<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns#">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
  <!-- meta -->
  <meta name="keywords" content="development,study,web">
  <meta name="description" content="webとe-commerceらの情報を発信しています">
  <!-- /meta -->
  <!-- ogp -->
  <meta property="og:title" content="RATIO">
  <meta property="og:type" content="article">
  <meta property="og:description" content="webとe-commerceらの情報を発信しています">
  <meta property="og:url" content="https://ratio.ym-tane.com/">
  <meta property="og:image" content="/wp-content/uploads/2021/01/og_my-blog.jpg">
  <meta property="og:site_name" content="RATIO">
  <!-- //ogp -->

  <!-- twitter-->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@0819_tateishi">
  <meta name="twitter:creator" content="@0819_tateishi">
  <meta name="twitter:title" content="RATIO">
  <meta name="twitter:description" content="webとe-commerceらの情報を発信しています">
  <meta name="twitter:image:src" content="/wp-content/uploads/2021/01/og_my-blog.jpg">
  <!-- //twitter-->
  <!-- css -->
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/style.css" rel="stylesheet">
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/reset.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">
  <!-- <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" /> -->
  <!-- /css -->

  <script type="text/javascript">
// header
window.addEventListener("scroll",function(){let e=document.querySelector(".navbar");e.classList.toggle("sticky",0<window.scrollY)});
  </script>
  <?php wp_head(); ?>
</head>
<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container"> <h1><a href="https://ratio.ym-tane.com/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="100px" alt="SAMPLE WEB SITE" /></a></h1> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <?php wp_nav_menu( array(
   'theme_location'=>'place_global', 
            'container'     =>'', 
            'menu_class'    =>'',
            'items_wrap' => '%3$s',
          ));
    ?>
      </div>
    </div>
  </nav>
  <div class="nav__icons">
    <div class="container">
      <nav class="nav justify-content-end nav__icon"> 
        <!-- <a class="nav-link" href="#"><i class="fab fa-pinterest-p nav__pinterest"></i></a>  -->
        <a class="nav-link" href="https://twitter.com/0819_tateishi" target="blank"><i class="fab fa-twitter nav__twitter"></i></a> 
      </nav>
    </div>
  </div>
    <!-- btn -->
<a class="top" href="#"><i class="fas fa-angle-up"></i></a>
  <!--/ btn -->
    <!-- /header -->