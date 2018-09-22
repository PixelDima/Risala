(function ($) {

    /**
     * Site Layout
     */

    wp.customize('dima_content_width', function (value) {
        value.bind(function (to) {
            $('.container').css('width', to + "%");
            $('.boxed .all_content').css('width', to + "%");
            $('.boxed .fix_nav.fixed').css('width', to + "%");
        });
    });

    wp.customize('dima_sidebar_width', function (value) {
        value.bind(function (to) {
            var $var_container_max_width = $('.dima-main .container').width();
            var $mrg = 30;
            if (pxdm_js.is_rtl) {
                $('body .left-content-sidebar-active .dima-sidebar').css('margin-left', ($mrg * 100) / $var_container_max_width + "%");
                $('body .right-content-sidebar-active .dima-sidebar').css('margin-right', ($mrg * 100) / $var_container_max_width + "%");
            } else {
                $('body .left-content-sidebar-active .dima-sidebar').css('margin-right', ($mrg * 100) / $var_container_max_width + "%");
                $('body .right-content-sidebar-active .dima-sidebar').css('margin-left', ($mrg * 100) / $var_container_max_width + "%");
            }
            $('body .dima-sidebar').css('width', (to * 100) / $var_container_max_width + "%");
            $('body .dima-container').css('width', (($var_container_max_width - to - $mrg) * 100) / $var_container_max_width + "%");
        });
    });

    wp.customize('dima_content_max_width', function (value) {
        value.bind(function (to) {
            $('.container').css('max-width', to + "px");
        });
    });

})(jQuery);