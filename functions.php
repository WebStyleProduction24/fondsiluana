<?php

function enqueue_styles() {
	wp_enqueue_style( 'style-socials', get_stylesheet_directory_uri().'/fonts/style.css');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/vesterovskiy.css');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/korolev.css');
  wp_enqueue_style( 'style-vesterovskiy', get_stylesheet_directory_uri().'/badikov.css');
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	wp_register_style('font-style', 'https://fonts.googleapis.com/css?family=Oswald:400,300');
	wp_enqueue_style( 'font-style');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

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
