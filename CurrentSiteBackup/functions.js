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
});