jQuery(document).ready(function ($) {

    //------------------------------------------
    //# Add Separator
    //------------------------------------------
    dima_customizer_separator('dima_header_navbar_text_align');
    dima_customizer_separator('dima_navbar_option_address_text_topbar');

    function dima_customizer_separator(elm) {
        var subTitle = '<li class="customize-control dima-customize-control-subtitle">' +
            '<span class="dima-customize-subtitle">' +
            '</span>' +
            '</li>';

        $('#customize-control-' + elm).before(subTitle);

    }

    //------------------------
    //# Radio Image
    //------------------------
    $('.customize-control-radio-image label').click(function () {
        var list_checkbox = $(this).find('input');
        $(this).parent().find('.dima_radio_image_checkbox').removeClass("dima_radio_image_checkbox");
        $(this).addClass('dima_radio_image_checkbox');
        if (list_checkbox.is(':checked')) {
            list_checkbox.prop('checked', false);
        } else {
            list_checkbox.prop('checked', true);
        }
        list_checkbox.change();
    });


    //------------------------
    //# Alpha color
    //------------------------
    $('.dima-color-control').each(function () {
        var $control = $(this), palette = null;
        //var value = $control.val().replace(/\s+/g, '');
        // Manage Palettes
        var palette_input = $control.attr('data-palette');
        if (palette_input == 'false' || palette_input == false) {
            palette = false;
        } else if (palette_input == 'true' || palette_input == true) {
            palette = true;
        } else {
            palette = $control.attr('data-palette').split(",");
        }
        $control.wpColorPicker({ // change some things with the color picker
            clear: function (event, ui) {
                // TODO reset Alpha Slider to 100
            },
            change: function (event, ui) {
                // send ajax request to wp.customizer to enable Save & Publish button
                var _new_value = $control.val();
                var key = $control.attr('data-customize-setting-link');
                wp.customize(key, function (obj) {
                    obj.set(_new_value);
                });
                // change the background color of our transparency container whenever a color is updated
                var $transparency = $control.parents('.wp-picker-container:first').find('.transparency');
                // we only want to show the color at 100% alpha
                $transparency.css('backgroundColor', ui.color.toString('no-alpha'));
            },
            palettes: palette // remove the color palettes
        });

    });


    //------------------------
    //# Font Style
    //------------------------
    $('span.dima_customize_font_style').click(function () {
        var list_checkbox = $(this).find('input');
        $(this).toggleClass('dima_font_style_checkbox');
        if (list_checkbox.is(':checked')) {
            list_checkbox.prop('checked', false);
        } else {
            list_checkbox.prop('checked', true);
        }
        list_checkbox.change();
    });

    $('input.dima_font_style_checkbox[type=checkbox]').live('change', function () {

        var $_this = $(this),
            $options_list = $_this.closest('span').siblings('input.dima_customize_font_style_list'),
            value = $_this.val(),
            current_val = $options_list.val(),
            values = (current_val != 'false') ? current_val.split('|') : [],
            query = $.inArray(value, values),
            result = '';

        if ($_this.prop('checked') == true) {
            if (current_val.length) {
                if (query < 0) {
                    values.push(value);
                    result = values.join('|');
                }
            } else {
                result = value;
            }
        } else {

            if (current_val.length !== 0) {
                if (query >= 0) {
                    values.splice(query, 1);
                    result = values.join('|');
                } else {
                    result = current_val;
                }
            }
        }
        $options_list.val(result).trigger('change');
    });

});