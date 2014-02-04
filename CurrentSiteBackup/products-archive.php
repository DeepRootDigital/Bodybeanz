<?php
/*
  Template Name: Store Page
 */
  ?>
  <?php if (get_post_meta( get_the_ID(), 'header', true ) == 'value1') { ?>
  <?php get_template_part( 'header', 'subpage' ); ?>
  <?php } ?>
  <?php if (get_post_meta( get_the_ID(), 'header', true ) == 'value2') { ?>
  <?php get_template_part( 'header', 'prelaunch' ); ?>
  <?php } ?>
  <?php if (get_post_meta( get_the_ID(), 'header', true ) == 'value3') { ?>
  <?php get_header(); ?>
  <?php } ?>
  <?php if (get_post_meta( get_the_ID(), 'header', true ) == '') { ?>
  <?php get_template_part( 'header', 'subpage' ); ?>
  <?php } ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div id="panel">
    <div class="container">
        <div id="pgcontent">
            <div id="headline" style="margin-top:20px;">
                <h1>
                    <?php the_title(); ?>
                </h1>
                <img style="margin-bottom:20px;" src="<?php echo get_template_directory_uri(); ?>/images/longribbon.png">
            </div>
            <div id="column" style="width:732px;">
<?php the_content(); ?>
                <?php $testimonialsposts = new WP_Query(array('post_type' => 'Products'));
                while ($testimonialsposts->have_posts()) : $testimonialsposts->the_post();
                ?>
                <div id="product">
                    <div id="productimage2">
                       <?php
                       global $wpdb;
                       $images = get_post_meta(get_the_ID(), 'productimage', false);
                       $images = implode(',', $images);
                    // Re-arrange images with 'menu_order'
                       $images = $wpdb->get_col("
                           SELECT ID FROM {$wpdb->posts}
                           WHERE post_type = 'attachment'
                           AND ID in ({$images})
                           ORDER BY menu_order ASC
                           ");
                       foreach ($images as $att) {
                        // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
                        $src = wp_get_attachment_image_src($att, 'full');
                        $src = $src[0];
                        // Show image
                        echo "<img src='{$src}' width='150' />";
                    }
                    ?>
                </div>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><div id="price"><?php $meta = get_post_meta( get_the_ID(), 'Price', true ); echo $meta; ?></div></h1>
                <div class="pcontent">
                    <?php echo apply_filters('the_content', get_post_meta( get_the_ID(), 'fp', true)); ?>
                </div>
                <div class="buttonsfloat">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>">
                            <img class="add-to-cart" src="<?php echo get_template_directory_uri(); ?>/images/buy-now-store.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buy-now-store.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/anim_buynow.png'" />
                    </a>
                    <a href="<?php the_permalink(); ?>"><img class="more-info" src="<?php echo get_template_directory_uri(); ?>/images/more-info-store.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/more-info-store.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/anim_moreinfo.png'" /></a>
                </div>
            </div>
            <div class="dotline">
            </div>
        <?php endwhile; ?>
    </div>
</div>
</div>
<?php endwhile;
endif;
?>
<?php get_footer(); ?>