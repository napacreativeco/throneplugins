<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

get_header();

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/compiled/page--product.css">

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( 'single-product', $product ); ?>>
	

	<div class="top">
		<div class="left">
			<?php
			/**
			 * Hook: woocommerce_before_single_product_summary.
			 *
			 * @hooked woocommerce_show_product_sale_flash - 10
			 * @hooked woocommerce_show_product_images - 20
			 */
			do_action( 'woocommerce_before_single_product_summary' );
			?>
		</div>

		<div class="right">
			<div class="summary entry-summary">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div>

			<div class="accordions">
				<details>
					<summary>
						<div>Formats</div>
						<div class="icon"><?php get_template_part('/template-parts/icon--arrow-angled'); ?></div>
					</summary>
					<div class="details-body">
						<?php the_field('formats'); ?>
					</div>
				</details>
				<details>
					<summary>
						<div>Installation</div>
						<div class="icon"><?php get_template_part('/template-parts/icon--arrow-angled'); ?></div>
					</summary>
					<div class="details-body">
						<?php the_field('installation'); ?>
					</div>
				</details>
			</div>

		</div>
	</div>

	<div class="description">
		<?php the_content(); ?>
	</div>
</div>

<svg class="shape-product" width="100%" height="100%" viewBox="0 0 822 908" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g transform="matrix(1,0,0,1,-2844.07,-1333.57)">
        <path d="M2950.53,2089.95C2912.23,2046.9 2845.86,1979.6 2844.11,1936.92C2842.36,1894.24 2894.58,1843.01 2940.01,1833.87C2985.43,1824.72 3057.1,1868.72 3116.67,1882.04C3183.51,1896.99 3284.56,1930.98 3341.04,1923.55C3388.4,1917.32 3440.99,1882.93 3455.58,1837.44C3471.67,1787.25 3477.69,1679.42 3437.61,1622.41C3397.52,1565.41 3238.55,1534.1 3215.08,1495.43C3192.07,1457.49 3258.36,1412.47 3296.83,1390.37C3343.32,1363.66 3443.71,1325.18 3493.99,1335.19C3544.28,1345.19 3580.08,1401.94 3598.52,1450.4C3625.76,1521.98 3647.61,1678.54 3657.43,1764.63C3665.07,1831.64 3670.88,1917.41 3657.43,1966.96C3646.55,2007.03 3602.9,2029.63 3576.74,2061.89C3549.51,2095.48 3533.14,2146.35 3493.99,2168.53C3441.3,2198.38 3330.61,2236.53 3260.58,2240.98C3196.63,2245.04 3125.54,2220.4 3073.86,2195.23C3025.27,2171.56 2986.45,2130.34 2950.53,2089.95Z" style="fill:rgb(85,221,1);"/>
    </g>
</svg>

<?php do_action( 'woocommerce_after_single_product' ); ?>

<?php get_footer(); ?>