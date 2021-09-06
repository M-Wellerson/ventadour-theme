//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//

jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//


	//----------------//
	//--- Functions --//
	//----------------//


	//----------------//
	//--- Listeners --//
	//----------------//


	//---------------------//
	//--- Initialization --//
	// //---------------------//
	// if ($('.wrapper').hasClass('sources')) {
	// 	var swiper = new Swiper('.swiper-container', {
	// 		pagination: '.swiper-pagination',
	// 		paginationClickable: true,
	// 		direction: 'vertical'
	//
	// 		/*  slidesPerView: 'auto',
	// 		 visibilityFullFit: true,
	// 		 autoResize: true,
	// 		 cssWidthAndHeight: true*/
	//
	// 		//spaceBetween: 0,
	//
	// 		//loop: true,
	// 		//
	// 		// centeredSlides: true
	// 		//autoplay: 5000
	//
	// 	});
	// } else
	if($('.wrapper').hasClass('home')) { // && $(window).width() > 767)
		var swiper = new Swiper('.swiper-container', {
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			loop: true
		});
	}

});