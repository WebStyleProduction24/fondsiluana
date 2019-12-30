<?php
/*
Template Name: Шаблон страницы Друзья
*/
?>

<?php get_header(); ?>

  <div class="container">
    <div class="row justify-content-around">

      <div class="col-md-6 text-center mb-5">
        <a href="http://www.amm.vsu.ru/" target="_blank"><h3 class="fs-18">ПММ ВГУ</h3></a>
        <a href="http://www.amm.vsu.ru/" target="_blank">
          <img class="img-fluid w-50" src="<?php echo get_template_directory_uri(); ?>/img/logotypes/pmm.jpg" alt="Факультет прикладной математики, информатики и механики Воронежского государственного университета">
        </a>
      </div>

      <div class="col-md-6 text-center">
        <a href="http://xn--80aaelskojglel4kpa2ch.xn--p1ai/" target="_blank"><h3 class="fs-18">ООО "Сырьевая компания"</h3></a>
        <a href="http://xn--80aaelskojglel4kpa2ch.xn--p1ai/" target="_blank">
          <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/logotypes/syrevaya_company.png" alt="Сырьевая компания">
        </a>
      </div>

    </div>
  </div>












<?php get_footer(); ?>