<?php 

// Engueue stylesheet and js file	
function singolo_scripts() {
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
	
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js', array(), '1.11.2', true );
	wp_enqueue_script( 'pub/sub', get_template_directory_uri() . '/js/pub-sub-pattern.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0', true );
}

add_action( 'wp_enqueue_scripts', 'singolo_scripts' );






