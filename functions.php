<?php



function enqueue_styles() {
  wp_enqueue_style( 'bootstrap-4.3.1', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Cormorant+Garamond|Roboto:100,300&display=swap');
	wp_enqueue_style( 'font-style');
	wp_enqueue_style( 'style-socials', get_stylesheet_directory_uri().'/fonts/style.css');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/vesterovskiy.css');
  wp_enqueue_style( 'style-korolev', get_stylesheet_directory_uri().'/korolev.css');
  wp_enqueue_style( 'style-badikov', get_stylesheet_directory_uri().'/badikov.css');
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
	
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// function enqueue_scripts () {
// 	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
// 	wp_enqueue_script('html5-shim');
// }
// add_action('wp_enqueue_scripts', 'enqueue_scripts');

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
