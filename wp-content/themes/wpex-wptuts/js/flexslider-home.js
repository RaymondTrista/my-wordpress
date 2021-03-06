jQuery(function($){
	$(window).load(function() {
		$('.featured-slider-preloader').hide();
		$('#featured-slider').flexslider({
			slideshow : true,
			controlsContainer: "#featured-slider-wrap",
			animation : 'fade',
			pauseOnHover: true,
			animationSpeed : 400,
			smoothHeight : true,
			directionNav: false,
			prevText : '<span class="fa fa-angle-left"></span>',
			nextText : '<span class="fa fa-angle-right"></span>',
			controlNav : "thumbnails"
		});
	});
});