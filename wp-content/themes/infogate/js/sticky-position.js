//http://www.hongkiat.com/blog/css-sticky-position/

$(document).ready(function() {

	
	

	//Contenedor de ambas publicidades laterales
	var stickyAdsTOP = $('.laterales').offset().top;

	var stickyAds = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyAdsTOP) { 
			$('.laterales').addClass('sticky-publicidad');
		} else {
			$('.laterales').removeClass('sticky-publicidad'); 
		}
	};

	stickyAds();

	$(window).scroll(function() {
		stickyAds();
	});


});