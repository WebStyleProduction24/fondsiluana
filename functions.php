<?php



function enqueue_styles() {
  wp_enqueue_style( 'bootstrap-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond|Roboto:100,300&display=swap');
	wp_enqueue_style( 'font-style');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/css/vesterovskiy.css');
	wp_enqueue_style( 'style-socials', get_stylesheet_directory_uri().'/fonts/style.css');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/css/korolev.css');
  wp_enqueue_style( 'style-badikov', get_stylesheet_directory_uri().'/css/badikov.css');
  wp_enqueue_style( 'style-vasiliev', get_stylesheet_directory_uri().'/css/vasiliev.css');
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_styles');



// Интегрируем целостность подгружаемого bootstrap
function bootstrap_style_loader_tag( $html, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'bootstrap-4.3.1',
			( 'integrity' ) => 'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T',
		)
	);
	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );
	if ( $key !== false ) {
		$html = str_replace( '/>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\' />', $html );
	}
	return $html;
}

add_filter( 'style_loader_tag', 'bootstrap_style_loader_tag', 10, 2 );


// Регистрируем JS
function enqueue_scripts () {	
	// API Ya-maps
	wp_enqueue_script('ya-maps-api', 'https://api-maps.yandex.ru/2.1/?apikey=0d759276-a50f-441f-bd4f-4b07040a6006&lang=ru_RU');
	wp_enqueue_script('ya-maps', get_template_directory_uri() . '/js/ya-maps.js');

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery-js', 'https://code.jquery.com/jquery-3.3.1.slim.min.js');
	wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js');
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js');

	wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js');
	
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');



// Интегрируем целостность подгружаемого содержимого через CDN в JS
function new_script_loader_tag( $tag, $handle ) {
	$scripts_to_load = array(
		array(
			( 'name' )      => 'jquery-js',
			( 'integrity' ) => 'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo',
		),
		array(
			( 'name' )      => 'popper-js',
			( 'integrity' ) => 'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1',
		),
		array(
			( 'name' )      => 'bootstrap-js',
			( 'integrity' ) => 'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM',
		)
	);

	$key = array_search( $handle, array_column( $scripts_to_load, 'name' ) );

	if ( $key !== false ) {
		$tag = str_replace( '></script>', ' integrity=\'' . $scripts_to_load[$key]['integrity'] . '\' crossorigin=\'anonymous\'></script>', $tag );
	}

	return $tag;
}
add_filter( 'script_loader_tag', 'new_script_loader_tag', 10, 2 );




add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'primary', 'Главное меню' );
}

//добавляем классы к li в меню
add_filter( 'nav_menu_css_class', 'add_my_class_to_nav_menu', 10, 2 );
function add_my_class_to_nav_menu( $classes, $item ){
	$classes[] = 'nav-item';
	return $classes;
}

//добавляем классы к a в меню
add_filter( 'nav_menu_link_attributes', 'nav_link_filter', 10, 4 );
function nav_link_filter( $attr ){
	$attr['class'] = 'nav-link';
	return $attr;
}
