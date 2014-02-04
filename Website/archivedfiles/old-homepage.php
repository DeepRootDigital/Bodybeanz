<!--
  /* Archiving Old Homepage */

<!DOCTYPE html>
<html>
<head>
  <title>Body Beanz</title>
  <link href="<?php echo get_template_directory_uri(); ?>/new-hp.css" rel="stylesheet" type="text/css" />
 <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.css"/>
  <script type="text/javascript" src="http://fast.fonts.net/jsapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.js"></script>
<?php wp_head(); ?>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
$(document).ready(function() {
   $('#slideFrame .slide').hide();
$('#slideFrame .slide:first').fadeIn('slow');
setInterval(function() {
   $('#slideFrame .slide').hide();
$('#slideFrame .slide:last').fadeIn('slow');
$('#slideFrame .slide:first').before($('#slideFrame .slide:last'));
}, 3000);

});
</script>
<script type="text/javascript">
$(document).ready(function() {
  $('.fancybox-media').fancybox({
    openEffect  : 'none',
    closeEffect : 'none',
    helpers : {
      media : {}
    }

  });
  $("a#inline").fancybox({
    'hideOnContentClick': true
  });
});
$(document).ready(function() {

  /* This is basic - uses default settings */
  
  $("a#single_image").fancybox({
  'scrolling' : 'yes',
'width' : '850',
'autoscale' : 'false',
'autoDimensions'  : 'false',
});
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-39326360-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
  <div class="container">
    <div class="top-content">
      <div class="top-container">
        <div class="header">
          <a href="#"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" /></a>
          <div class="nav">
            <?php wp_nav_menu( array('menu' => 'Home Menu' )); ?>
          </div>
        </div>
        <div id="slideFrame">
          <div class="slide">
<img src="http://bodybeanz.com/wp-content/uploads/2013/08/Slide_1.png">
        </div>   
<div class="slide">
<img src="http://bodybeanz.com/wp-content/uploads/2013/08/BB_Slide2.jpg">
<div class="overlay">
<h2>
Battle <span>Beanz</span>
<img src="<?php echo get_template_directory_uri(); ?>/images/leafy.png">
</h2>
<p>help strengthen your immune system with antioxidants</p>
<a href="http://bodybeanz.com/learn-more"><img class="lm-mm" src="<?php echo get_template_directory_uri(); ?>/images/learn-more-slider.png"></a>
</div>
</div>
<div class="slide">
<img src="http://bodybeanz.com/wp-content/uploads/2013/08/BB_Slide3.jpg">
<div class="overlay">
<h2>
Belly <br><span>Beanz</span>
<img src="<?php echo get_template_directory_uri(); ?>/images/leafy.png">
</h2>
<p>promote healthy blood sugar for more energy, less fat</p>
<a href="http://bodybeanz.com/learn-more"><img class="lm-mm" src="<?php echo get_template_directory_uri(); ?>/images/learn-more-slider.png"></a>
</div>
</div>
<div class="slide">
<img src="http://bodybeanz.com/wp-content/uploads/2013/08/BB_Slide4.jpg">
<div class="overlay">
<h2>
Breakdown <span>Beanz</span>
<img src="<?php echo get_template_directory_uri(); ?>/images/leafy.png">
</h2>
<p>improve your digestion & nutrient absorption with probiotics</p>
<a href="http://bodybeanz.com/learn-more"><img class="lm-mm" src="<?php echo get_template_directory_uri(); ?>/images/learn-more-slider.png"></a>
</div>
</div>
<div class="slide">
<img src="http://bodybeanz.com/wp-content/uploads/2013/08/BB_Slide5.jpg">
<div class="overlay">
<h2>
Boomer <span>Beanz</span>
<img src="<?php echo get_template_directory_uri(); ?>/images/leafy.png">
</h2>
<p>support your heart health with omegas</p>
<a href="http://bodybeanz.com/learn-more"><img class="lm-mm" src="<?php echo get_template_directory_uri(); ?>/images/learn-more-slider.png"></a>
</div>
</div>   
    </div>
        </div>
      </div>
    </div>
    <div class="bottom-content">
      <div class="bottom-container">
        <div class="promo box">
          <a href="http://bodybeanz.com/learn-more"><img class="beanz-icon2" src="<?php echo get_template_directory_uri(); ?>/images/beanz-icon2.png" alt="Body Beanz" /></a>
          <a href="http://bodybeanz.com/learn-more"><img class="learn-more-ribbon" src="<?php echo get_template_directory_uri(); ?>/images/learn-more-ribbon.png" alt="" /></a>
        </div>
        <div class="the-science box">
          <div class="video">
            <a class="fancybox-media" href="http://player.vimeo.com/video/69434445"><img class="video" src="http://bodybeanz.com/wp-content/uploads/2013/08/video.png" alt="" /></a>
            <img class="science-text-leaf" src="<?php echo get_template_directory_uri(); ?>/images/science-text-leaf.png" alt="" />
            <p>This is why our Body Beanz superfood nutrients are better than your vitamins! Click now to watch this short video that explains it all!</p>
            </div>
          </div>
          <div class="the-facts box">
            <img class="beanz-bag" src="<?php echo get_template_directory_uri(); ?>/images/beanz-bag.png" />
            <div class="fact-list">
              <div class="left">
                <ul>
                  <li>natural</li>
                  <li><span>supplements</span></li>
                </ul>
                <ul>
                  <li>100%</li>
                  <li><span>superfoods</span></li>
                </ul>
              </div>
              <div class="right">
                <ul>
                  <li>zero</li>
                  <li><span>chemicals</span></li>
                </ul>
                <ul>
                  <li>easy</li>
                  <li><span>packs</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_footer(); ?> -->