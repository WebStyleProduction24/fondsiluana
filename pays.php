<?php
/*
Template Name: Шаблон Формы оплаты
*/
?>





<?php get_header(); ?>

<body>
	<div class="container c-block">

		<p>Здравствуйте! Вы можете пожертвовать денежные средства в благотворительный фонд Силуана Афонского и они пойдут на добрые дела!</p>
		<form action="">
			<input type="number" class="px-3 form-control fs-14 brd-inp brd-gld" placeholder="Введите сумму, руб">

			<div class="row pt-3">

				<div class="col-sm">
					<div class="crd my-2 text-center py-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/master-card.png" class="d-block img-card-t">
						<div class="fs-14 mx-3 mt-2">Банковская платежная квитанция</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="crd my-2 text-center py-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/master-card.png" class="d-block img-card-t">
						<div class="fs-14 mx-3 mt-2">Банковская платежная квитанция</div>
					</div>
				</div>

				<div class="col-sm">
					<div class="crd my-2 text-center py-4">
						<img src="<?php echo get_template_directory_uri(); ?>/img/master-card.png" class="d-block img-card-t">
						<div class="fs-14 mx-3 mt-2">Банковская платежная квитанция</div>
					</div>
				</div>

			</div>

			<input type="email" class="px-3 form-control fs-14 brd-inp brd-gld my-3" placeholder="Ваш E-Mail" required>
			<input type="text" class="px-3 form-control fs-14 brd-inp brd-gld my-3" placeholder="Имя и Фамилия" required>

			<div class="mb-3 mt-5 pt-2 gold-line-top position-relative">
				<div>
					<input class="form-check-input" type="checkbox" id="defaultCheck1" checked="">
					<label class="form-check-label" for="defaultCheck1">
						Я принимаю <a href="#" targer="_blank" rel="nofollow">Договор оферты</a>
					</label>
				</div> 
				<div>
					<input class="form-check-input" type="checkbox" id="defaultCheck2" checked="">
					<label class="form-check-label pt-2" for="defaultCheck2">
						Я принимаю <a href="#" targer="_blank" rel="nofollow">Соглашение об использовании персональных данных</a>
					</label>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-6 position-relative">
					<a href="#" class="w-100 text-white hrt-btn fs-10 btn" tabindex="-1" role="button" aria-disabled="true">Пожертвовать</a>
				</div>
			</div>

		</form>

	</div>
</body>



<?php get_footer(); ?>