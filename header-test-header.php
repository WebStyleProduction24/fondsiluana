
<!doctype html>
<html>
<head>
  <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
  <meta name="format-detection" content="telephone=no">
  <meta name="MobileOptimized" content="320">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon"> 
  <title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php
  if( is_home() || is_page(72) ){}
    else { ?>
<!--       <div class="container">

        <h4 class="attention">Внимание! Страница работает в режиме разработки, приносим извинения за принесенные неудобства</h4>

    </div> -->
  <?php } ?>





  
  <header>


  </header>

  <main>