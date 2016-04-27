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

	console.log("what's up?")

	var winWidth = $(window).width();
	var winHeight = $(window).height();
	$('.heroImage').css({
		width: winWidth,
		height: winHeight
	})
	// console.log(winWidth);

	setTimeout(function(){
		$('#lindsayLogo').addClass("fadeToWhite");
	}, 500)

	setTimeout(function(){
		$('.heroImage').addClass("hiddenHero");
		// $('.heroImage').removeClass(".heroImage");
		// console.log('hello!')
	}, 2800)

	var url = window.location.href;
	console.log(url);

	var urlValue = url.indexOf('about');
	console.log(urlValue);

	if (urlValue > -1) {
		$('#aboutLink').addClass('linkVisible');
		$('#workLink').removeClass('linkVisible');
	} else if (urlValue <= -1) {
		$('#aboutLink').removeClass('linkVisible');
		$('#workLink').addClass('linkVisible');
	}



	// if (url.indexOf("http://localhost:8888/lindsayGuscott/about/") > -1) {
	// 	// $('#aboutLink').css("color", "black");
	// 	// console.log('about');
	// } else {
	// 	// $('#workLink').css("color", "black");
	// 	// console.log('work');
	// }

});

// on window resize

$(window).resize(function() {
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	$('.heroImage').css({
		width: winWidth,
		height: winHeight
	})

	// $('.lightbox').css({
	// 	width: winWidth,
	// 	height: winHeight
	// })
})

$('.gridItemLink').click(function(e) {
	var winWidth = $(window).width();
	var winHeight = $(window).height();
	var step1 = $(this).html();
	var step1 = step1.trim();

	console.log(step1);
	e.preventDefault();
	$(this).toggleClass('lightbox');

	// $('.lightbox').css({
	// 	width: winWidth,
	// 	height: winHeight
	// })

	$(this).children().toggleClass('lightboxImage');
})
