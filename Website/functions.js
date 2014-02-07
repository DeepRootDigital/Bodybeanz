$(document).ready(function(){
	$(function () {
		setInterval(
			function () {
				$('.slider .container .slides div:first-of-type').appendTo('.slider .container .slides');
				$('.slider .container .slides div:last-of-type').fadeOut(300,function(){
					$('.slider .container .slides div:first-of-type').fadeIn(300);
				});		
			},5000
			);
	});  

	function starwars() {
		boxheight = $('.testimonial-wrap').height();
		counter = 0;
		starwarsinterval = setInterval(
			function(){
				var singlebox = $('.testimonial-quote').eq(0).height();
				var testheight = (counter * boxheight) + singlebox;
				if (parseInt($('.testimonial-wrap').css('margin-top')) < (-testheight)) {
					$('.testimonial-wrap .testimonial-quote').clone().appendTo('.testimonial-wrap');
					$('.testimonial-wrap').animate({'margin-top':'-=3px'},200);
					counter = counter + 1;
				} else {
					$('.testimonial-wrap').animate({'margin-top':'-=3px'},200);

				}
			},200);
		return starwarsinterval;
	}

	starwars();

	$('.testimonial-area').on("mouseover",function(){
		clearInterval(starwarsinterval);
	});

	$('.testimonial-area').on("mouseout",function(){
		starwars();
	});

	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-39326360-1']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

	$('.reply-link').click(function() {
		$('#commentform').toggle(); 
	});

	/* FAQ */

	$('.question').click(function(event) {
		$(this).find('.answer').toggle();
	});

	$('.plusbutton').click(function() {
		$(this).parent().find('.bean-product-content').toggle(800);
	});
	
	$("a#single_image").fancybox({
		'scrolling' : 'yes',
		'width' : '850',
		'autoscale' : 'false',
		'autoDimensions'  : 'false',
	});

});