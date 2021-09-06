//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//

jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//
	var sliderSwiper = $('.sliderSwiper');
	var sliderPagination = $('.sliderSwiper__pag');
	var sliderPaginationActive = $('.sliderSwiper__pag.active');
	var sliderSlide = $('.sliderSwiper__slide');
	var sliderSlideActive = $('.sliderSwiper__slide.active');
	var isAnimating = false;

	//----------------//
	//--- Functions --//
	//----------------//


	//----------------//
	//--- Listeners --//
	//----------------//
	sliderPagination.on('click', function () {
		var elem = $(this);
		if(!elem.hasClass('active') && !isAnimating) {
			isAnimating = true;
			var idToActive = $(this).data('id');
			var sliderSlideToActive = $('.sliderSwiper__slide:nth-child('+idToActive+')');
			console.log(idToActive);
			console.log(sliderSlideToActive);

			sliderPaginationActive.removeClass('active');
			elem.addClass('active');

			sliderSlideToActive.addClass('animate');
			setTimeout(function () {
				sliderSlideActive.removeClass('active');
				sliderSlideToActive.addClass('active');
				sliderSlideToActive.removeClass('animate');
				setTimeout(function () {
					sliderSlideActive = sliderSlideToActive;
					sliderPaginationActive = elem;
					isAnimating = false;
				}, 50);
			}, 600);
		}

	});

	//---------------------//
	//--- Initialization --//
	//---------------------//


});