const toggleOnLeftInOutCloseBtn = require('./modules/toggle-on-left-in-out-close-btn/toggle-on-left-in-out-close-btn.js');
const addEventListenerFn = require('./modules/add-event-listener/add-event-listener.js');
const {checkIfSceenIsOnMobileView, cssAnimationClasses} = require('../utils/utils.js');

module.exports = () => {
	const navbarMenu = $('.blog-navbar__position');
	const dropDownOpenBtn = $('.blog-navbar__hamburger');
	const dropDownOpenBtnHorizontalPositonElem = $('.blog-navbar__hamburger__relative-cont');
	const dropDownCloseBtn = $('.blog-navbar__position__menu__close-btn');
	
	const DROPDOWN_OPEN_BTN_DEFAULT_POSITION = 16;
	const GUTTER_FROM_WINDOW_TOP = 6;
	const userInteractionEventsArr = ['ontouchstart', 'click'];
	
	const {smoothSlideDown, smoothSlideUp} = cssAnimationClasses;

	dropDownNavOnMobile();
	dropdownOpenBtnFollowOnScroll();
	// dropdownFollowOnScroll();

	function dropDownNavOnMobile() {
		addEventListenerFn(userInteractionEventsArr, dropDownOpenBtnHorizontalPositonElem, function() {
			let isScreenOnMobileView = checkIfSceenIsOnMobileView();

			if (isScreenOnMobileView) {
				slideDownNav();
				toggleOnLeftInOutCloseBtn(dropDownOpenBtnHorizontalPositonElem);;
			}
		});

		addEventListenerFn(userInteractionEventsArr, dropDownCloseBtn, function() {
			let isScreenOnMobileView = checkIfSceenIsOnMobileView();

			if (isScreenOnMobileView) {
				slideUpNav();
				toggleOnLeftInOutCloseBtn(dropDownOpenBtnHorizontalPositonElem);;
			}
		});
	}

	function slideDownNav() {
		let hasAlreadyBeenAnimatedByUser = navbarMenu.hasClass(smoothSlideUp);

		if (hasAlreadyBeenAnimatedByUser) {
			navbarMenu.removeClass(smoothSlideUp)	
			navbarMenu.addClass(smoothSlideDown)	
		} else {
			navbarMenu.addClass(smoothSlideDown)	
		}
	}

	function slideUpNav() {
		navbarMenu.removeClass(smoothSlideDown)	
		navbarMenu.addClass(smoothSlideUp)	
	}

	function dropdownOpenBtnFollowOnScroll() {
		dropdownOpenBtnFollowScroll();
		let windowPrevPosition = 0;

		$(window).scroll(() => {
			dropdownOpenBtnFollowScroll(windowPrevPosition);
			windowPrevPosition = window.pageYOffset;
		});
	}
	
	function dropdownOpenBtnFollowScroll(windowPrevPosition) {
		const windowsCurrentPosition = window.pageYOffset;

		const isWindowUnderOpenBtnOriginalPosition = windowsCurrentPosition > DROPDOWN_OPEN_BTN_DEFAULT_POSITION;
		const isScreenOnMobileView = checkIfSceenIsOnMobileView();
		if (isScreenOnMobileView && isWindowUnderOpenBtnOriginalPosition) {
			return dropDownOpenBtn.css({ "top": `${window.pageYOffset + GUTTER_FROM_WINDOW_TOP}px` });
		}

		const wasWindowUnderOpenBtnOriginalPosition = windowPrevPosition > DROPDOWN_OPEN_BTN_DEFAULT_POSITION;
		const isWindowNowAtTheTop = windowsCurrentPosition <= DROPDOWN_OPEN_BTN_DEFAULT_POSITION;
		const isWindowGoneBackToTop = isWindowNowAtTheTop && wasWindowUnderOpenBtnOriginalPosition;
		if (isScreenOnMobileView && isWindowGoneBackToTop) {
			return dropDownOpenBtn.css({ "top": `${DROPDOWN_OPEN_BTN_DEFAULT_POSITION}px` });

		}
	}
}