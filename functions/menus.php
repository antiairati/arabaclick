<?php

/**
 * Registra los menús de navegación
 */
function arabaclick_register_menus() {
	register_nav_menu( 'main-menu', __( 'Main menu', 'arabaclick' ) );
}
add_action( 'after_setup_theme', 'arabaclick_register_menus' );

 ?>
