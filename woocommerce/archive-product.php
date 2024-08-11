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


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/compiled/page--shop.css">

<main>

    <div class="shop-description">
        Plugins
    </div>

    <?php get_template_part( 'template-parts/shop', 'archive'); ?>

</main>


<svg class="shape-archive" width="100%" height="100%" viewBox="0 0 660 918" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
    <g transform="matrix(1,0,0,1,-3657.43,-768.488)">
        <path d="M3714.46,1582.7C3697.52,1547.32 3658.23,1506.69 3657.45,1464.72C3656.68,1422.74 3675.42,1364.2 3709.82,1330.85C3745.47,1296.29 3824.58,1279.45 3871.32,1257.34C3911.36,1238.4 3962.47,1232.63 3990.29,1198.16C4026.18,1153.71 4071.7,1052.98 4086.61,990.641C4099.53,936.618 4069.65,859.674 4079.76,824.141C4087.25,797.819 4121.11,785.225 4147.28,777.441C4173.46,769.658 4213.48,761.956 4236.84,777.441C4260.19,792.927 4278.52,836.234 4287.43,870.357C4300.55,920.655 4321.02,1020.81 4315.57,1079.23C4310.8,1130.41 4283.08,1178.04 4254.76,1220.93C4222.77,1269.37 4169.09,1340.86 4123.64,1369.88C4083.25,1395.68 4020.57,1373.79 3982.07,1395.08C3943.56,1416.37 3906.85,1462.18 3892.61,1497.61C3878.91,1531.68 3900.14,1578.08 3896.6,1607.69C3893.74,1631.57 3892.8,1664.45 3871.32,1675.27C3848.41,1686.82 3785.25,1692.4 3759.11,1676.97C3732.97,1661.55 3729.48,1614.06 3714.46,1582.7Z" style="fill:rgb(85,221,1);"/>
    </g>
</svg>

<?php
//get_sidebar();
get_footer('shop');