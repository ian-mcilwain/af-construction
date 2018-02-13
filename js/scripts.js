"use strict";

var app = {};

app.init = function () {
 app.ourWorkGrid();
 app.servicesSlider();
 app.clientSlider();
};

app.ourWorkGrid =  function () {
	$('.grid').imagesLoaded(function(){
		$('.grid').isotope({
		itemSelector: '.grid-item',
		percentPosition: true,
		masonry: {
			columnWidth: '.grid-sizer',
			gutter: '.gutter-sizer'
		}
		});
	});
	
	$("[data-fancybox]").fancybox({
		loop : true,
		toolbar : true
	});
}

app.servicesSlider = function () {
	$('.slider').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: true,
		dots: true
	  });
}

app.clientSlider = function () {
	$('.clientSlider').slick({
		centerMode: true,
		centerPadding: '0',
		slidesToShow: 5,
		autoplay: true,
		autoplaySpeed: 3000,
		infinite: true,
		arrows: false,
		responsive: [
		  {
			breakpoint: 768,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '0',
			  slidesToShow: 3
			}
		  },
		  {
			breakpoint: 480,
			settings: {
			  arrows: false,
			  centerMode: true,
			  centerPadding: '0',
			  slidesToShow: 1
			}
		  }
		]
	  });
}


$(document).ready(function () {
	app.init();
});

