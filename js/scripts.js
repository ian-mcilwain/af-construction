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
	var urlStyleValue = url.indexOf('food');
	var urlRecipeValue = url.indexOf('recipe');
	console.log("About Page Value: " + urlValue);
	console.log("Food Styling Page Value: " + urlStyleValue);
	console.log("Recipe Development Value: " + urlRecipeValue);

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
	// var winWidth = $(window).width();
	// var winHeight = $(window).height();
	// var step1 = $(this).html();
	// var step1 = step1.trim();

	// console.log(step1);
	// e.preventDefault();
	$(this).toggleClass('lightbox');
	console.log("THIS IS THE HTML: " + $(this).html());
	$(this).children().removeAttr('width');
	$(this).children().removeAttr('height');
	$(this).children(".size-full").toggleClass('lightboxImage');
	$(this).children(".caption").toggleClass('lightboxCaption')
	$(this).children(".exit").toggleClass('lightboxExit')
})

$(".fakeExit").click(function(e) {
	e.preventDefault()
	console.log("exiting");
})
