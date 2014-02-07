  <?php get_header(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="page-content">
            <div id="headline" style="margin-top:20px;">
                <div id="breadcrumbs"><a href="http://bodybeanz.com/?page_id=61">All Products</a> <span style="color:#f17a1c;">/</span> <?php the_title(); ?></div>
                <h1><?php the_title(); ?></h1>
                <div id="ribbonbanner"></div>
            </div>
            <div id="column" style="margin-top:20px;">
                <div id="productimage">
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
                        echo "<img src='{$src}' height='206' />";
                    }
                    ?><img src="<?php echo get_template_directory_uri(); ?>/images/productmoniker.png" style="margin-left:16px;">
                </div>
                <div id="priceribbon">
                    <a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>"><div class="pricing">$<?php echo get_post_meta( get_the_ID(), 'Price', true); ?></div>
                    </div></a>
                    <div class="beanz">
                        <h2 class="producttitle"><?php echo get_post_meta( get_the_ID(), 'subheader', true); ?></h2>
                        <div id="specifications"><?php echo get_post_meta( get_the_ID(), 'class', true); ?></div>
                        
                    </div>
                    <div class="dotline"></div>
                    <div id="productcontent"><?php the_content(); ?></div>
                </div>
                <div id="supplementfacts"></div>
                <a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>"><div id="buybutton"></div></a>
            </div>
        </div>
    <?php endwhile; endif; ?>
    <?php get_footer(); ?>