<?php
/*
Template Name: Шаблон страницы "Контакты"
*/
?>





<?php get_header(); ?>



<div class="container">
  <div class="row">

    <!-- Главная колонка -->
    <div class="col-lg-9 col-md-12">

      <div class="row">
        <!-- для партнёров -->
        <!-- для партнёров -->
        <div class="col-md-5">
          <h3 class="mb-4">Наши Контакты</h3>
          <div class="mb-1 mb-sm-5">
            <div class="position-relative">
              <p class="fs-12 pb-2 mb-2 gold-line-bottom">адрес</p>
            </div>
            <div class="fs-18">
              г. Воронеж
              <p class="fs-12"><a href="https://yandex.ru/maps/-/CGTNQZiv" class="link-gray" target="blank">ул. Комиссаржевской, д. 10, оф. 910</a></p>
            </div>
          </div>
          <div class="mb-1 mb-sm-5">
            <div class="position-relative">
              <p class="fs-12 pb-2 mb-2 gold-line-bottom">телефон</p>
            </div>
            <p><a class="link-gray fs-18" href="tel:+7(960)1065731">+7 960 106 57 31</a></p>
          </div>
          <div class="mb-5">
            <div class="position-relative gold-line-bottom">
              <p class="fs-12 pb-2 mb-2">e-mail</p>
            </div>
            <p><a class="link-gray fs-18" href="mailto:79601065731@yandex.ru">79601065731@yandex.ru</a></p>
          </div>
        </div>

        <!-- для волонтёров -->
        <div class="col-md-5">
          <h3 class="mb-4">Обратная связь</h3>
          <p class="position-relative fs-12 pb-2 mb-2 gold-line-bottom">напишите нам</p>
          <form action="">
            <input id="inp1" class="form-control brd-inp"  type="text" placeholder="Ваше имя" required>
            <label for="inp1"></label>
            <input id="inp2" class="form-control brd-inp"  type="text" placeholder="Контактный телефон" required>
            <label for="inp2"></label>
            <input id="inp3" class="form-control brd-inp"  type="text" placeholder="Ваш e-mail" required>
            <label for="inp3"></label>
            <textarea class="form-control border-textarea" id="textarea" rows="3" placeholder="Вашe сообщение" required></textarea>
            <div class="mb-3 mt-5 pt-2 gold-line-top position-relative">
              <input id="inp4" class="form-check-input"  type="checkbox" checked>
              <label class="form-check-label" for="inp4"><a href="#">Согласие</a> на обработку персональных данных</label>
            </div>
            <div class="col-12 position-relative">
              <a href="#" class="w-100 text-white hrt-btn fs-10 btn" tabindex="-1" role="button" aria-disabled="true">Стать волонтёром</a>
            </div>
          </form>
        </div>
      </div>
    </div>





    <!-- колонка реквизиты -->
    <div class="col-lg-3 col-md-5 mt-5 mt-lg-0 requisites fs-12 pt-4">
      <h4 class="text-left gold-line-top position-relative pt-4">Реквизиты фонда</h4>
      <p>"Фонд св. преп. Силуана Афонского"</p>
      <div>
        Номер счёта:
        <p>40703810513000001134</p>
      </div>
      <div>
        Банк получателя:
        <p>ЦЕНТРАЛЬНО-ЧЕРНОЗЕМНЫЙ БАНК ПАО СБЕРБАНК</p>
      </div>
      <div>
        БИК:
        <p>042007681</p>
      </div>
      <div>
        Кор. счёт:
        <p>30101810600000000681</p>
      </div>
      <div>
        ИНН:
        <p>3664238750</p>
      </div>
      <div>
        ОГРН:
        <p>1183600000924</p>
      </div>
      <div>
        КПП:
        <p>366401001</p>
      </div>
      <a href="#" class="btn position-relative wht-hrt-btn fs-12" role="button" aria-disabled="true">
        Скачать реквизиты
      </a>
    </div>

    
  </div>
</div>



<div class="mt-5 mt-4" id="map"></div>







<?php get_footer(); ?>