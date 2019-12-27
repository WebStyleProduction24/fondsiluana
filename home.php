<?php get_header(); ?>

<section id="main" class="container">
	<div class="row">

		<div class="col-lg-6">
			<h2><span class="f-gold">&laquo;</span>Выйди к людям, возьми на&nbsp;себя их горе –  и тебе легче будет<span class="f-gold">&raquo;</span></h2>
			<div class="content text-right gold-line-top-right position-relative py-2 a">преп. Силуан Афонский</div>

			<div class="content fs-14 gold-line-bottom py-4">
				<p>Наконец, спустя 3 года непрерывных усилий, нам удалось зарегистрировать долгожданный благотворительный фонд. Давняя мечта иметь возможность делать что-то доброе во Славу Божью придавала нам сил и не давала опускать руки после очередных неудач.</p>
				<p>Фонд носит имя удивительного святого и земляка – святого преподобного Силуана Афонского.</p>
				<p>Преподобный, являясь по происхождению простым крестьянином, не имел даже образования, но был настолько чист сердцем,  имел огромную любовь к каждому и провел немало времени в молитвах о всех людях.</p>
				<p>Мы бы хотели в этом быть похожими на него и постараться проявить любовь и заботу хотя бы о некоторых людях. Будем рады и много благодарны, если вы разделите с нами это стремление.</p>
			</div>
		</div>

		<div class="col-lg-6 text-center position-relative">
			<img src="<?php echo get_template_directory_uri(); ?>/img/afonskiy.png" alt="преп. Силуан Афонский" class="img-fluid">
			<img class="position-absolute bcg-afonskiy-1" src="<?php echo get_template_directory_uri(); ?>/img/bcg-afonskiy-1.png" alt="преп. Силуан Афонский">
			<img class="position-absolute bcg-afonskiy-2" src="<?php echo get_template_directory_uri(); ?>/img/bcg-afonskiy-2.png" alt="преп. Силуан Афонский">

		</div>
	</div>

</section>
<section id="help" class="container">


	<div class="row">
		<div class="col-md-12"> <!-- Временно ставим на всю ширину, после того, как появится блок "им помогли" необходимо вернуть на col-md-9 -->
			<h3>Им нужна помощь</h3>
			<div class="row">


				<?php 

				global $wpdb;
				$meta_key = 'is_finished';
				$meta_value = '0';
				$var = $wpdb->get_var( "SELECT COUNT(*) FROM wp_postmeta WHERE meta_key = '$meta_key' AND meta_value = '$meta_value'" );

				?>


				<?php


				$args = array(
	'post_type'  => 'leyka_campaign', //таксономия кампаний лейки
	'meta_query' => array(						//проверяем ведется ли сбор средств
		array(
			'key'     => 'is_finished',
			'value'   => '0', 						//да, ведется
			'compare' => '='
		)
	)
);
				query_posts( $args );

				$count_posts = wp_count_posts('leyka_campaign');
				$published_posts = $count_posts->publish;




				if( have_posts() ){ while( have_posts() ){ the_post(); ?>
					<?php global $post; ?>
					<div class="col-md-4">
						<h4 class="gold-line-top" style="line-height: 35px; min-height: 70px;"><?php the_title(); ?></h4>

						<a href="<?php the_permalink(); ?>" class="btn position-relative wht-hrt-btn fs-12" role="button" aria-disabled="true">
							Помочь
						</a>
						<div style="height: 10px">&nbsp</div> <!-- Временная пустая строка для добавления разрыва -->
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>


					</div>
				<?php } /* конец while */ ?>

				<div class="navigation">
					<div class="next-posts"><?php next_posts_link(); ?></div>
					<div class="prev-posts"><?php previous_posts_link(); ?></div>
				</div>

				<?php
} // конец if
else 
	echo "<h2>Записей нет.</h2>";

wp_reset_query();
?>

<!-- leyka_campaign -->

<!-- 
								<p class="text-right"><a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="button border-bottom gold-border pb-1 link-gray">Подробнее</a></p>

								<a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" title="Cбор средств на покупку неонатальных термокроваток"><img class="w-100" src="<?php echo get_template_directory_uri(); ?>/img/krovatka.png" alt="Неонатальные термокроватки"></a>


								<div class="collected mt-5">
									<p class="mb-1">Собрано пожертвований</p>
									<p class="mb-1 money">121&nbsp;000 из 307&nbsp;600 руб. </p>
								</div>
							-->



						</div>
					</div>
