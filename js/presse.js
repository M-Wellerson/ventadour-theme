var presseArray;
function setPresseList(presseList) {
	presseArray = presseList;
}
jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//

	var presseSwiper;
	var gridMasonry,
		grid;
	var gridAction = $('.grid-item'),
		pressePopup = $('.presse__popup'),
		pressePopupClose = $('.presse__popup_close');
		isOpening = false;

	var navItems = $('.navItems'),
		navItemActive = $('.navItems.active');

	var distinctions = $('.presse__distinctions'),
		gridIsChanging = false;

	//----------------//
	//--- Functions --//
	//----------------//

	//----------------//
	//--- Listeners --//
	//----------------//

	gridAction.on('click', function () {
		var id = $(this).data('id');

		if (!pressePopup.hasClass('opened') && !isOpening) {
			openMenuPopup(pressePopup);

			$.each(presseArray[id], function (key, value) {
				var style;
				if(value[1] >= value[2]) {
					style = 'width: calc(100% - 20px); height: auto; max-height: calc(100% - 20px)';
				} else {
					style = 'width: auto; height: 100%; max-height: calc(100% - 20px)';
				}
				presseSwiper.appendSlide('<div class="swiper-slide"><img src="'+value[0]+'" alt="" style="'+style+'"></div>');
			});

		} else {
			closeMenuPopup(pressePopup);
		}
	});

	pressePopup.on('click', function (e) {
		console.log(isOpening);
		if(!isOpening) {
			if ($(e.target).is('.presse__popup') && !$(e.target).is($('.presse__popup_wrapper').find('*')) || $(e.target).is('.presse__popup') && !$(e.target).is($('.presse__popup_aime').find('*')) || $(e.target).is('.presse__popup_close')) {
				closeMenuPopup(pressePopup);
				isOpening = false;
				setTimeout(function () {
					if($('.swiper-slide').length > 0) {
						presseSwiper.removeAllSlides();
					}
				}, 300);
			}
		}
	});
	pressePopupClose.on('click', function (e) {
		if(!isOpening) {
			if ($(e.target).is('.presse__popup') && !$(e.target).is($('.presse__popup_wrapper').find('*')) || $(e.target).is('.presse__popup') && !$(e.target).is($('.presse__popup_aime').find('*')) || $(e.target).is('.presse__popup_close')) {
				closeMenuPopup(pressePopup);
				isOpening = false;
				setTimeout(function () {
					if($('.swiper-slide').length > 0) {
						presseSwiper.removeAllSlides();
					}
				}, 300);
			}
		}
	});

	navItems.on('click', function () {
		var item = $(this);
		if(!item.hasClass('active') && !gridIsChanging) {
			gridIsChanging = true;
			navItemActive.removeClass('active');
			item.addClass('active');
			navItemActive = item;

			if(grid.hasClass('show')) {
				grid.removeClass('show');
				setTimeout(function () {
					grid.addClass('hide');
					distinctions.removeClass('hide');
					setTimeout(function () {
						distinctions.addClass('show');
						gridIsChanging = false;

						gridMasonry.masonry();
					}, 500);
				}, 300);
			} else {
				distinctions.removeClass('show');
				setTimeout(function () {
					distinctions.addClass('hide');
					grid.removeClass('hide');
					setTimeout(function () {
						grid.addClass('show');
						gridIsChanging = false;

						gridMasonry.masonry();
					}, 500);
				}, 300);
			}
		}
	});
	//---------------------//
	//--- Initialization --//
	//---------------------//

	function init() {
		console.log('init masonry');
		grid = $('.presse__grid');
		gridAction = $('.grid-item');
		gridMasonry = grid.masonry({
			initLayout: false,
			// set itemSelector so .grid-sizer is not used in layout
			itemSelector: '.grid-item',
			// use element for option
			columnWidth: '.grid-sizer',
			gutter: 20,
			// horizontalOrder: true,
			stagger: 30,
			percentPosition: true
		});
		gridMasonry.masonry( 'on', 'layoutComplete', function() {
			grid.addClass('show');

		});
		gridMasonry.masonry();
		presseSwiper = new Swiper('.swiper-container', {
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			pagination: '.swiper-pagination',
			paginationType: 'fraction'
		});

		triggerIfAnchor('distinctions', function() {
			$('.navDistinctions').trigger('click');

			var navSelector = $('.navSelector'),
				offsetSelector =  (navItems.height() / 3);

			navSelector.css({
				'opacity': 1,
				'top': $('.navDistinctions').position().top + offsetSelector
			})
		});

		// var url = window.location.href;
		// console.log(url);
		// var anchorName = document.location.hash.substring(1);
		// if(anchorName.length != null){
		// 	console.log(anchorName);
		// 	if(anchorName == 'distinctions') {
		//
		// 	}
		// }
	}


	if($('.wrapper').hasClass('presse')) {
		init();
	}
});