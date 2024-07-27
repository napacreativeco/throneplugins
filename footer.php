<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Throne_Systems
 */

?>

	<?php get_template_part( 'template-parts/overlay', 'cart-drawer' ); ?>

	<footer class="site-footer">
		<nav id="site-navigation" class="main-navigation">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'shop-menu',
				)
			);
			?>
		</nav>
		<div class="attribution">
			code by <a href="https://throne.work" title="Throne">Throne</a>
		</div>
		
	</footer>

</div>

<script>
	jQuery('.cart-count').on('click', function() {
		jQuery('.cart-drawer').addClass('open-drawer');
	});

	jQuery('.close-drawer').on('click', function() {
		jQuery('.cart-drawer').removeClass('open-drawer');
	});
</script>

<script>
	jQuery('.remove_item').on( 'click', function() {
		setTimeout(function() {
			window.location.reload();
		}, 1500);
	});

		
</script>

<?php wp_footer(); ?>

</body>
</html>
