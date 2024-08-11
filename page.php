<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Throne_Systems
 */

get_header('shop');
?>

	

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			if (is_front_page()) { ?>

				<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/compiled/page--home.css">
				<?php get_template_part( 'template-parts/content', 'homepage' ); ?>

			<?php
			} else { ?>
				<div class="section-title">
					<?php the_title(); ?>
				</div>
				<?php the_content(); ?>
			<?php	
			}

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

	<svg class="shape-product" width="100%" height="100%" viewBox="0 0 822 908" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
		<g transform="matrix(1,0,0,1,-2844.07,-1333.57)">
			<path d="M2950.53,2089.95C2912.23,2046.9 2845.86,1979.6 2844.11,1936.92C2842.36,1894.24 2894.58,1843.01 2940.01,1833.87C2985.43,1824.72 3057.1,1868.72 3116.67,1882.04C3183.51,1896.99 3284.56,1930.98 3341.04,1923.55C3388.4,1917.32 3440.99,1882.93 3455.58,1837.44C3471.67,1787.25 3477.69,1679.42 3437.61,1622.41C3397.52,1565.41 3238.55,1534.1 3215.08,1495.43C3192.07,1457.49 3258.36,1412.47 3296.83,1390.37C3343.32,1363.66 3443.71,1325.18 3493.99,1335.19C3544.28,1345.19 3580.08,1401.94 3598.52,1450.4C3625.76,1521.98 3647.61,1678.54 3657.43,1764.63C3665.07,1831.64 3670.88,1917.41 3657.43,1966.96C3646.55,2007.03 3602.9,2029.63 3576.74,2061.89C3549.51,2095.48 3533.14,2146.35 3493.99,2168.53C3441.3,2198.38 3330.61,2236.53 3260.58,2240.98C3196.63,2245.04 3125.54,2220.4 3073.86,2195.23C3025.27,2171.56 2986.45,2130.34 2950.53,2089.95Z" style="fill:rgb(85,221,1);"/>
		</g>
	</svg>


<?php
//get_sidebar();
get_footer('shop');
