jQuery('document').ready(function ($) {

    var homeTabSelection = $('.tableau__selection .text');

    homeTabSelection.on('click', function () {
        if(!$(this).hasClass('active')) {
            $('.tableau__selection .active').removeClass('active');
            $(this).addClass('active');

            var valueAct = $('.value.active');
            var valueToAct = $('.value').not('.active');
            valueAct.addClass('hide');

			setTimeout(function () {
				valueToAct.addClass('show');
				setTimeout(function () {
					valueAct.removeClass('active');
					valueAct.removeClass('hide');
					valueToAct.addClass('active');
					valueToAct.removeClass('show');
				}, 50);
			}, 300);
		}
	});

	function initializeSkrollr() {
		skrollr.init({
			forceHeight: false,
			mobileCheck: function () {
				//hack - forces mobile version to be off
				return false;
			}
		});
	}

	function init() {
		if($('.wrapper').hasClass('home') || $('.wrapper').hasClass('portfolio') || $('.wrapper').hasClass('ardeche')) {
			initializeSkrollr();
		}
		if($('.anchorLink').length > 0) {
			attachAnchorLink($('.anchorLink'));
		}

	}

	init();
});