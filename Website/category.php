  <?php get_header(); ?>
  <?php global $thisCat;
  $thisCat = get_query_var('cat'); ?>
  <div class="container">
    <div class="page-content">
      <div class="questions">
        <h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/ribbonbanner.png">
        <?php get_template_part('faq', 'menu'); ?>
        <?php
        query_posts('cat='. $thisCat. "&post_type=faq&post_status=publish&");
        while ( have_posts() ) : the_post();
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