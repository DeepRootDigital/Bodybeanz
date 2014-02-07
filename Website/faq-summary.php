<?php
/*
  Template Name: FAQ Page
 */
  ?>
  <?php get_header(); ?>
  <div class="container">
    <div class="page-content">
                <div class="questions">
        <h1><?php the_title(); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/ribbonbanner.png">
        <?php get_template_part('faq', 'menu'); ?>
            <?php
            $faqposts = new WP_Query(array('post_type' => 'FAQ'));
            while ($faqposts->have_posts()) : $faqposts->the_post();
            ?>
            <div class="question">
                <img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png">
                <?php the_title(); ?>
                <div class="answer">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
</div>
<?php get_footer(); ?>