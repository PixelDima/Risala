'use strict';

/*global window */
(function ($) {
	/*-------------VARIABLES--------------*/
	var win = $(window);
	var doc = $(document);
	var body = $('body');
	var windowWidth = win.width();
	var nav = $(".dima-nav").outerHeight();
	var windowHeight = win.height();
	var isTouch = Modernizr.touch;
	var isTransitions = Modernizr.csstransitions;
	var adBlock = false;
	var html = jQuery('html');

	/*!------------VARIABLES--------------*/

	var ua = window.navigator.userAgent;
	var ie_version = void 0;
	var msie = ua.indexOf('MSIE ');
	if (msie > 0) {
		// IE 10 or older => return version number
		ie_version = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
		$('html').addClass('dima-ie-detected ie-' + ie_version);
	}
	var trident = ua.indexOf('Trident/');
	if (trident > 0) {
		// IE 11 => return version number
		var rv = ua.indexOf('rv:');
		ie_version = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
		$('html').addClass('dima-ie-detected ie-' + ie_version);
	}

	var edge = ua.indexOf('Edge/');
	if (edge > 0) {
		// IE 12 => return version number
		ie_version = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
		$('html').addClass('dima-ie-detected ie-' + ie_version);
	}

	function userAgentDetection() {
		var ua = navigator.userAgent.toLowerCase();
		var platform = navigator.platform.toLowerCase();
		var UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0];
		var mode = UA[1] == 'ie' && document.documentMode;

		window.gemBrowser = {
			name: UA[1] == 'version' ? UA[3] : UA[1],
			version: UA[2],
			platform: {
				name: ua.match(/ip(?:ad|od|hone)/) ? 'ios' : (ua.match(/(?:webos|android)/) || platform.match(/mac|win|linux/) || ['other'])[0]
			}
		};
	}

	userAgentDetection();

	/* BIG VIDEO*/
	function getDivChildren(containerId, selector, fn) {
		if (containerId !== null) {
			var elements = containerId.querySelectorAll(selector);
			for (var i = 0; i < elements.length; i++) {
				fn(elements[i], i, elements.length);
			}
		}
	}

	function outerWidth(el, includeMargin) {
		var width = el.offsetWidth;
		if (includeMargin) {
			var style = el.currentStyle || getComputedStyle(el);
			width += parseInt(style.marginLeft) + parseInt(style.marginRight);
		}
		return width;
	}

	function outerHeight(el, includeMargin) {
		if (el != null) {
			var height = el.offsetHeight;
			if (includeMargin) {
				var style = el.currentStyle || getComputedStyle(el);
				height += parseInt(style.marginTop) + parseInt(style.marginBottom);
			}
			return height;
		}
	}

	// get the scrollbar width
	function getScrollBarWidth() {
		var outer = jQuery('<div>').css({
			visibility: 'hidden',
			width: 100,
			overflow: 'scroll'
		}).appendTo('body'),
		    widthHasScroll = jQuery('<div>').css({
			width: '100%'
		}).appendTo(outer).outerWidth();

		outer.remove();
		return 100 - widthHasScroll;
	};

	var initVideoComponent = function initVideoComponent(container, classTarget) {
		getDivChildren(container, classTarget, function (el, i) {
			var width = outerWidth(el);
			// player width, to be defined
			var pWidth = void 0;
			var height = outerHeight(el);
			// player height, tbd
			var pHeight = void 0;
			var $tubularPlayer = el.getElementsByTagName('iframe').length === 1 ? el.getElementsByTagName('iframe') : el.getElementsByTagName('video');
			var ratio = el.getAttribute("data-ratio") !== null ? Number(el.getAttribute("data-ratio")) : null;
			var heightOffset = 80;
			var widthOffset = heightOffset * ratio;

			// when screen aspect ratio differs from video, video must center and underlay one dimension
			if ($tubularPlayer[0] !== undefined) {
				if (width / ratio < height) {
					// if new video height < window height (gap underneath)
					pWidth = Math.ceil((height + heightOffset) * ratio); // get new player width
					$tubularPlayer[0].style.width = pWidth + widthOffset + 'px';
					$tubularPlayer[0].style.height = height + heightOffset + 'px';
					//$tubularPlayer[0].style.left = `${((width - pWidth) / 2) - (widthOffset / 2)}px`;
					$tubularPlayer[0].style.top = '-' + heightOffset / 2 + 'px';
					$tubularPlayer[0].style.position = 'absolute';
				} else {
					// new video width < window width (gap to right)
					pHeight = Math.ceil(width / ratio); // get new player height
					$tubularPlayer[0].style.width = width + widthOffset + 'px';
					$tubularPlayer[0].style.height = pHeight + heightOffset + 'px';
					//$tubularPlayer[0].style.left = `-${widthOffset / 2}px`;
					$tubularPlayer[0].style.top = (height - pHeight) / 2 - heightOffset / 2 + 'px';
					$tubularPlayer[0].style.position = 'absolute';
				}
			}
		});
	};
	/* ! BIG VIDEO */

	var PIXELDIMA = {
		doc: doc,
		body: body,
		isTouch: isTouch,
		isTransitions: isTransitions,
		windowWidth: windowWidth,
		windowHeight: windowHeight,
		win: win,
		initVideoComponent: initVideoComponent,
		getScrollBarWidth: getScrollBarWidth,
		adBlock: adBlock,
		html: html
	};

	// transport
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(PIXELDIMA);
	} else {
		// browser global
		window.PIXELDIMA = PIXELDIMA;
	}
})(jQuery);