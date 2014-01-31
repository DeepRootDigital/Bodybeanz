<?php get_template_part( 'header', 'subpage' ); ?>
<?php global $thisCat;
$thisCat = get_query_var('cat'); ?>
<div id="panel">
  <div class="container">
    <div id="pgcontent">
      <div id="headline" style="margin-top:28px;">
        <h1><?php single_cat_title( $prefix = '', $display = true ); ?></h1>
        <div id="ribbonbanner" style="margin-top:-1px;"></div>
      </div>
      <div id="faqcolumn">
        <?php get_template_part('faq', 'menu'); ?>
        <?php
        query_posts('cat='. $thisCat. "&post_type=faq&post_status=publish&");
// The Loop
        while ( have_posts() ) : the_post();
        ?>   
        <div id="faq">
          <div id="question">
            <a onclick="toggle_visibility('id <?php echo $post->ID ?>');"><img src="<?php echo get_template_directory_uri(); ?>/images/arrow.png">
              <h4><?php the_title(); ?></h4></a>
            </div>
            <div id="id <?php echo $post->ID ?>" class="id">
              <div id="faqtext"><?php the_content(); ?></div>
            </div>
          </div>
          <div class="dotline"></div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>