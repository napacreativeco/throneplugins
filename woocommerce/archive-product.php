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

<ul class="products">
    <?php
    $args = array( 'post_type' => 'product' );
    $loop = new WP_Query( $args );
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );

    while ( $loop->have_posts() ) : $loop->the_post(); ?>

        <?php
        global $product;
        ?>

        <li class="product" onclick="window.location='<?php echo get_permalink( $loop->post->ID ) ?>';">
            <div class="background-image" style="background: url('<?php echo $image[0]; ?>'); background-size: cover; background-position: center center;">    
            </div>
            <div class="top">
                <h2 class="title"><?php the_title(); ?></h2>

                <p>AU, VST3, Standalone</p>
                <p class="price">$<?php echo $product->get_price() ?></p>
            </div>
            <div class="image">
                <img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
            </div>
        </li>


    <?php endwhile; wp_reset_query(); // Remember to reset ?>
</ul>

<?php
//get_sidebar();
get_footer('shop');