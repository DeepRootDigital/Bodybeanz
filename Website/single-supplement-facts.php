<?php get_template_part( 'header', 'subpage' ); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div id="panel">
            <div class="container">
                <div id="pgcontent">
                    <div id="headline">
                        <h1>Beanz in the Box</h1>
                        <div id="ribbonbanner"></div>                        
                    </div>
                    <?php get_template_part('product', 'menu'); ?><div id="buynow2"></div><div id="supplementfacts"></div>
                    <div id="column">
                        <div id="supplementinfo">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/pdctphoto1.png" width="50" height="50">
                            <h2><?php the_title(); ?></h2>
                            <br/>
                            <p>Fat & Sugar Breakdown</p>
                        </div>
                        <div class="beanimg">
                                <?php
                                global $wpdb;
                                $images = get_post_meta(get_the_ID(), 'pdphoto', false);
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
                                    echo "<img src='{$src}' width='50' height='50' />";
                                }
                                ?>
                            </div>
                        
                        <?php the_content(); ?>

                    </div>
                </div>
            </div>
        <?php endwhile;
    endif; ?>
    <?php get_footer(); ?>
