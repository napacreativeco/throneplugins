<ul class="products">
        <?php
        $args = array( 'post_type' => 'product' );
        $loop = new WP_Query( $args );
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'single-post-thumbnail' );

        while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <?php global $product; ?>
            <?php $imageID = get_field('archive_image'); ?>
            <?php $image = wp_get_attachment_image_src( $imageID, 'full' ); ?>
            <?php $alt_text = get_post_meta($imageID , '_wp_attachment_image_alt', true); ?>

            <li class="product" onclick="window.location='<?php echo get_permalink( $loop->post->ID ) ?>';">

                <div class="image">
                    <img src="<?php echo $image[0]; ?>" alt="<?php echo $alt_text; ?>" />
                </div>
                
                <div class="title">
                    <h2><?php the_title(); ?></h2>
                </div>

                <div class="description">
                    <p><?php the_excerpt(); ?></p>
                </div>
            
                <div class="price">
                    <p>$<?php echo $product->get_price() ?></p>
                </div>
            
            </li>


        <?php endwhile; wp_reset_query(); // Remember to reset ?>
    </ul>