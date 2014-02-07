<?php /* Template Name: Store Page */ ?>
<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="container">
    <div class="page-content">
      <h1>
        <?php the_title(); ?>
      </h1>
      <img src="<?php echo get_template_directory_uri(); ?>/images/longribbon.png">
      <?php the_content(); ?>
      <div class="products">
        <?php $productposts = new WP_Query(array('post_type' => 'Products'));
        while ($productposts->have_posts()) : $productposts->the_post();
        ?>
        <div class="product">
          <span class="product-title">
            <?php product_img('productimage'); ?>
            <a href="<?php the_permalink(); ?>">
              <h2><?php the_title(); ?>
                <span><?php echo autoc_get_postdata('Price'); ?></span>
              </h2>
            </a>
          </span>
          <div class="product-content">
            <?php echo apply_filters('the_content', get_post_meta( get_the_ID(), 'fp', true)); ?>
          </div>
          <div class="cart-buttons">
            <a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/buy-now-store.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buy-now-store.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/anim_buynow.png'" />
            </a>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_template_directory_uri(); ?>/images/more-info-store.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/more-info-store.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/anim_moreinfo.png'" />
            </a>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>