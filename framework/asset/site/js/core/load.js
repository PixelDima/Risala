/**
 * Content all loading function
 */
(function ($) {

    $(document).ready(function () {
        /****/
        var _height = $(window).height();
        var $loader = $(".loader-progress");

        let loaderFullOpen = [{
            e: $(".loader-line-left"),
            p: {
                height: (_height - 40),
            }
            ,
            o: {
                delay: 0,
                duration: 550,
                display: "block",
            }
        }, {
            e: $loader,
            p: {
                height: '100%',
            }
            ,
            o: {
                delay: 0,
                duration: 0,
                display: "block",
            }
        }, {
            e: $loader,
            p: {
                width: '100%',
            }
            ,
            o: {
                delay: 0,
                duration: 950,
                display: "block",
            }
        }, {
            e: $(".loader-line-right"),
            p: {
                height: 0,
            }
            ,
            o: {
                delay: 0,
                duration: 750,
                display: "block",
            }
        }, {
            e: $(".loader-sketched"),
            p: {
                opacity: 0
            }
            ,
            o: {
                delay: 0,
                duration: 350,
                display: "none"
            }
        }
        ];

        /**
         * [load]
         */
        $(window).load(function () {
            $('.loader').velocity.RunSequence(loaderFullOpen);
        });

    });

})(jQuery);

