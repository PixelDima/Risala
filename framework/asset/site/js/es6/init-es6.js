/*global window */
(($ => {
	/*-------------VARIABLES--------------*/
	const win = $(window);
	const doc = $(document);
	const body = $('body');
	const windowWidth = win.width();
	const nav = $(".dima-nav").outerHeight();
	const windowHeight = win.height();
	const isTouch = Modernizr.touch;
	const isTransitions = Modernizr.csstransitions;
	const adBlock = false;
	const html = jQuery('html');

	/*!------------VARIABLES--------------*/


	const ua = window.navigator.userAgent;
	let ie_version;
	const msie = ua.indexOf('MSIE ');
	if (msie > 0) {
		// IE 10 or older => return version number
		ie_version = parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
		$('html').addClass(`dima-ie-detected ie-${ie_version}`);
	}
	const trident = ua.indexOf('Trident/');
	if (trident > 0) {
		// IE 11 => return version number
		const rv = ua.indexOf('rv:');
		ie_version = parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
		$('html').addClass(`dima-ie-detected ie-${ie_version}`);
	}

	const edge = ua.indexOf('Edge/');
	if (edge > 0) {
		// IE 12 => return version number
		ie_version = parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
		$('html').addClass(`dima-ie-detected ie-${ie_version}`);
	}

	function userAgentDetection() {
		const ua = navigator.userAgent.toLowerCase();
		const platform = navigator.platform.toLowerCase();
		const UA = ua.match(/(opera|ie|firefox|chrome|version)[\s\/:]([\w\d\.]+)?.*?(safari|version[\s\/:]([\w\d\.]+)|$)/) || [null, 'unknown', 0];
		const mode = UA[1] == 'ie' && document.documentMode;

		window.gemBrowser = {
			name: (UA[1] == 'version') ? UA[3] : UA[1],
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
			const elements = containerId.querySelectorAll(selector);
			for (let i = 0; i < elements.length; i++) fn(elements[i], i, elements.length);
		}
	}

	function outerWidth(el, includeMargin) {
		let width = el.offsetWidth;
		if (includeMargin) {
			const style = el.currentStyle || getComputedStyle(el);
			width += parseInt(style.marginLeft) + parseInt(style.marginRight);
		}
		return width;
	}

	function outerHeight(el, includeMargin) {
		if (el != null) {
			let height = el.offsetHeight;
			if (includeMargin) {
				const style = el.currentStyle || getComputedStyle(el);
				height += parseInt(style.marginTop) + parseInt(style.marginBottom);
			}
			return height;
		}
	}

	// get the scrollbar width
	function getScrollBarWidth() {
		const outer = jQuery('<div>').css({
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

	const initVideoComponent = (container, classTarget) => {
		getDivChildren(container, classTarget, (el, i) => {
			const width = outerWidth(el);
			// player width, to be defined
			let pWidth;
			const height = outerHeight(el);
			// player height, tbd
			let pHeight;
			const $tubularPlayer = (el.getElementsByTagName('iframe').length === 1) ? el.getElementsByTagName('iframe') : el.getElementsByTagName('video');
			const ratio = (el.getAttribute("data-ratio") !== null) ? Number(el.getAttribute("data-ratio")) : null;
			const heightOffset = 80;
			const widthOffset = heightOffset * ratio;


			// when screen aspect ratio differs from video, video must center and underlay one dimension
			if ($tubularPlayer[0] !== undefined) {
				if ((width / ratio) < height) {
					// if new video height < window height (gap underneath)
					pWidth = Math.ceil((height + heightOffset) * ratio); // get new player width
					$tubularPlayer[0].style.width = `${pWidth + widthOffset}px`;
					$tubularPlayer[0].style.height = `${height + heightOffset}px`;
					//$tubularPlayer[0].style.left = `${((width - pWidth) / 2) - (widthOffset / 2)}px`;
					$tubularPlayer[0].style.top = `-${heightOffset / 2}px`;
					$tubularPlayer[0].style.position = 'absolute';
				} else {
					// new video width < window width (gap to right)
					pHeight = Math.ceil(width / ratio); // get new player height
					$tubularPlayer[0].style.width = `${width + widthOffset}px`;
					$tubularPlayer[0].style.height = `${pHeight + heightOffset}px`;
					//$tubularPlayer[0].style.left = `-${widthOffset / 2}px`;
					$tubularPlayer[0].style.top = `${((height - pHeight) / 2) - (heightOffset / 2)}px`;
					$tubularPlayer[0].style.position = 'absolute';
				}
			}
		});
	};
	/* ! BIG VIDEO */

	const PIXELDIMA = {
		doc,
		body,
		isTouch,
		isTransitions,
		windowWidth,
		windowHeight,
		win,
		initVideoComponent,
		getScrollBarWidth,
		adBlock,
		html,
	};

	// transport
	if (typeof define === 'function' && define.amd) {
		// AMD
		define(PIXELDIMA);
	} else {
		// browser global
		window.PIXELDIMA = PIXELDIMA;
	}
})(jQuery));
