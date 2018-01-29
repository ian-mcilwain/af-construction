$(function(){
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

	$('.slider').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3
	  });
		  
	
});

