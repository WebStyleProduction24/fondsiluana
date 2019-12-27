<?php
/*
Template Name: Шаблон страницы "Нужна помощь"
*/
?>

<?php
global $wpdb;
$meta_key = 'is_finished';
$meta_value = '0';
$var = $wpdb->get_var( "SELECT COUNT(*) FROM wp_postmeta WHERE meta_key = '$meta_key' AND meta_value = '$meta_value'" );

?>


<?php


$args = array(
  'post_type'  => 'leyka_campaign', //таксономия кампаний лейки
  'meta_query' => array(            //проверяем ведется ли сбор средств
    array(
      'key'     => 'is_finished',
      'value'   => '0',             //да, ведется
      'compare' => '='
    )
  )
);
query_posts( $args );

$count_posts = wp_count_posts('leyka_campaign');
$published_posts = $count_posts->publish;

?>


<?php get_header(); ?>



<div class="container ">

  <h3 class="gold-line-bottom position-relative pb-4">Им нужна ваша помощь</h3>




  <?php   
  if( have_posts() ){ while( have_posts() ){ the_post(); ?>
    <?php global $post; ?>

    <div class="my-4 pb-5 pb-sm-0">
      <div class="row justify-content-between">


        <div class="col-md-4">
          <img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>


        <div class="col-lg-3 col-md-4 gold-line-top py-4 mt-3 mt-sm-0 position-relative">
          <h4 class="text-left mb-4"><?php the_title(); ?></h4>
          <?php the_excerpt(); ?>

          <p class="text-right" >
            <a href="<?php the_permalink(); ?>" class="button border-bottom gold-border pb-1 link-gray">
              Подробнее
            </a>
          </p>
        </div>



      <div class="col-lg-3 col-md-4">
        <!-- <div class="row mb-2">
          <div class="col-5">
            <div class="fs-14">Cобрано</div>
            <div class="fs-18 f-gold">36&nbsp570&nbsp₽</div>
          </div>
          <div class="col-7 text-right text-nowrap">
            <div class="fs-14">Осталось собрать</div>
            <div class="fs-18 f-red ">36&nbsp570&nbsp₽</div>
          </div>
        </div>
        <div class="offer__bar-progress mb-5">       
          <div class="progress">
            <div class="progress-bar" style="width: 37%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div> -->
        <a href="<?php the_permalink(); ?>" class="btn position-relative wht-hrt-btn fs-12" role="button" aria-disabled="true">
          Помочь
        </a>
      </div>

    </div>
  </div>







<!-- !!!!!!!!!!!!!!!!!!!!!!!!!! -->
         
        <?php } /* конец while */ ?>


        <?php
} // конец if
else 
  echo "<h2>Записей нет.</h2>";

wp_reset_query();
?>





  <!--5 описание ребенка/помощи -->
<!--   <div class="my-4 pb-5 pb-sm-0">
    <div class="row justify-content-between">
 -->      <!-- 1 колонка-->
<!--       <div class="col-md-4">
        <img class="img-fluid" src="http://fondsiluana.localhost/wp-content/themes/fondsiluana/img/child5.jpg" alt="Ксения Лупу">
      </div>
 -->      <!-- 2 колонка-->
<!--       <div class="col-lg-3 col-md-4 gold-line-top py-4 mt-3 mt-sm-0 position-relative">
        <h4 class="text-left mb-4">Ксения Лупу</h4>
        <p>
          Глиобластома левой лобно-теменной доли головного мозга
        </p>
        <p class="text-right" >
          <a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="button border-bottom gold-border pb-1 link-gray">
            Подробнее
          </a>
        </p>
      </div>
 -->      <!-- 3 колонка-->
<!--       <div class="col-lg-3 col-md-4">
        <div class="row mb-2">
          <div class="col-5">
            <div class="fs-14">Cобрано</div>
            <div class="fs-18 f-gold">36&nbsp570&nbsp₽</div>
          </div>
          <div class="col-7 text-right text-nowrap">
            <div class="fs-14">Осталось собрать</div>
            <div class="fs-18 f-red ">36&nbsp570&nbsp₽</div>
          </div>
        </div>
        <div class="offer__bar-progress mb-5">       
        	<div class="progress">
        		<div class="progress-bar" style="width: 37%" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        	</div>
        </div>
        <a href="#" class="btn position-relative wht-hrt-btn fs-12" role="button" aria-disabled="true">
          Помочь саше
        </a>
      </div>
    </div>
  </div>
 -->




</div>





<?php get_footer(); ?>