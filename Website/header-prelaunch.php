<!DOCTYPE html>
<html>
    <head>
         <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<script type="text/javascript" src="http://bodybeanz.com/wp-content/plugins/easy-contact-forms/easy-contact-forms-forms.1.2.2.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" /> 
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.css"/>
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
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.masonry.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/show-hide.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/slider.js"></script>
<?php $sysoptions = get_option('system_theme_options'); ?>
    <script type="text/javascript">
    var $container = $('.imagecontainer');
  $container.imagesLoaded(function(){
  $container.masonry({
    columnWidth : 192,
    });
  }); 
  </script>
  <script type="text/javascript">
            <!--
            function myPopup(url) {
                window.open( url, "myWindow", "status = 1, height = 500, width = 360, resizable = 0" )
            }
            //-->
        </script>
<script type="text/javascript"> $(function(){
    $('.plusbutton').click(function() {
        $(this).parent().find('.bean-product-content').toggle(800);

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
});</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
           </head>
    <body><div class="container">
            <img class="ribbon-new" src="<?php echo get_template_directory_uri(); ?>/images/ribbon-new.png" alt="phoneinfo"/><img style="top:400px; margin-left:42px;" class="ribbon-new" src="<?php echo get_template_directory_uri(); ?>/images/fa-preheader.png" alt="header"><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-like" data-href="https://www.facebook.com/BodyBeanz" data-send="false" data-layout="button_count" data-width="450" data-show-faces="true"></div>
    <a href="<?php echo $sysoptions[twitterurl]; ?>"><img style="top:465px; margin-left:42px;" class="ribbon-new" src="<?php echo get_template_directory_uri(); ?>/images/twitter-preheader.png" alt="twitter"></a>
            </div>
        </div>