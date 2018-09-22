'use strict';

(function ($) {
	var images = $("img.js-lazy-image");

	if (pxdm_js.is_lazy_image && images.length > 0) {
		images.lazyload();
	}

	$(document).ready(function () {
		this.PIXELDIMA = PIXELDIMA || {}; //Main Namespace

		/**
   * [ Main Module (PixelDima) ]
   */
		PIXELDIMA.MENU = function () {
			/**
    * Drop Down Menus
    */
			var DimaDropDown = function DimaDropDown() {
				var desk_nav_menu = $('.desk-nav ul.dima-nav, .desk-nav ul.dima-nav-tag');
				var desk_childe_li = 'li.menu-item-has-children';
				var $ul_li_li = $("ul.dima-nav li li.menu-item-has-children"); // Sub-menu
				var $ul_li = $(".desk-nav ul.dima-nav > li.menu-item-has-children"); // Sub-menu
				/**
     * show submenu lv2+ on the left or the right depand on browser Viwe port
     */
				$ul_li_li.hover(function () {
					var $ul_children = $(this).children('ul').length;
					/**
      * The subemenu has a subemenu (child)
      */
					if ($ul_children === 1) {
						var parent = $(this);
						var child_menu = $(this).children('ul');
						var $parent_wdith = $(parent).width() + 2;
						var $window_wdith = $(window).width() - 30;

						var pos = $(parent).offset().left;
						var css_1 = {
							'left': '-' + $parent_wdith + 'px'
						};
						var css_2 = {
							'left': $parent_wdith + 'px'
						};
						if (pxdm_js.is_rtl) {
							css_1 = {
								'right': '-' + $parent_wdith + 'px'
							};
							css_2 = {
								'right': $parent_wdith + 'px'
							};
							pos = $(window).width() - ($(parent).offset().left + $(parent).outerWidth());
						}

						if (pos + $(parent).width() + $(child_menu).width() > $window_wdith) {
							$(child_menu).css(css_1);
						} else {
							$(child_menu).css(css_2);
						}
					}
				});

				/**
     * show submenu lv1 on the left or the right depand on browser Viwe port
     */
				$ul_li.hover(function () {
					if ($(this).hasClass('dima-mega-menu')) {
						return;
					}
					var $ul_children = $(this).children('ul').length;
					if ($ul_children === 1) {
						var parent = $(this);
						var child_menu = $(this).children('ul');
						var $window_wdith = $(window).width() - 30;
						var pos = $(parent).offset().left;
						if (pxdm_js.is_rtl) {
							pos = $(window).width() - ($(parent).offset().left + $(parent).outerWidth());
							if (pos + $(parent).width() + $(child_menu).width() > $window_wdith) {
								$(child_menu).css({
									"left": "-2px",
									"right": "auto"
								});
							} else {
								$(child_menu).css({
									"right": "-2px",
									"left": "auto"
								});
							}
						} else {
							if (pos + $(parent).width() + $(child_menu).width() > $window_wdith) {
								$(child_menu).css({
									"right": "-2px",
									"left": "auto"
								});
							} else {
								$(child_menu).css({
									"left": "-2px",
									"right": "auto"
								});
							}
						}
					}
				});

				/**
     * @param el
     */
				var menu = function menu(el) {
					this.target = el;
					this.target.hoverIntent({
						over: this.reveal,
						timeout: 150, // simple delay, in milliseconds, before the "out" function is called.
						out: this.conceal,
						selector: desk_childe_li
					});
				};

				// Show
				menu.prototype.reveal = function () {
					var target = $(this).children('.sub-menu');
					if ($(this).children('.sub-menu').parent().hasClass('dima-megamenu-item')) {
						return;
					}

					if (target.hasClass('is_open')) {
						target.velocity('stop').velocity('reverse');
					} else {
						target.addClass('is_open');
						target.velocity('stop').velocity('transition.slideUpIn', {
							duration: 250,
							delay: 0,
							visibility: "visible",
							display: 'undefined',
							complete: function complete() {
								target.addClass('is_open');
							}
						});
					}
				};

				// Hide
				menu.prototype.conceal = function () {
					var target = $(this).children('.sub-menu');
					if ($(this).children('.sub-menu').parent().hasClass('dima-megamenu-item')) {
						return;
					}
					target.velocity('stop').velocity('transition.fadeOut', {
						duration: 100,
						delay: 0,
						visibility: "hidden",
						display: 'undefined',
						complete: function complete() {
							target.removeClass('is_open');
						}
					});
				};
				var $menu = $(desk_nav_menu);
				new menu($menu);
			};

			var mobileNav = function mobileNav() {
				var $dima_nav = $(".mobile-nav .dima-nav-tag");
				var $btn = $(".mobile-nav a.dima-btn-nav");
				/**
     * [Click Mobile button]
     */
				$btn.click(function (event) {
					event.preventDefault();
					if ($btn.hasClass("btn-active")) {
						$dima_nav.velocity("stop").velocity("transition.slideUpOut", 300);
						$btn.removeClass("btn-active");
					} else {
						$btn.addClass("btn-active");
						$dima_nav.velocity("stop").velocity("transition.slideDownIn", 700);
					}
				});
				$('.mobnav-subarrow').click(function () {
					$(this).parent().toggleClass("xpopdrop");
				});
			};

			var MobilesubMenu = function MobilesubMenu() {
				var dima_sub_icon = $('.mobile-nav .sub-icon');
				var dima_active = "dima-active";
				var submenu = dima_sub_icon.find(".sub-menu");

				dima_sub_icon.find(' > a').each(function (n) {
					$(this).after('<div class="dima-sub-toggle" data-toggle="collapse" data-target=".sub-menu.sm-' + n + '"><span class="sub-icon">\n\t\t\t\t\t<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">\n\t\t\t\t\t<path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>\n\t\t\t\t\t<path d="M0 0h24v24H0z" fill="none"/>\n\t\t\t\t\t</svg>\n\t\t\t\t\t</span></div>');
				});

				submenu.each(function (n) {
					$(this).addClass('sm-' + n + ' collapse');
				});

				//
				$(".dima-sub-toggle").on("click", function (n) {
					n.preventDefault();
					$(this).toggleClass(dima_active).closest("li").toggleClass(dima_active);
				});

				$(".mobile-nav .dima-navbar .dima-nav-tag .dima-nav li.menu-item-has-children > a").on("click", function (n) {
					n.preventDefault();
					$(this).parent().find(">div.dima-sub-toggle").click();
				});
			};

			var RisalaSearch = function RisalaSearch() {
				if ($(".gloabl-search-input").length) {
					var $search_widget = $(".gloabl-search-input"),
					    $widget_icon = $search_widget.find(".search-icon a"),
					    widget_input = $search_widget.find(".search-field").find(".search-input"),
					    widget_form = $search_widget.find("form");
					$widget_icon.on("click", function (e) {
						e.preventDefault();
						if (widget_input.val().trim().length > 0) {
							widget_form.submit();
						}
					});
				}

				if ($(".header-search-input").length) {

					var $search_input = $(".header-search-input");
					$search_input.find(".search-input").val("");

					$search_input.each(function () {
						var $this = $(this);
						var $s_icon = $this.find(" .search-icon a"),
						    $_s_icon = $this.find(".search-icon"),
						    $search_field = $this.find(".search-field"),
						    _form = $this.find("form"),
						    _input = $search_field.find(".search-input");
						$s_icon.on("click", function (e) {
							e.preventDefault();
							if (_input.val().trim().length > 0) {
								_form.submit();
							}

							if ($search_field.hasClass('is_open')) {
								$search_field.find('.search-input').focus();
							} else {
								$_s_icon.velocity('stop').velocity({
									scale: [0.8],
									opacity: '0.5',
									delay: 0,
									duration: 150
								});

								$search_field.velocity('stop').velocity('transition.fadeIn', {
									duration: 250,
									delay: 0,
									visibility: 'visible',
									opacity: '1',
									complete: function complete() {
										$(this).addClass('is_open');
										$(this).find('.search-input').focus();
									}
								});
							}
						});

						$search_field.find('.search-input').on("blur", function (t) {
							if ($search_field.hasClass('is_open')) {
								$search_field.velocity('stop').velocity('reverse', { visibility: 'hidden' });
								$_s_icon.velocity('stop').velocity('reverse');
								$search_field.removeClass('is_open');
							}
						});

						$search_field.find('.search-input').on("keydown", function (t) {
							if (27 == t.keyCode && $search_field.hasClass('is_open')) {
								$search_field.velocity('stop').velocity('reverse', { visibility: 'hidden' });
								$_s_icon.velocity('stop').velocity('reverse');
								$search_field.removeClass('is_open');
							}
						});
					});
				}
			};

			var myMenu = function myMenu() {
				RisalaSearch();
				DimaDropDown();
				MobilesubMenu();
				mobileNav();
			};

			/**
    * Setup Function
    */
			var init = function init() {
				myMenu();
				$("html").imagesLoaded(); // Detect when images have been loaded.
			};

			return {
				init: init
			};
		}();

		PIXELDIMA.MEDIA = function () {
			var fitVids = function fitVids() {
				$('.page,.post,.featured-image').fitVids();
			};
			var init = function init() {
				fitVids();
			};
			return {
				init: init
			};
		}();
		// runs callback functions
		PIXELDIMA.PIXELDIMA_READY = function () {
			var init = function init() {
				PIXELDIMA.MENU.init();
				PIXELDIMA.MEDIA.init();
			};
			return {
				init: init
			};
		}();

		/**
   * Call Our Setups Functions
   */
		PIXELDIMA.PIXELDIMA_READY.init();
	});
	/* End of document ready*/
})(jQuery);