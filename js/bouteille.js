//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//

jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//
	var windowHeight,
		windowScrollTop,
		bottle,
		bottleTop,
		bottleBottom,
		lastBottle,
		firstBottle;
	var textLink,
		textLinkTop,
		textTitle;

	//----------------//
	//--- Functions --//
	//----------------//


	function isBottleInWindow() {
		var bottleTopDistance = parseFloat(bottleTop - windowScrollTop);
		var bottleBottomDistance = parseFloat(bottleBottom - (windowScrollTop + windowHeight));
		var offset = 150;

		if(bottleTopDistance >= offset) {
			// Slider coming to window
			firstBottle.css('background-position', 'center ' + bottleTopDistance + 'px');
			textLink.css('top', parseFloat(bottleTopDistance + (7 * windowHeight / 10)) + 'px');
			textLinkTop.css('top', parseFloat(bottleTopDistance + 'px'));
		} else {
			// Slider entering window
			firstBottle.css('background-position', 'center '+ offset +'px');
			textLink.css('top', parseFloat(offset + (7 * windowHeight / 10)) + 'px');
			textLinkTop.css('top', parseFloat(offset) + 'px');
		}
		// Slider leaving window
		if(bottleBottomDistance <= 0) {
			lastBottle.css('background-position', 'center ' + parseFloat(bottleBottomDistance + offset) + 'px');
			// console.log(bottleBottomDistance);
			textLink.css('top', parseFloat(bottleBottomDistance + (7 * windowHeight / 10) + offset) + 'px');
			textLinkTop.css('top', parseFloat(bottleBottomDistance + offset + 'px'));
		} else {
			lastBottle.css('background-position', 'center '+ offset +'px');
			// console.log(bottleBottomDistance);
			// textLink.css('top', parseFloat(80 + (7 * windowHeight / 10) + 80) + 'px');

		}
	}
	//----------------//
	//--- Listeners --//
	//----------------//

	$(window).on('scroll', function () {
		if($(window).width() > 1024 && $('.wrapper').hasClass('home')) {
			windowScrollTop = $(this).scrollTop();
			windowHeight = $(this).height();
			bottleTop = bottle.position().top;
			bottleBottom = bottle.position().top + bottle.height();
			isBottleInWindow();
		}
	});

	$(window).on('resize', function () {
		var offset = 150;
		if($(window).width() > 1024) {
			var test = parseFloat(((1846 * (offset / 100) * $(window).height()) / 1300)) - 160;
			console.log(test + 'px auto');
			if (test > $(window).width() - 320) {
				$('.bouteille__slider div').css('background-size', 'auto 70%');// '+ offset +'px auto
			} else {
				$('.bouteille__slider div').css('background-size', 'auto 70%');
			}
		}
	});
	//---------------------//
	//--- Initialization --//
	//---------------------//
	function init() {
		bottle = $('.home__bouteille');
		firstBottle = $('.bouteille__yellow');
		lastBottle = $('.bouteille__blue');
		windowScrollTop = $(window).scrollTop();

		textLink = $('a.bouteille__link');
		textLinkTop = $('.bouteilles__title');


		windowScrollTop = $(this).scrollTop();
		windowHeight = $(this).height();
		bottleTop = bottle.position().top;
		bottleBottom = bottle.position().top + bottle.height();
		if($(window).width() > 1024) {
			isBottleInWindow();
		}
	}
	if($('.wrapper').hasClass('home')) {
		init();
	}
});