<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	<div class="off-canvas-wrapper">
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="topheader">
		<hr>
			<img src="wp-content/themes/elcoop/assets/images/logo.png" alt="<?php bloginfo ?>" class="logocoop">
			<a href="#" class="menu">
				<img src="wp-content/themes/elcoop/assets/images/menu.png" alt="" >
			</a>
			<a href="#"><img src="wp-content/themes/elcoop/assets/images/france.png" alt="" class="france"></a>
			<a href="#"><img src="wp-content/themes/elcoop/assets/images/anglais.png" alt="" class="anglais"></a>


			<nav>
				<a href="#" class="close" ><img src="wp-content/themes/elcoop/assets/images/cross.png" alt="" ></a>
				<ul>
					<a href="#"><li>Accueil</li></a>
					<a href="#"><li>Agenda</li></a>
					<a href="#"><li>Infrastructures</li></a>
					<a href="#"><li>FabLab</li></a>
					<a href="#"><li>Articles</li></a>
					<a href="#"><li>Contact</li></a>
				</ul>
			</nav>

	</header>

	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
