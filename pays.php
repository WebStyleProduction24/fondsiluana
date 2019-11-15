<?php
/*
Template Name: Шаблон Формы оплаты
*/
?>





<?php get_header(); ?>

<link rel="stylesheet" id="dashicons-css" href="http://wordpress/wp-content/themes/fondsiluana/css/vasiliev.css" type="text/css">
<body>
<div class="container c-block">

<div class="txt-desc text-left mb-3">
Здравствуйте! Вы можете пожертвовать денежные средства в благотворительный фонд Силуана Афонского и они пойдут на добрые дела!
</div>

<form>
<div class="cont">
<input type="text" class="input-pole" required>
<div class="placeholder">Введите сумму в рублях</div>
</div>
</form>


<div class="row d-flex justify-content-center my-3">

<div class="col-sm">
<div class="crd my-3">
<div class="card-body mx-auto">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/MasterCard_early_1990s_logo.svg/240px-MasterCard_early_1990s_logo.svg.png" class="d-block img-card-t">
<div class="txt-desc">Банковская платежная квитанция</div>
</div>
</div>
</div>

<div class="col-sm">
<div class="crd my-3">
<div class="card-body mx-auto">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/MasterCard_early_1990s_logo.svg/240px-MasterCard_early_1990s_logo.svg.png" class="d-block img-card-t">
<div class="txt-desc">Банковская платежная квитанция</div>
</div>
</div>
</div>

<div class="col-sm">
<div class="crd my-3">
<div class="card-body mx-auto">
<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/MasterCard_early_1990s_logo.svg/240px-MasterCard_early_1990s_logo.svg.png" class="d-block img-card-t">
<div class="txt-desc">Банковская платежная квитанция</div>
</div>
</div>
</div>

</div>

<div class="mx-auto justify-content-center">
<form class="mt-3">
<div class="cont">
<input type="text" class="input-pole" required>
<div class="placeholder">Ваш E-Mail <span class="red">*</span></div>
</div>
</form>

<form class="mt-3">
<div class="cont">
<input type="text" class="input-pole" required>
<div class="placeholder">Имя и Фамилия <span class="red">*</span></div>
</div>
</form>
</div>

<div class="fc golden-line-tr">
<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="f-c-l" for="defaultCheck1">
    Я принимаю <a href="" targer="_blank" rel="nofollow">Договор оферты</a>
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
  <label class="f-c-l" for="defaultCheck2">
    Я принимаю <a href="" targer="_blank" rel="nofollow">Соглашение об использовании персональных данных</a>
  </label>
</div>
</div>

<div class="d-flex justify-content-center">
<a href="#ebat" class="w-50 text-white roboto btn fs-10 btn-red" tabindex="-1" role="button" aria-disabled="true">Пожертвовать</a>
</div>

</div>
</body>



<?php get_footer(); ?>