<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://localhost:8888/wordpress-arabaclick/wp-content/themes/arabaclick/theme/css/common.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header class="b--header">
		<a href="#" class="b--header__brand"> <img class="b--header__brand__img" src="http://localhost:8888/wordpress-arabaclick/wp-content/themes/arabaclick/theme/img/logo.svg" alt=""> </a>
		<div class="b--header__nav">
				<nav id="site-navigation" class="b--nav" role="navigation">
					<?php if ( has_nav_menu( 'main-menu' ) ): ?>
						<?php wp_nav_menu([
							'theme_location' => 'main-menu',
							'menu_class' => 'b--nav__list-group'
						]); ?>
					<?php endif; ?>
				</nav>
		</div>

	</header>
