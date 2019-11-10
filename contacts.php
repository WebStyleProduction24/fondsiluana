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
      <h3 class="mb-4">Наши Контакты</h3>
      <div class="row pb-5">
        <div class="col-md-4">
          <div class="position-relative">
            <p class="fs-12 pb-2 mb-2 gold-line-bottom">адрес</p>
          </div>
          <div class="fs-18">
            г. Воронеж
            <p class="fs-12"><a href="https://yandex.ru/maps/-/CGTNQZiv" class="link-gray" target="blank">ул. Коммисаржевской 10, офис 123</a></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="position-relative">
            <p class="fs-12 pb-2 mb-2 gold-line-bottom">телефон</p>
          </div>
          <p><a class="link-gray fs-18" href="tel:+7(650)1065731">+7 650 106 57 31</a></p>
        </div>
        <div class="col-md-4">
          <div class="position-relative">
            <p class="fs-12 pb-2 mb-2 gold-line-bottom">e-mail</p>
          </div>
          <p><a class="link-gray fs-18" href="mailto:76501065731@yandex.ru">76501065731@yandex.ru</a></p>
        </div>
      </div>

      <div class="row">
        <!-- для партнёров -->
        <div class="col-md-5">
          <h3 class="mb-4">Для партнёров</h3>
          <div class="mb-1 mb-sm-5">
            <div class="position-relative">
              <p class="fs-12 pb-2 mb-2 gold-line-bottom">телефон</p>
            </div>
            <p><a class="link-gray fs-18" href="tel:+7(650)1065731">+7 650 106 57 31</a></p>
          </div>
          <div class="mb-5">
            <div class="position-relative gold-line-bottom">
              <p class="fs-12 pb-2 mb-2">e-mail</p>
            </div>
            <p><a class="link-gray fs-18" href="mailto:76501065731@yandex.ru">76501065731@yandex.ru</a></p>
          </div>
        </div>

        <!-- для волонтёров -->
        <div class="col-md-5">
          <h3 class="mb-4">Для волонтёров</h3>
          <p class="position-relative f-12 pb-2 mb-2 gold-line-bottom">напишите нам</p>
          <p class="mt-4">Мы всегда рады новым помощникам! Напишите нам и с вами свяжется наш координатор волонтеров.</p>
          <form action="">
            <div class="form-group m-0">
              <input id="inp1" class="form-control border-input"  type="text" placeholder="Ваше имя" required>
              <label for="inp1"></label>
            </div>
            <div class="form-group m-0">
              <input id="inp2" class="form-control border-input"  type="text" placeholder="Контактный телефон" required>
              <label for="inp2"></label>
            </div>
            <div class="form-group m-0">
              <input id="inp3" class="form-control border-input"  type="text" placeholder="Ваш e-mail" required>
              <label for="inp3"></label>
            </div>
            <div class="form-group m-0">
              <textarea class="form-control border-textarea" id="textarea" rows="3" placeholder="Вашe сообщение" required></textarea>
              <label for="textarea"></label>
            </div>
            <div class="form-group my-3 pt-2 gold-line-top position-relative">
              <input id="inp4" class="form-check-input"  type="checkbox" checked>
              <label class="form-check-label fs-10" for="inp4">Согласие на обработку персональных данных</label>
            </div>
            <div class="col-12 position-relative">
              <a href="#" class="w-100 text-white hrt-btn fs-10 btn" tabindex="-1" role="button" aria-disabled="true">
                Стать волонтёром
              </a>
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

    <div class="col-12 col-sm-7 col-lg-12 mt-5" id="map"></div>
  </div>
</div>











<?php get_footer(); ?>