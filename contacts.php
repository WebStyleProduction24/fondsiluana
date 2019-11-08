<?php
/*
Template Name: Шаблон страницы "Контакты"
*/
?>





<?php get_header(); ?>








<div class="contacts-wrapper">

  <div class="container">
    <div class="row">
      <!-- Главная колонка -->
      <div class="col-lg-9 col-12">

        <div class="container contacts">
          <div class="row">
            <h2 class="contacts-h2 w-100">Наши Контакты</h2>
            <ul class="list-group">
              <li class="list-group-item">
                <div class="contacts-block">
                  <div class="contacts-block-top">
                    <p class="size20 gold-line-bottom">адрес</p>
                  </div>
                  <b class="contacts-b">г. Воронеж</b>
                  <p class="size0_9">ул. Коммисаржевской 10, офис 123</p>
                </div>
              </li>
              <li class="list-group-item">
                <div class="contacts-block">
                  <div class="contacts-block-top">
                    <p class="size20 gold-line-bottom">телефон</p>
                  </div>
                  <a class="link-gray contacts-link" href="tel:+7(650)1065731">
                    +7 650 106 57 31
                  </a>
                </div>
              </li>
              <li class="list-group-item">
                <div class="contacts-block">
                  <div class="contacts-block-top gold-line-bottom">
                    <p class="size20">e-mail</p>
                  </div>
                  <a class="link-gray contacts-link" href="mailto:76501065731@yandex.ru">
                    76501065731@yandex.ru
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <!-- для партнёров -->
            <div class="col-md-6 partner">
              <h3 class="contacts-h3 w-100">Для партнёров</h3>
              <ul class="list-group flex-column">
                <li class="list-group-item">
                  <div class="contacts-block">
                    <div class="contacts-block-top">
                      <p class="size20 gold-line-bottom">телефон</p>
                    </div>
                    <a class="link-gray contacts-link" href="tel:+7(650)1065731">
                      +7 650 106 57 31
                    </a>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="contacts-block">
                    <div class="contacts-block-top gold-line-bottom">
                      <p class="size20">e-mail</p>
                    </div>
                    <a class="link-gray contacts-link" href="mailto:76501065731@yandex.ru">
                      76501065731@yandex.ru
                    </a>
                  </div>
                </li>
              </ul>
            </div>

            <!-- для волонтёров -->
            <div class="col-md-6 volunteer">
              <h3 class="contacts-h3 w-100">Для волонтёров</h3>
              <form action="">
                <div class="form-group m-0">
                  <input id="inp1" class="form-control border-input"  type="text" placeholder="Ваше имя">
                  <label for="inp1"></label>
                </div>
                <div class="form-group m-0">
                  <input id="inp2" class="form-control border-input"  type="text" placeholder="Контактный телефон">
                  <label for="inp2"></label>
                </div>
                <div class="form-group m-0">
                  <input id="inp3" class="form-control border-input"  type="text" placeholder="Ваш e-mail">
                  <label for="inp3"></label>
                </div>
                <div class="form-group m-0">
                  <textarea class="form-control border-textarea" id="textarea" rows="3" placeholder="Вашe сообщение"></textarea>
                  <label for="textarea"></label>
                </div>
                <div class="form-group m-0 form-check">
                  <input id="inp4" class="form-check-input"  type="checkbox" checked>
                  <label class="form-check-label label-font" for="inp4">Согласие на обработку персональных данных</label>
                </div>

                <a href="#" class="btn btn-red fs-10 beneficence" role="button" aria-disabled="true">
                  Стать волонтёром
                </a>

              </form>
            </div>
          </div>
        </div>
      </div><!-- закрыв. col-9 -->
      




      <!-- колонка реквизиты -->
      <div class="col-lg-3 col-auto requisites">
        <h4 class="contacts-h4 w-100">Реквизиты фонда</h4>
        <p class="requisites-text">"Фонд св. преп. Силуана Афонского"</p>
        <p class="requisites-text">
          <span class="requisites-text-header">Номер счёта:</span>
          40703810513000001134
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">Банк получателя:</span>
          
          ЦЕНТРАЛЬНО-ЧЕРНОЗЕМНЫЙ БАНК ПАО СБЕРБАНК
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">БИК:</span>
          042007681
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">Кор. счёт:</span>
          30101810600000000681
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">ИНН:</span>
          3664238750
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">ОГРН:</span>
          1183600000924
        </p>
        <p class="requisites-text">
          <span class="requisites-text-header">КПП:</span>
          366401001
        </p>
        <div class="text-center">
          <a href="#" class="btn requisites-btn fs-10 " role="button" aria-disabled="true">
            Скачать реквизиты
          </a>
        </div>
      </div>

    </div><!-- закрыв. гл. row-->
  </div><!-- закрыв. гл. container -->
</div><!-- wrapper -->



<!-- карта -->
<div class="container map">
  <div class="row">
    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Abd4437fc1983328b3ffe024a7e5ade24658ad904d2f529dabb62617b4cf7ea57&amp;source=constructor" width="1140" height="300" frameborder="0"></iframe>
  </div>
</div>










<?php get_footer(); ?>