<!-- 					<div class="col-md-3">
						<h3>Им помогли</h3>
						<a href="/pervyj-sbor-sredstv/" title="София и Меркурий"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/sofiya-merkuriy.jpg" alt="Софья и Меркурий"></a>
						<h4 class="gold-line-top">София и Меркурий</h4>
						<p>Острый лимфобластный лейкоз (рак крови)</p>
						<p class="text-right"><a href="/pervyj-sbor-sredstv/" class="button border-bottom gold-border pb-1 link-gray">Подробнее</a></p>
						<div class="collected mt-5">
							<p class="mb-1">Сбор пожертвований</p>
							<p class="mb-1 money">окончен</p>
						</div>
					</div>
				-->			
			</div>
		</section>





		<section id="news" class="container news">
			<h3 class="mb-3">Новости Фонда</h3>
			<div class="row">





				<div class="col-lg-3 col-md-4 position-relative mb-lg-4 mb-4 mb-sm-2">
					<div class="row news__title-block">
						<div class="col-8 col-lg-9 d-table-cell align-middle pl-0">
							<h5 class="gold-line-bottom">Сбор средств Мелании Монастырской</h5>
						</div>
						<div class="col-4 col-lg-3 d-table-cell align-middle new-date">
							<span>23</span>
							<br>декабря 
						</div>
					</div>
					<p class="pb-lg-4 mt-3 mb-md-0 mb-2 news__content">
						К нам обратились с просьбой о помощи в сборе средств для замечательной девочки - Мелании Монастырской.
					</p>
					<p class="text-right w-100">
						<a href="/campaign/sbor-sredstv-dlya-melanii-monastyrskoj/" class="button border-bottom gold-border pb-1 link-gray">
							Подробнее
						</a>
					</p>
				</div>

				<div class="col-lg-3 col-md-4 position-relative mb-lg-4 mb-4 mb-sm-2">
					<div class="row news__title-block">
						<div class="col-8 col-lg-9 d-table-cell align-middle pl-0">
							<h5 class="gold-line-bottom">Сбор средств на покупку неонатальных термокроваток</h5>
						</div>
						<div class="col-4 col-lg-3 d-table-cell align-middle new-date">
							<span>19</span>
							<br>ноября 
						</div>
					</div>
					<p class="pb-lg-4 mt-3 mb-md-0 mb-2 news__content">
						Организован сбор средств на покупку неонатальных термокроваток для грудных детей, от которых отказались родители, в отделение недоношенных детей Воронежской областной детской клинической больницы № 1 (БУЗ ВО «ВОДКБ № 1»)
					</p>
					<p class="text-right w-100">
						<a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="button border-bottom gold-border pb-1 link-gray">
							Подробнее
						</a>
					</p>
				</div>

				<div class="col-lg-3 col-md-4 position-relative mb-lg-4 mb-4 mb-sm-2">
					<div class="row news__title-block">
						<div class="col-8 col-lg-9 d-table-cell align-middle pl-0">
							<h5 class="gold-line-bottom">Милостью Божьей София идёт на поправку</h5>
						</div>
						<div class="col-4 col-lg-3 d-table-cell align-middle new-date">
							<span>22</span>
							<br>марта
						</div>
					</div>
					<p class="pb-lg-4 mt-3 mb-md-0 mb-2 news__content">
						Спасибо огромное за пожертвования. Операция прошла успешно, София идёт на поправку.
					</p>
					<p class="text-right w-100">
						<a href="/pervyj-sbor-sredstv/" class="button border-bottom gold-border pb-1 link-gray">
							Подробнее
						</a>
					</p>
				</div>

				<div class="col-lg-3 col-md-4 position-relative mb-lg-4 mb-4 mb-sm-2">
					<div class="row news__title-block">
						<div class="col-8 col-lg-9 d-table-cell align-middle pl-0">
							<h5 class="gold-line-bottom">Регистрация фонда</h5>
						</div>
						<div class="col-4 col-lg-3 d-table-cell align-middle new-date">
							<span>31</span>
							<br>июля
						</div>
					</div>
					<p class="pb-lg-4 mt-3 mb-md-0 mb-2 news__content">
						Дорогие друзья, наконец-то, спустя почти полтора года непрерывных усилий, с третьей попытки нам удалось с Божьей помощью зарегистрировать долгожданный благотворительный фонд!
					</p>
					<p class="text-right w-100">
						<a href="#" class="button border-bottom gold-border pb-1 link-gray">
							Подробнее
						</a>
					</p>
				</div>


			</div>
		</div>
	</section>
	<?php get_footer(); ?>