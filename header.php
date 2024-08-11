<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Throne_Systems
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<style>
		@font-face {
			font-family: 'en';
			src: url('<?php echo get_template_directory_uri(); ?>/assets/editorialnew-regular-webfont.woff2') format('woff2'),
				url('<?php echo get_template_directory_uri(); ?>/assets/editorialnew-regular-webfont.woff') format('woff');
			font-weight: normal;
			font-style: normal;
		}

		@font-face {
			font-family: 'en';
			src: url('<?php echo get_template_directory_uri(); ?>/assets/editorialnew-italic-webfont.woff2') format('woff2'),
				url('<?php echo get_template_directory_uri(); ?>/assets/editorialnew-italic-webfont.woff') format('woff');
			font-weight: normal;
			font-style: italic;
		}
	</style>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<div class="grain"></div>

	<div class="site-container">

		<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav>

			<div class="center">
				<a href="/" title="Throne Systems">
					<?php get_template_part('/template-parts/logo--bitmap'); ?>
				</a>
			</div>

			<nav id="shop-navigation" class="shop-navigation">
				<div class="cart-count open-drawer">
					<?php get_template_part('template-parts/icon--shopping-bag'); ?>
					<?php
						$count = WC()->cart->get_cart_contents_count();
					?>
					<?php if ( $count < 1 ) { ?>
						<?php echo $count; ?>
					<?php } elseif ($count <= 9) { ?>
						0<?php echo $count; ?>
					<?php } else { ?>
						<?php echo $count; ?>
					<?php } ?>
				</div>
			</nav>
		</header>
