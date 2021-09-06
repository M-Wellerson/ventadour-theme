//-------------------------//
//------ SCRIPT NAME ------//
//--- Created by RSW --//
//-------------------------//
var pageYOffset;
var body;

var menuAction,
    menuPopup,
    menuWrapper,
    menuSubWrapper,
    menuSubAction,
    menuSubActionFooter;
var isOpening;


// Menu Bar
function showMenu() {
    var menu = $('menu');
    menu.removeClass('hide');
    setTimeout(function () {
        menu.addClass('slowTop')
    }, 300);

    var headerBorder = $('.home__header_border');
    if (headerBorder.length > 0 && headerBorder.hasClass('show')) {
        headerBorder.removeClass('show');
    }

}
function hideMenu() {
    var menu = $('menu');
    menu.addClass('hide');
    setTimeout(function () {
        menu.removeClass('slowTop')
    }, 300);

    var headerBorder = $('.home__header_border');
    if (headerBorder.length > 0 && !headerBorder.hasClass('show')) {
        headerBorder.addClass('show');
    }
}
function isMenuShowing() {
    var menu = $('menu');
    return !menu.hasClass('hide');
}
function checkMenuVisibility(scrollTop) {
    menuPopup = $('.menu__popup');
    var windowHeight = $(window).height();
    if (scrollTop > 2 * windowHeight / 4 || !$('.wrapper').hasClass('home') || menuPopup.hasClass('opened')) {
        if (!isMenuShowing()) showMenu();
    } else {
        if (isMenuShowing()) hideMenu();
    }
}


function toggleSubMenu() {
    var menuSub = $('.menu__popup_aime');
    menuSub.toggleClass('show');

}

jQuery('document').ready(function ($) {

    //----------------//
    //--- Variables --//
    //----------------//


    menuAction = $('.menu__action');
    menuPopup = $('.menu__popup');
    menuWrapper = $('.menu__popup_wrapper');

    menuSubAction = $('.menu__sub_action');
    menuSubActionFooter = $('.menu__sub_action_footer');
    menuSubWrapper = $('.menu__popup_aime');

    isOpening = false;


    //----------------//
    //--- Functions --//
    //----------------//


    //----------------//
    //--- Listeners --//
    //----------------//


    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();
        checkMenuVisibility(scrollTop);
    });

    //diminuer la taille du logo au scroll
    $(window).on('scroll', function () {
        var scrollTop = $(this).scrollTop();
        if (scrollTop != 0) {
            $('.menu__item:nth-of-type(3) img').css('width', '75%');
        }else{
            $('.menu__item:nth-of-type(3) img').css('width', '100%');
        }
    });

    menuAction.on('click', function () {
        if (!menuPopup.hasClass('opened') && !isOpening) {
            openMenuPopup(menuPopup);
        } else {
            closeMenuPopup(menuPopup);
        }
    });
    menuPopup.on('click', function (e) {
        console.log(isOpening);
        if (!isOpening) {
            if ($(e.target).is('.menu__popup') && !$(e.target).is($('.menu__popup_wrapper').find('*')) || $(e.target).is('.menu__popup') && !$(e.target).is($('.menu__popup_aime').find('*')) || $(e.target).is('.menu__popup_close') || $(e.target).is('.menu__sub_action_footer')) {
                console.log(menuSubWrapper.hasClass('opened'));
                if (menuSubWrapper.hasClass('show')) {
                    toggleSubMenu();
                    setTimeout(function () {
                        closeMenuPopup(menuPopup);
                    }, 100);
                } else {
                    closeMenuPopup(menuPopup);
                }
                isOpening = false;
            }
        }
    });

    menuSubAction.on('click', function () {
        toggleSubMenu();
    });
    menuSubActionFooter.on('click', function () {
        menuAction.trigger('click');
        setTimeout(function () {
            toggleSubMenu();
        }, 500);

        // toggleSubMenu();
    });
    //---------------------//
    //--- Initialization --//
    //---------------------//
    function init() {
        checkMenuVisibility($(window).scrollTop());
        menuAction = $('.menu__action');
        menuPopup = $('.menu__popup');
        menuWrapper = $('.menu__wrapper');

        isOpening = false;

        body = $('body');
    }

    init();
});