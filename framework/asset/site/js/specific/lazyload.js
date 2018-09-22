"use strict";

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

/*! Lazy Load 2.0.0-beta.2 - MIT license - Copyright 2007-2017 Mika Tuupola */
!function (t, e) {
  "object" == (typeof exports === "undefined" ? "undefined" : _typeof(exports)) ? module.exports = e(t) : "function" == typeof define && define.amd ? define([], e(t)) : t.LazyLoad = e(t);
}("undefined" != typeof global ? global : undefined.window || undefined.global, function (t) {
  "use strict";
  function e(t, e) {
    this.settings = r(s, e || {}), this.images = t || document.querySelectorAll(this.settings.selector), this.observer = null, this.init();
  }var s = { src: "data-src", srcset: "data-srcset", selector: ".lazyload" },
      r = function r() {
    var t = {},
        e = !1,
        s = 0,
        o = arguments.length;"[object Boolean]" === Object.prototype.toString.call(arguments[0]) && (e = arguments[0], s++);for (; s < o; s++) {
      !function (s) {
        for (var _o in s) {
          Object.prototype.hasOwnProperty.call(s, _o) && (e && "[object Object]" === Object.prototype.toString.call(s[_o]) ? t[_o] = r(!0, t[_o], s[_o]) : t[_o] = s[_o]);
        }
      }(arguments[s]);
    }return t;
  };if (e.prototype = { init: function init() {
      if (!t.IntersectionObserver) return void this.loadImages();var e = this,
          s = { root: null, rootMargin: "0px", threshold: [0] };this.observer = new IntersectionObserver(function (t) {
        t.forEach(function (t) {
          if (t.intersectionRatio > 0) {
            e.observer.unobserve(t.target);var _s = t.target.getAttribute(e.settings.src),
                _r = t.target.getAttribute(e.settings.srcset);"img" === t.target.tagName.toLowerCase() ? (_s && (t.target.src = _s), _r && (t.target.srcset = _r)) : t.target.style.backgroundImage = "url(" + _s + ")";
          }
        });
      }, s), this.images.forEach(function (t) {
        e.observer.observe(t);
      });
    }, loadAndDestroy: function loadAndDestroy() {
      this.settings && (this.loadImages(), this.destroy());
    }, loadImages: function loadImages() {
      if (!this.settings) return;var t = this;this.images.forEach(function (e) {
        var s = e.getAttribute(t.settings.src),
            r = e.getAttribute(t.settings.srcset);"img" === e.tagName.toLowerCase() ? (s && (e.src = s), r && (e.srcset = r)) : e.style.backgroundImage = "url(" + s + ")";
      });
    }, destroy: function destroy() {
      this.settings && (this.observer.disconnect(), this.settings = null);
    } }, t.lazyload = function (t, s) {
    return new e(t, s);
  }, t.jQuery) {
    var _s2 = t.jQuery;_s2.fn.lazyload = function (t) {
      return t = t || {}, t.attribute = t.attribute || "data-src", new e(_s2.makeArray(this), t), this;
    };
  }return e;
});