
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

          <!-- супер кнопка -->
      <!--     <div class="wrapper-menu d-lg-none" id="open_menu">
            <div class="line-menu half start"></div>
            <div class="line-menu"></div>
            <div class="line-menu half end"></div>
          </div> -->











    <div class="container">
      <div class="col-8 offset-2" class="outline: 2px dashed gold;">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="outline: 2px dashed gold;">

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" aria-current="page" class="nav-link link-gray size15">
              Главная
            </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link link-gray size15">
              О фонде
            </a>
            </li>
            <li class="nav-item active">
              <a href="http://fondsiluana.localhost/help-necessary/" class="nav-link link-gray size15">
              Нужна помощь
            </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link link-gray size15">
              Помогли
            </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link link-gray size15">
              Друзья
            </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link link-gray size15">
              Отчеты
            </a>
            </li>
            <li class="nav-item">
              <a href="http://fondsiluana.localhost/news/" class="nav-link link-gray size15">
              Новости
            </a>
            </li>
            <li class="nav-item">
              <a href="http://fondsiluana.localhost/contacts/" class="nav-link link-gray size15">
              Контакты
            </a>
            </li>
          </ul>
        </nav>
      </div>      
    </div>



    


    <div class="container" >
      <div class="row justify-content-between">

        <!-- 1 logo-->
        <div class="col-lg-4 mb-5 text-lg-left text-center" >        
          <a  href="<?php echo get_home_url(); ?>">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="фонд святого преподобного Силуана" type="image/svg">
          </a>
        </div>

        <!-- 2  -->
        <div class="col-lg-2">2</div>

        <!-- 3  -->
        <div class="col-lg-2">3</div>

        <!-- 4  -->
        <div class="col-lg-3" >4

        </div>

      </div>
    </div>

















































  </header>

  <main>