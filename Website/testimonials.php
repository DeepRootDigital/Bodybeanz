<?php
/*
  Template Name: Testimonials Page
 */
?>
<?php get_template_part( 'header', 'subpage' ); ?>
<div id="panel">
    <div id="container">
        <div id="pgcontent">
            <div id="headline" style="margin-top:32px; margin-bottom:10px;">
                <h1>Testimonials</h1>
                <div id="ribbonbanner"></div>
            </div>
            <div id="column" style="margin-left:-9px;">
                <?php
                $testimonialsposts = new WP_Query(array('post_type' => 'Testimonials'));
                while ($testimonialsposts->have_posts()) : $testimonialsposts->the_post();
                ?>
                <div id="testimonial">
                    <?php
                    global $wpdb;
                    $images = get_post_meta(get_the_ID(), 'testimonialimage', false);
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
                        echo "<img src='{$src}' width='100' height='100' />";
                    }
                    ?>
                    <p><?php the_title(); ?></p>
                    <div id="more"><a onclick="toggle_visibility('id <?php echo $post->ID ?>');">more</a> <a onclick="toggle_visibility('id <?php echo $post->ID ?>');"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png"></a></div>
                    <div id="id <?php echo $post->ID ?>" class="id">
                        <div id="metabox">
                        <div id="name"><?php $meta = get_post_meta( get_the_ID(), 'fname', true ); echo $meta; ?></div>
                        <div id="location"><?php $meta = get_post_meta( get_the_ID(), 'loc', true ); echo $meta; ?></div>
                    </div>
                        <div id="longtext">... sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</div>
                    </div>
                    <div id="testimonialshadow"></div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
    
    <?php get_footer(); ?>