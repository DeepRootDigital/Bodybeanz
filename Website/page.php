<?php get_header(); ?>
<div id="panel">
    <div class="container">
        <div id="pgcontent">
<?php if (get_post_meta( get_the_ID(), 'sldpphoto', true) != '') { ?>
	<div class="page-slider">
 <?php

            global $wpdb;
            $images = get_post_meta( get_the_ID(), 'sldpphoto', false );
            $images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
            $images = $wpdb->get_col( "
              SELECT ID FROM {$wpdb->posts}
              WHERE post_type = 'attachment'
              AND ID in ({$images})
              ORDER BY menu_order ASC
              " );

            foreach ( $images as $att )
            {
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
              $src = wp_get_attachment_image_src( $att, 'full' );
              $src = $src[0];
    // Show image
              echo "<img src='{$src}' />";
            }
            ?>
	</div>
<?php } ?>
            <div id="headline">
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <div id="ribbonbanner"></div>
            </div>
            <div id="column">
             
                    <?php the_content(); ?>
                </div>
        </div>
    </div>
    <?php endwhile; endif; ?>
    <?php get_footer(); ?>