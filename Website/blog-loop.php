<?php
/*
  Template Name: Blog Summary Page
 */
  ?>
  <?php get_header(); ?>
  <?php $sockoptions = get_option('system_theme_options'); ?>
  <div class="container">
    <div class="blog-items">
      <?php $wp_query->query('showposts=4' . '&paged=' . $paged);
      while ($wp_query->have_posts()) : $wp_query->the_post(); ?> 
      <div class="blog-post">
        <div class="featured-image">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
          }  ?>
        </div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog-ribbon.png">
        <?php the_excerpt(); ?>
        <button><a href="<?php the_permalink(); ?>">Read More</a></button>
        <?php comments_template(); ?>
      </div>
    <?php endwhile; ?>
    <?php posts_nav_link( ' ', '<img class="newer" src="' . get_template_directory_uri() . '/images/newer_flag.png" />', '<img class="older" src="' . get_template_directory_uri() . '/images/older_flag.png" />' ); ?>
  </div>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>