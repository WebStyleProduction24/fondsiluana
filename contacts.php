<?php
/*
Template Name: Шаблон страницы "Контакты"
*/
?>





<?php get_header(); ?>



<div class="container">
  <div class="row">

    <!-- Главная колонка -->
    <div class="col-lg-8 col-md-12">
      <div class="container">
        <div class="row">
          <h2 class="contacts-h2 w-100 mb-4">Наши Контакты</h2>
          <div class="col-md-4 mb-5">
            <div class="contacts-block">
              <div class="contacts-block-top">
                <p class="f-12 pb-2 mb-2 gold-line-bottom">адрес</p>
              </div>
              <a class="link-gray contacts-link" href="#maps" title="перейти к карте">г. Воронеж</a>
              <p class="size0_9">ул. Коммисаржевской 10, офис 123</p>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="contacts-block">
              <div class="contacts-block-top">
                <p class="f-12 pb-2 mb-2 gold-line-bottom">телефон</p>
              </div>
              <a class="link-gray contacts-link" href="tel:+7(650)1065731">
                +7 650 106 57 31
              </a>
            </div>
          </div>
          <div class="col-md-4 mb-5">
            <div class="contacts-block">
              <div class="contacts-block-top">
                <p class="f-12 pb-2 mb-2 gold-line-bottom">e-mail</p>
              </div>
              <a class="link-gray contacts-link" href="mailto:76501065731@yandex.ru">
                76501065731@yandex.ru
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!-- для партнёров -->
        <div class="col-md-6 partner">
          <h3 class="contacts-h3 w-100 mb-4">Для партнёров</h3>
          <div class="col-md-12 mb-5">
            <div class="contacts-block">
              <div class="contacts-block-top">
                <p class="f-12 pb-2 mb-2 gold-line-bottom">телефон</p>
              </div>
              <a class="link-gray contacts-link" href="tel:+7(650)1065731">
                +7 650 106 57 31
              </a>
            </div>
          </div>
          <div class="col-md-12 mb-5">
            <div class="contacts-block">
              <div class="contacts-block-top gold-line-bottom">
                <p class="f-12 pb-2 mb-2">e-mail</p>
              </div>
              <a class="link-gray contacts-link" href="mailto:76501065731@yandex.ru">
                76501065731@yandex.ru
              </a>
            </div>
          </div>
        </div>

        <!-- для волонтёров -->
        <div class="col-md-6 volunteer">
          <h3 class="contacts-h3 w-100 mb-4">Для волонтёров</h3>
              <div class="contacts-block-top">
                <p class="f-12 pb-2 mb-2 gold-line-bottom">напишите нам</p>
              </div>
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
            <div class="form-group mb-3">
              <textarea class="form-control border-textarea" id="textarea" rows="3" placeholder="Вашe сообщение" required></textarea>
              <label for="textarea"></label>
            </div>
            <div class="form-group mb-3 form-check gold-line-tl">
              <input id="inp4" class="form-check-input"  type="checkbox" checked>
              <label class="form-check-label label-font " for="inp4">Согласие на обработку персональных данных</label>
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
    <div class="col-lg-3 col-md-6 requisites fs-12 pt-4">
      <h4 class="text-left gold-line-top position-relative pt-4">Реквизиты фонда</h4>
      <p class="requisites-text">"Фонд св. преп. Силуана Афонского"</p>
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
    <div class="d-lg-none col-md-6">
      <div class="map-vertical">
        <a name="maps">
          <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af76b76def688c88934c0d976dfbb8cfc00f020fd048dec3e18c2008250c9c541&amp;source=constructor" width="100%" height="100%" frameborder="0"></iframe>
        </a>
      </div>
    </div>

  </div>
</div>



<script type="text/javascript">
</script>


<!-- карта для большой версии -->
<div class="container" >
  <div class="row mt-4">
    <div class="col-lg-12">

      <div id="map"></div>

    </div>
  </div>
</div>










<?php get_footer(); ?>