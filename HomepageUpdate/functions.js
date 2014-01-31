$(document).ready(function(){
       $(function () {
		setInterval(
			function () {
				$('.slider .container div:first-of-type').appendTo('.slider .container');
				$('.slider .container div:last-of-type').fadeOut(300,function(){
					$('.slider .container div:first-of-type').fadeIn(300);
				});		
			},5000
			);
		});  
});