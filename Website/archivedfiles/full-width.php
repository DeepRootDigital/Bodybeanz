<?php
/*
Template Name: Contest Page
*/
?>
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
           </head>
    <body style="background-image:url('<?php echo get_template_directory_uri(); ?>/images/bkg-panel.png');"><div id="container">
    <center>
   <div id="headline" style="float:none;">
                <h1 style="float:none;"><?php the_title(); ?></h1>
                <div style="float:none;" id="ribbonbanner"></div>
            </div>
<iframe src='http://woobox.com/n698u6?embed=http://BodyBeanz.com/launch-contest' frameborder='0' height='700' width='840'></iframe></center>
</div>