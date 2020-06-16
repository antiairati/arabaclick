<?php

function arabaclick_setup_theme() {
  // HTML5 para los formularios de búsqueda, comentarios, galerías...
	$supports = [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	];
  add_theme_support( 'html5', $supports );

  // Soporte para etiqueta <title> dentro de <head>
  add_theme_support( 'title-tag' );

  // Soporte para imágenes destacadas
	add_theme_support( 'post-thumbnails' );

  // Soporte para Feed automático para posts y comentarios
	add_theme_support( 'automatic-feed-links' );

	// Anchura del contenido. Sirve especialmente para vídeos embebidos.
	$GLOBALS['content_width'] = 1130;

  // Soporte para internacionalización
	load_theme_textdomain( 'arabaclick', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'arabaclick_setup_theme' );

require 'functions/menus.php';

require 'functions/widgets.php';

require 'functions/templates.php';

require 'functions/scripts.php';

require 'functions/enqueues.php';


 ?>
