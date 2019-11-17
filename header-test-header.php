
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

  <header>

    <!-- навигация -->
    <div class="container mb-5 position-relative">
     <div class="row justify-content-md-between align-items-center text-center">

      <nav class="navbar navbar-expand-md fs-15 mb-4 mb-md-2 mb-lg-4 col-12"> <!-- fs-15 относится к тому, что не нужно плодить стили и можно задать для всего контейнера сразу -->

        <button class="navbar-toggler border py-2" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" >
          <div class="wrapper-menu d-lg-none" id="open">
            <div class="line-menu half start"></div>
            <div class="line-menu"></div>
            <div class="line-menu half end"></div>
          </div>
        </button>

        <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a href="#" aria-current="page" class="nav-link link-gray">Главная</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-gray">О фонде</a></li>
            <li class="nav-item active"><a href="http://fondsiluana.localhost/help-necessary/" class="nav-link link-gray">Нужна помощь</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-gray">Помогли</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-gray">Друзья</a></li>
            <!-- Пока скрываем после согласования с заказчиком -->
            <!-- <li class="nav-item">
              <a href="#" class="nav-link link-gray">
                Отчеты
              </a>
            </li> -->
            <li class="nav-item"><a href="http://fondsiluana.localhost/news/" class="nav-link link-gray">Новости</a></li>
            <li class="nav-item"><a href="http://fondsiluana.localhost/contacts/" class="nav-link link-gray">Контакты</a></li>
          </ul>
        </div>
      </nav>

      <div class="col-md-6 col-lg-4 logo">        
       <a  href="<?php echo get_home_url(); ?>">
         <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="фонд святого преподобного Силуана" type="image/svg">
       </a>
     </div>

     <!-- Кнопки -->
     <div class="col-6 col-md-3 col-lg-2 fs-15"><a href="#" class="button border-top gold-border pt-1 link-gray">Нужна помощь</a></div>  
     <div class="col-6 col-md-3 col-lg-2 fs-15"><a href="#" class="button border-top gold-border pt-1 link-gray">Стать волонтером</a></div>


     <div class="col-lg-3 mt-4 mt-lg-0">
       <a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="w-100 text-white btn fs-10 hrt-btn" tabindex="-1" role="button" aria-disabled="true">
         Сделать доброе дело
       </a>
     </div>

   </div>
 </div>
















</header>

<main>