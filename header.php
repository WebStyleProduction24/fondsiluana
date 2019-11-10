
<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
	<meta name="format-detection" content="telephone=no">
	<meta name="MobileOptimized" content="320">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/x-icon"> 
	<title><?php wp_title('«', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
	if( is_home() || is_page(72) ){}
		else { ?>
			<div class="container">

				<h4 class="attention">Внимание! Страница работает в режиме разработки, приносим извинения за принесенные неудобства</h4>

			</h2>
		</div>
	<?php } ?>
	<header>
		<div class="container my-3">
			<div class="row justify-content-end">
				<nav class="navbar navbar-expand-lg navbar-light">
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php wp_nav_menu( [
						'container_id'		=> 'navbarSupportedContent', 
						'container_class' => 'collapse navbar-collapse', 
						'menu_class' 			=> 'navbar-nav mr-auto'
					] ); ?>
				</nav>
			</div>
		</div>
		<div class="container mb-5">
			<div class="row">
				<div class="col-lg-5 pb-3"><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-main.png" alt="" type="image/png"></a></div>
				<div class="col-6 col-lg-2 text-center m-auto"><a href="#" class="button border-top gold-border pt-1 link-gray button-menu">Нужна помощь</a></div>
				<div class="col-6 col-lg-2 text-center m-auto"><a href="#" class="button border-top gold-border pt-1 link-gray button-menu">Стать волонтером</a></div>
				<div class="col-lg-3 text-center m-auto"><a href="/campaign/cbor-sredstv-na-pokupku-neonatalnyh-termokrovatok/" class="w-100 text-white roboto btn fs-10 hrt-btn" tabindex="-1" role="button" aria-disabled="true">Сделать доброе дело</a></div>
			</div>
		</div>
	</header>

	<main>