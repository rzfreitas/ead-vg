<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ead-vg
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ead-vg' ); ?></a>

	<header id="masthead" class="ead-header idHeader">
		<div class="container">
			<div class="row">
				<div class="col-2">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/imagens/logo-ead.png" alt="logo ead vg">
					</a>
				</div>
				<div class="col">
					<div class="search-top v-center">
						<form role="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
						    <div class="d-flex">
						    	<input placeholder="Buscar pelo nome do curso" class="search-field" type="search" name="s" id="search" value="">
						    	<a class="btn-azul-h" href="">Buscar</a>
						    </div>
						</form>
					</div>
				</div>
				<div class="col d-flex align-items-center justify-content-end">
					<div>
						<nav id="site-navigation" class="ead-menu">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ead-vg' ); ?></button>
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							) );
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="p-l-15">
						<a class="btn btn-amarelo" href="">Login</a>
					</div>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
