<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" rel="stylesheet" /> 
    <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/ae0e63e9-c5cf-4919-a2b1-2fdf7c96485b.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
    <script type="text/javascript">
    <!--
    function toggle_visibility(id) {
        var e = document.getElementById(id);
        if(e.style.display == 'block')
            e.style.display = 'none';
        else
            e.style.display = 'block';
    }
            //-->
            $(function(){
                $('.plusbutton').click(function() {
                    $(this).parent().find('.bean-product-content').toggle(800);

                });
            });
            </script>
            <script type="text/javascript">
            $(document).ready(function(){
                $(function () {
                   $('.page-slider ul li:last').css({
                      'left': '0px'
                  });
                   $('.page-slider ul li:first').before($('.page-slider ul li:last'));
                   setInterval(
                      function () {
                         $('.page-slider ul').find('li:last').animate({
                            "left":  "600px"
                        }, 700, function () {
                            $('.page-slider ul li:first').css({
                               'left': '0px'
                           });
                            $('.page-slider ul li:first').before($('.page-slider ul li:last'));          
                        });
                     },3000
                     );
               });
            });
            </script>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.css?v=2.1.3" type="text/css" media="screen" />
            <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.3"></script>
        </head>
        <body><div class="container">
            <div id="navbar">
                <ul class="firstmenu">
                    <li>happy body</li>
                    <li>happy life</li>
                </ul>
                <a href="<?php echo get_site_url(); ?>"><div class="spacer"></div></a>
                <ul>
                    <li><a href="<?php $options = get_option('sample_theme_options');
                    echo $options['panel2link']; ?>">Why Body Beanz?</a></li>
                    <li><a href="<?php echo $options['panel3link']; ?>">About the Beanz</a></li>
                    <li><a href="<?php echo $options['panel4link']; ?>">Body Beanz <br/><span style="font-family:'OfficinaSerifITCW01-Boo 734543'; text-transform:none;">vs</span>&nbsp; Others</a></li>
                    <li class="last"><a href="<?php echo $options['panel5link']; ?>">Compare Costs</a></li>
                </ul>
                <a href="<?php echo $options['buynowlink']; ?>"><div id="navribbon">
                </div></a>                
            </div>
        </div>
        <div class="goback">
            <a href="http://bodybeanz.com/">
                <img src="http://bodybeanz.com/wp-content/uploads/2013/08/GoBack_BTN.png">
            </a>
        </div>