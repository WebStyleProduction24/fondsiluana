
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
      <div class="container">

        <h4 class="attention">Внимание! Страница работает в режиме разработки, приносим извинения за принесенные неудобства</h4>

      </h2>
    </div>
  <?php } ?>

  <header>

    <!-- навигация -->
    <div class="container">
      <div class="col-lg-10">
        <nav class="navbar navbar-expand-lg">
          
         
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" >
            <div class="wrapper-menu d-lg-none" id="open">
              <div class="line-menu half start"></div>
              <div class="line-menu"></div>
              <div class="line-menu half end"></div>
            </div>
          </button>

          <div class="collapse navbar-collapse " id="navbarNavAltMarkup">

            <ul class="navbar-nav ml-auto">
              <li class="nav-item ml-auto">
                <a href="#" aria-current="page" class="nav-link link-gray size15">
                Главная
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="#" class="nav-link link-gray size15">
                О фонде
              </a>
              </li>
              <li class="nav-item ml-auto active">
                <a href="http://fondsiluana.localhost/help-necessary/" class="nav-link link-gray size15">
                Нужна помощь
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="#" class="nav-link link-gray size15">
                Помогли
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="#" class="nav-link link-gray size15">
                Друзья
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="#" class="nav-link link-gray size15">
                Отчеты
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="http://fondsiluana.localhost/news/" class="nav-link link-gray size15">
                Новости
              </a>
              </li>
              <li class="nav-item ml-auto">
                <a href="http://fondsiluana.localhost/contacts/" class="nav-link link-gray size15">
                Контакты
              </a>
              </li>
            </ul>
          </div>
        </nav>
      </div>      
    </div>



     <!-- ниже навигации -->
     <div class="container">
       <div class="row justify-content-lg-between justify-content-md-center" >

         <!-- 1 logo-->
         <div class="col-lg-4  text-lg-left text-center py-md-4">        
           <a  href="<?php echo get_home_url(); ?>">
             <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="фонд святого преподобного Силуана" type="image/svg">
           </a>
         </div>

         <!-- 2  -->
         <div class="col-lg-2 col-md-3 py-sm-2 text-center m-lg-auto mb-md-2 fs-15" >
           <a href="#" class="button border-top gold-border pt-1 link-gray button-menu">Нужна помощь</a>
         </div>

         <!-- 3  -->
         <div class="col-lg-2 col-md-3 py-sm-2 text-center m-lg-auto mb-md-2 fs-15" >
           <a href="#" class="button border-top gold-border pt-1 link-gray button-menu">
             Стать волонтером
           </a>
         </div>

         <div class="d-lg-none w-100"></div> 

         <!-- 4  -->
         <div class="col-lg-3 w-50 text-center m-auto">
           <a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="w-100 text-white roboto btn fs-10 hrt-btn" tabindex="-1" role="button" aria-disabled="true">
             Сделать доброе дело
           </a>
         </div>

       </div>
     </div>













  


  </header>

  <main>