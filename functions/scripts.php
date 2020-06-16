<?php

/**
 * Añade todos los scripts y estilos necesarios para el funcionamiento del tema.
 */
function arabaclick_enqueue_scripts() {
	//wp_enqueue_style( 'arabaclick-style', get_stylesheet_uri() );
	//wp_enqueue_style( 'arabaclick-style', get_stylesheet_uri() );
  wp_enqueue_script( 'arabaclick-style', get_template_directory_uri() . 'theme/css/common.css', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'arabaclick_enqueue_scripts' );

 ?>
