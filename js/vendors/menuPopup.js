//-------------------------//
//------ menuPopup --------//
//---- Created by RSW -----//
//-------------------------//


/*
 * Specify a fixed menu (or add all fixed item), or set it to null to prevent the menu from moving when scroll bar is hidden
 * Specify the scrollbar's width with scrollBarWidth
 *
 * Add class opened that will contain a display block
 * Add class show that will contain the animation (opacity, ...)
 *
 * Enjoy ! :)
 */

//----------------//
//--- Variables --//
//----------------//
var isOpening = false,
	pageYOffset;
var scrollBarWidth = 7;
var body,
	menu;

//----------------//
//--- Functions --//
//----------------//

function openMenuPopup(menuPopup) {
	isOpening = true;
	menuPopup.addClass('opened');
	setTimeout(function () {
		menuPopup.addClass('show');
		pageYOffset = openPopup();
		setTimeout(function () {
			isOpening = false;
		}, 550);
	}, 50);

}
function closeMenuPopup(menuPopup) {
	menuPopup.removeClass('show');
	setTimeout(function () {
		closePopup(pageYOffset);
		setTimeout(function () {
			menuPopup.removeClass('opened');
		}, 300);
	}, 300);
}

function openPopup() {
	pageYOffset = $(window).scrollTop();
	if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/) && body.height() >= $(window).height()) {
		if(menu != null) {
			menu.css({'border-right': scrollBarWidth + 'px solid transparent'});
		}
		body.css({
			'position': 'fixed',
			'top': -pageYOffset + 'px',
			'border-right': scrollBarWidth + 'px solid transparent'
		});
	} else {
		body.css({
			'position': 'fixed',
			'top': -pageYOffset + 'px'
		});
	}
	return pageYOffset;
}
function closePopup(offsetY) {
	if (!navigator.userAgent.match(/(iPod|iPhone|iPad)/) && body.height() >= $(window).height()) {
		body.css({
			'position': 'static',
			'top': '',
			'border-right': 'none'
		});
		if(menu != null) {
			menu.css({'border-right': 'none'});
		}
	} else {
		body.css({
			'position': 'static',
			'top': ''
		});

	}
	$(window).scrollTop(offsetY);
}

//----------------//
//--- Listeners --//
//----------------//


//---------------------//
//--- Initialization --//
//---------------------//

jQuery('document').ready(function ($) {
	body = $('body');
	menu = $('menu');
});