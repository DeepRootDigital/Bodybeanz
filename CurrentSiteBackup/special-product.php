<?php
/*
Template Name Posts: Expanded Product
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
          <div id="breadcrumbs">
            <a href="http://bodybeanz.com/?page_id=61">
              All Products
          </a>
          <span style="color:#f17a1c;">/</span>
          <?php the_title(); ?>
      </div>
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
      ?>
      <img src="<?php echo get_template_directory_uri(); ?>/images/productmoniker.png" style="margin-left:16px;">
  </div>
  <div id="priceribbon">
    <a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>"><div class="pricing"><?php echo get_post_meta( get_the_ID(), 'Price', true); ?></div>
    </div>
</a> 
<div class="product-content"><?php the_content(); ?></div>         
<div class="beanz">
    <h2 class="producttitle"><?php echo get_post_meta( get_the_ID(), 'bean1title', true); ?></h2>
    <div id="specifications"><?php echo get_post_meta( get_the_ID(), 'bean1subtext', true); ?></div>
    <div class="plusbutton"></div>
    <div class="bean-product-content">
      <?php echo get_post_meta( get_the_ID(), 'beancontent1', true); ?>
  </div>            
</div>
<div style="width:565px;" class="dotline"></div>
<div class="beanz">
    <h2 class="producttitle"><?php echo get_post_meta( get_the_ID(), 'bean2title', true); ?></h2>
    <div id="specifications"><?php echo get_post_meta( get_the_ID(), 'bean2subtext', true); ?></div>
    <div class="plusbutton"></div>    
    <div class="bean-product-content">
      <?php echo get_post_meta( get_the_ID(), 'beancontent2', true); ?>
  </div>        
</div>
<div style="width:565px;" class="dotline"></div>
<div class="beanz">
 <h2 class="producttitle"><?php echo get_post_meta( get_the_ID(), 'bean3title', true); ?></h2>
 <div id="specifications"><?php echo get_post_meta( get_the_ID(), 'bean3subtext', true); ?></div>
 <div class="plusbutton"></div>     
 <div class="bean-product-content">
    <?php echo get_post_meta( get_the_ID(), 'beancontent3', true); ?>
</div>       
</div>
<div style="width:565px;" class="dotline"></div>
<div class="beanz">
   <h2 class="producttitle"><?php echo get_post_meta( get_the_ID(), 'bean4title', true); ?></h2>
   <div id="specifications"><?php echo get_post_meta( get_the_ID(), 'bean4subtext', true); ?></div>
   <div class="plusbutton"></div>      
   <div class="bean-product-content">
      <?php echo get_post_meta( get_the_ID(), 'beancontent4', true); ?>
  </div>      
</div>
</div>
<a href="<?php echo get_post_meta( get_the_ID(), 'buttoncode', true); ?>">
  <img class="buy-now-button-store" src="<?php echo get_template_directory_uri(); ?>/images/buynow.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/buynow.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/buynowanim.png'" />
</a>
<a id="single_image" href="#kub">
<img class="supplementfacts" src="<?php echo get_template_directory_uri(); ?>/images/supplementfacts.png" onmouseout="this.src='<?php echo get_template_directory_uri(); ?>/images/supplementfacts.png'" onmouseover="this.src='<?php echo get_template_directory_uri(); ?>/images/supplementfactsanim.png'" /></a>
</a>
<div id="kub" style="display:none;">
<?php
global $wpdb;
$images = get_post_meta(get_the_ID(), 'supplementfacts', false);
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
  echo '<img src="'. $src . '" />';
}
?>
</div>
</div>
</div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>