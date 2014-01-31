<?php
/*
  Template Name: Blog Summary Page
 */
  ?>
  <?php get_template_part('header','prelaunch'); ?>
  <?php $sockoptions = get_option('system_theme_options'); ?>
  <div id="panel">
    <div class="container">
      <div id="pgcontent">
       <div class="blog-content">
        <div class="top-content">
          <div id="slideFrame">
            <?php

            global $wpdb;
            $images = get_post_meta( get_the_ID(), 'blogphotos', false );
            $images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
            $images = $wpdb->get_col( "
              SELECT ID FROM {$wpdb->posts}
              WHERE post_type = 'attachment'
              AND ID in ({$images})
              ORDER BY menu_order ASC
              " );

            foreach ( $images as $att )
            {
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
              $src = wp_get_attachment_image_src( $att, 'full' );
              $src = $src[0];
    // Show image
              echo "<img src='{$src}' />";
            }
            ?>
            
          </div>
          <ul> 
            <li><a href="<?php echo $sockoptions['facebookurl'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png" alt="phoneinfo"/></a></li>
            <li><a href="<?php echo $sockoptions['twitterurl'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png" alt="phoneinfo"/></a></li>
            <li><a href="<?php echo $sockoptions['pinterestlink'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/pintrest-icon.png" alt="phoneinfo"/></a></li>
            <li><a href="<?php echo $sockoptions['gpluslink'] ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/BB_google_Plus_Icon.png" alt="phoneinfo"/></a></li>
          </ul>
        </div>
        <div class="middle-content">
          <?php $wp_query->query('showposts=4' . '&paged=' . $paged);
          while ($wp_query->have_posts()) : $wp_query->the_post(); ?>  
          <?php 
          $linkb4 = get_post_meta( get_the_ID(), 'imglinkplace', true );
          if($linkb4 != '') {
            $linkto = get_post_meta( get_the_ID(), 'imglinkplace', true );
          }
          else {
            $linkto = '#';
          } ?>
          <div class="blog-post">
            <img class="blog-ribbon" src="<?php echo get_template_directory_uri(); ?>/images/blog-ribbon.png" alt="phoneinfo"/>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="image-post">
              <?php

              global $wpdb;
              $images = get_post_meta( get_the_ID(), 'blogimage', false );
              $images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
              $images = $wpdb->get_col( "
                SELECT ID FROM {$wpdb->posts}
                WHERE post_type = 'attachment'
                AND ID in ({$images})
                ORDER BY menu_order ASC
                " );

              foreach ( $images as $att )
              {
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
                $src = wp_get_attachment_image_src( $att, 'full' );
                $src = $src[0];
    // Show image
                echo "<a href='{$linkto}'><img src='{$src}' /></a>";
              }
              ?>
            </div>

            <?php the_content(); ?>
            <div class="imagecontainer">
              <?php

              global $wpdb;
              $images = get_post_meta( get_the_ID(), 'gridimgs', false );
              $images = implode( ',' , $images );

// Re-arrange images with 'menu_order'
              $images = $wpdb->get_col( "
                SELECT ID FROM {$wpdb->posts}
                WHERE post_type = 'attachment'
                AND ID in ({$images})
                ORDER BY menu_order ASC
                " );

              foreach ( $images as $att )
              {
    // Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
                $src = wp_get_attachment_image_src( $att, 'full' );
                $imgwidth = $src[1];
                $imgheight = $src[2];
                $src = $src[0];

    // Show image
                if ($imgwidth  > $imgheight) {
                 echo "<div class='itemgrid-col1'><a href='{$linkto}'><img src='{$src}' /></a></div>";
               }
               if ($imgwidth == $imgheight) {
                 echo "<div class='itemgrid-col2'><a href='{$linkto}'><img src='{$src}' /></a></div>";
               }
               if ($imgwidth <> $imgheight && $imgwidth <= $imgheight   ) {
                 echo "<div class='itemgrid'><a href='{$linkto}'><img src='{$src}' /></a></div>";
               }
             }
             ?><?php $counter++; ?>
             <?php 
             $testcase = get_post_meta( get_the_ID(), 'enabletweet', true);
             if ($testcase !== '' ) { ?>
             <div class="itemgrid-tweet"><img src="<?php echo get_template_directory_uri(); ?>/images/quote.png"><span>
               <?php
               echo $testcase;
               ?>
             </span>
             <span class="hash">#bodybeanz</span></div>
           </div><?php } ?>

           <div class="social-media">
            <ul>
              <li><a href="javascript:myPopup('http://twitter.com/share?text=An%20Awesome%20Link&url=<?php the_permalink(); ?>', '_blank', 'width=400,height=500');void(0);">tweet it</a></li>
              <li><a href="javascript:myPopup('http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>', '_blank', 'width=400,height=500');void(0);">like it</a></li>
              <li><a data-pin-config="above" href="javascript:myPopup('http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>', '_blank', 'width=400,height=500');void(0);"  data-pin-do="buttonPin" >pin it</a></li>
              <li><a href="javascript:window.open('https://plus.google.com/share?url=<?php the_permalink(); ?>', '_blank', 'width=400,height=500');void(0);">google +</a></li>
            </ul>

          </div>

          <div class="comment">
           <img class="left" src="<?php echo get_template_directory_uri(); ?>/images/comment-icon.png" alt="phoneinfo"/>
           <h5><span class="replylink">Comments</span></h5>
           <h4><span class="replylink">leave a comment <img style="vertical-align:bottom;" src="<?php echo get_template_directory_uri(); ?>/images/leave-comment-plus.png" alt="phoneinfo"/></span></h4>
         </div>
         <?php global $withcomments;
         $withcomments = 1;
         comments_template(); ?>
       </div>
     <?php endwhile; ?>
     <div class="pagination">
      <?php posts_nav_link( ' ', '<img class="newer" src="' . get_template_directory_uri() . '/images/newer_flag.png" />', '<img class="older" src="' . get_template_directory_uri() . '/images/older_flag.png" />' ); ?></div>
      <?php
      $wp_query = null;
        $wp_query = $temp;  // Reset
        ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>