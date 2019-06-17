<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<div class="container">

			<h1>Внимание! Сайт работает в режиме разработки</h1>
			<h2>Если хотите внести пожертовавние, то нажмите на кнопку: 

			<a href="/pervyj-sbor-sredstv/" class="btn btn-red fs-10 beneficence" tabindex="-1" role="button" aria-disabled="true">Сделать доброе дело</a>
		</h2>
		</div>
		<header>
			<div class="container">
				<?php wp_nav_menu( [
					'menu_class'      => 'nav'
				] ); ?>
			</div>
		</header>