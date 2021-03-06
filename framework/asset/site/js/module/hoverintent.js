/*!
 * hoverIntent v1.8.1 // 2014.06.29 // jQuery v1.9.1+
 * http://cherne.net/brian/resources/jquery.hoverIntent.html
 *
 * You may use hoverIntent under the terms of the MIT license. Basically that
 * means you are free to use hoverIntent as long as this header is left intact.
 * Copyright 2007, 2014 Brian Cherne
 */
!function(e){e.fn.hoverIntent=function(t,n,o){var r={interval:100,sensitivity:6,timeout:0};r="object"==typeof t?e.extend(r,t):e.isFunction(n)?e.extend(r,{over:t,out:n,selector:o}):e.extend(r,{over:t,out:t,selector:n});var v,i,u,s,h=function(e){v=e.pageX,i=e.pageY},I=function(t,n){return n.hoverIntent_t=clearTimeout(n.hoverIntent_t),Math.sqrt((u-v)*(u-v)+(s-i)*(s-i))<r.sensitivity?(e(n).off("mousemove.hoverIntent",h),n.hoverIntent_s=!0,r.over.apply(n,[t])):(u=v,s=i,n.hoverIntent_t=setTimeout(function(){I(t,n)},r.interval),void 0)},a=function(e,t){return t.hoverIntent_t=clearTimeout(t.hoverIntent_t),t.hoverIntent_s=!1,r.out.apply(t,[e])},c=function(t){var n=e.extend({},t),o=this;o.hoverIntent_t&&(o.hoverIntent_t=clearTimeout(o.hoverIntent_t)),"mouseenter"===t.type?(u=n.pageX,s=n.pageY,e(o).on("mousemove.hoverIntent",h),o.hoverIntent_s||(o.hoverIntent_t=setTimeout(function(){I(n,o)},r.interval))):(e(o).off("mousemove.hoverIntent",h),o.hoverIntent_s&&(o.hoverIntent_t=setTimeout(function(){a(n,o)},r.timeout)))};return this.on({"mouseenter.hoverIntent":c,"mouseleave.hoverIntent":c},r.selector)}}(jQuery);
