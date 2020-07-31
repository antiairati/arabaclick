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
		<a href="http://arabaclick.com/" class="b--header__brand"> <img class="b--header__brand__img" src="http://localhost:8888/wordpress-arabaclick/wp-content/themes/arabaclick/theme/img/logo.svg" alt=""> </a>
		<div class="b--nav-lang">
			<?php pll_the_languages( array( 'dropdown' => 1 ) ); ?>
		</div>
		<input type="checkbox" id="overlay-input" />
		<label for="overlay-input" id="overlay-button"><span></span></label>
		<div id="overlay">
			<ul id="site-navigation" class="b--nav" role="navigation">
				<?php if ( has_nav_menu( 'main-menu' ) ): ?>
					<?php wp_nav_menu([
						'theme_location' => 'main-menu',
						'menu_class' => 'b--nav__list-group'
					]); ?>
				<?php endif; ?>
			</ul>
		</div>
	</header>
	<main class="main"><!-- Open main -->
