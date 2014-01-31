<!DOCTYPE html>
<html>
<head>
 <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<?php wp_head(); ?> 
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" /> 
 <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.css"/>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
 <script type="text/javascript">
 setInterval(function() {
  $('.ticker-wrap ul li:first').before($('.ticker-wrap ul li:last'));
}, 2000);
 var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-39326360-1']);
 _gaq.push(['_trackPageview']);

 (function() {
  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">
function toggle_visibility(id) {
  var e = document.getElementById(id);
  if(e.style.display == 'block')
    e.style.display = 'none';
  else
    e.style.display = 'block';
}
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
$(document).ready(function(){

  $('#lwt').hover(function() {
    $('#wheelcontentinit').addClass('unselected');
  }, function() {
    $('#wheelcontentinit').removeClass('unselected');
  });

  $('#rwt').hover(function() {
    $('#wheelcontentinit').addClass('unselected');
  }, function() {
    $('#wheelcontentinit').removeClass('unselected');
  });

  $('#lwb').hover(function() {
    $('#wheelcontentinit').addClass('unselected');
  }, function() {
    $('#wheelcontentinit').removeClass('unselected');
  });

  $('#rwb').hover(function() {
    $('#wheelcontentinit').addClass('unselected');
  }, function() {
    $('#wheelcontentinit').removeClass('unselected');
  });
  $('#wheelcontentinit').hover(function() { 
 $('#wheelcontentinit').unbind('mouseenter mouseleave');
});

});
  $(function(){
    $('.plusbutton').click(function() {
        $(this).parent().find('.bean-product-content').toggle(800);

    });
  });
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>

<!-- Optionally add helpers - button, thumbnail and/or media -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
</head>
<body><div class="container">
  <div id="navbar">
    <ul class="firstmenu">
      <li>happy body</li>
      <li>happy life</li>
    </ul>
    <a href="#panel1"><div class="spacer"></div></a>
    <ul>
      <li><a href="<?php
      $options = get_option('sample_theme_options');
      echo $options['panel2link'];
      ?>">Why Body Beanz?</a></li>
      <li><a href="<?php
      $options = get_option('sample_theme_options');
      echo $options['panel3link'];
      ?>">About the Beanz</a></li>
      <li><a href="<?php
      $options = get_option('sample_theme_options');
      echo $options['panel4link'];
      ?>">Body Beanz <br/><span style="font-family:'OfficinaSerifITCW01-Boo 734543'; text-transform:none;">vs</span>&nbsp; Others</a></li>
      <li class="last"><a href="<?php
      $options = get_option('sample_theme_options');
      echo $options['panel5link'];
      ?>">Compare Costs</a></li>
    </ul>
     <a href="<?php echo $options['buynowlink']; ?>"><div id="navribbon">

    </div></a>
  </div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/BodyBeanz" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    <a href="<?php echo $sysoptions[twitterurl]; ?>"><img style="top:475px; margin-left:42px;" class="ribbon-new" src="<?php echo get_template_directory_uri(); ?>/images/twitter-preheader.png" alt="twitter"></a>
</div>