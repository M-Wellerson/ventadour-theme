//----------------------------//
//------ menuMouseHover ------//
//------ Created by RSW ------//
//----------------------------//

/*
 * Add class navItems to all items of the menu
 * Add class navSelector to the selector
 * Set up the offsetSelector to the right value depending on navItems height / position in init() function
 *
 * In CSS : specify classes navItems, active for the active state and navSelector
 *
 * Enjoy ! :)
 */

jQuery('document').ready(function ($) {

	//----------------//
	//--- Variables --//
	//----------------//
	var navItems = $('.navItems'),
		navItemActive = '.navItems.active',
		navSelector = $('.navSelector');
	var mouseInNav = false;
	var offsetSelector;


	//----------------//
	//--- Functions --//
	//----------------//
	var setNavSelectorPosition = function(item) {
		navSelector.css({
			'opacity': 1,
			'top': $(item).position().top + offsetSelector
		})
	};

	var mouseEnterNavItem = function (item) {
		mouseInNav = true;
		setNavSelectorPosition(item);
	};

	var mouseLeaveNavItem = function (item) {
		mouseInNav = false;
		if (!item.hasClass('active')) {
			setTimeout(function () {
				if (!mouseInNav) {
					setNavSelectorPosition(navItemActive);
				}
			}, 500);
		}
	};

	//----------------//
	//--- Listeners --//
	//----------------//
	//-- NAVIGATION
	navItems.on('mouseenter', function() {
		mouseEnterNavItem($(this));
	});
	navItems.on('mouseleave', function() {
		mouseLeaveNavItem($(this));
	});

	//---------------------//
	//--- Initialization --//
	//---------------------//
	function init() {
		if(navItems.length > 0) {
			offsetSelector =  (navItems.height() / 3);
			setNavSelectorPosition($(navItemActive));
		}
	}

	init();
});