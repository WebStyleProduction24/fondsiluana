</main>


  <footer class="pt-5 pb-5">

    <div class="container" >
      <div class="row justify-content-between">


        <!-- 1 logo-->
        <div class="col-lg-4 mb-5 text-lg-left text-center" >        
          <a  href="<?php echo get_home_url(); ?>">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="фонд святого преподобного Силуана" type="image/svg">
          </a>
        </div>


        <!-- 2 nav-->
        <nav class="col-lg-4 col-md-7 col-12 px-lg-0 mb-md-5 gold-line-top-left">
          <ul class="list-unstyled columns">
            <li class="py-2">
              <a href="/" aria-current="page" class="link-gray size15">
              Главная
            </a>
            </li>
            <li class="py-2">
              <a href="#" class="link-gray size15">
              О фонде
            </a>
            </li>
            <li class="py-2">
              <a href="http://fondsiluana.localhost/help-necessary/" class="link-gray size15">
              Нужна помощь
            </a>
            </li>
            <li class="py-2">
              <a href="#" class="link-gray size15">
              Помогли
            </a>
            </li>
            <li class="py-2">
              <a href="#" class="link-gray size15">
              Друзья
            </a>
            </li>
            <li class="py-2">
              <a href="#" class="link-gray size15">
              Отчеты
            </a>
            </li>
            <li class="py-2">
              <a href="http://fondsiluana.localhost/news/" class="link-gray size15">
              Новости
            </a>
            </li>
            <li class="py-2">
              <a href="http://fondsiluana.localhost/contacts/" class="link-gray size15">
              Контакты
            </a>
            </li>
          </ul>
        </nav>


        <!-- 3 контакты -->
        <div class="col-lg-4 col-md-5 col-12 mb-lg-3 mb-5">
          <div class="contacts-footer text-md-right text-center">
            <div class="mb-3">
              <span class="icon-phone footer-icon"></span>
              <a href="tel:+76501065731" class="link-gray size25">
                +7&nbsp;960&nbsp;106&nbsp;5731
              </a>
              <div class="d-block">
                <span>e-mail:</span>
                <a class="link-gray fs-18" href="mailto:76501065731@yandex.ru">79601065731@yandex.ru</a>
              </div>  
            </div>
            <div>
              <p class="d-inline">г.&nbsp;Воронеж<br>
                <span class="icon-location size25"></span>
                ул. Комиссаржевской, д.&nbsp;10, оф.&nbsp;910</p>
            </div>
          </div>
        </div>
      </div><!-- row -->


      <!-- 4 политика/права/соц.иконки -->
      <div class="row justify-content-between" >
        <div class="col-lg-4 col-sm-9 order-lg-1 order-md-1 order-sm-1 order-2 text-sm-left text-center">
          <a href="#" class="button-board-border link-gray size0_9 ">Политика конфиденциальности</a>
          <br>
          <a href="#" class="button-board-border link-gray size0_9">Согласие на обработку перснональных данных</a>
        </div>
        <div class="col-lg-4 col-md-12 order-lg-2 order-md-3 order-sm-3 order-3" >
          <div class="copyright pt-lg-1 py-3">
            © 2019. Все права защищены<br>Разработка сайта ведется студией
            <a href="https://wsp24.ru/" target="_blank">Web Style Production 24</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-3 gold-line-top text-md-right py-3 order-lg-3 order-md-2 order-sm-2 order-1 d-sm-block d-flex justify-content-around">
          <a href="instagram.com" target="_blank" class="icon-instagram"></a>
          <a href="https://facebook.com" target="_blank" class="icon-facebook"></a>
          <a href="vk.com" target="_blank" class="icon-vk"></a>
        </div>
      </div>

    </div><!-- container -->

  </footer>




  <?php wp_footer(); ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- кнопка димы -->
  <script>
   $(function(){

       $('.wrapper-menu').on('click', function() {
          $('.header__menu').slideToggle(300, function(){
               if( $(this).css('display') === "none"){
                   $(this).removeAttr('style');
               }
          });
       });
   });
   let wrapperMenu = document.querySelector('.wrapper-menu');
   wrapperMenu.addEventListener('click', function(){
     wrapperMenu.classList.toggle('open');  
   })
  </script>
</body>
</html>