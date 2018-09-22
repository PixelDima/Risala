<?php

/**
 * Custom Control .
 *
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

function dima_new_custom_controls($wp_customize) {
    $controls_path = DIMA_TEMPLATE_PATH . '/framework/functions/admin/customizer/include/controls';

    require_once $controls_path . '/dima_custom_control_textarea.php';
    require_once $controls_path . '/dima_custom_control_slider.php';
    require_once $controls_path . '/dima_custom_control_radio_button_set.php';
    require_once $controls_path . '/dima_custom_control_multi_check.php';
    require_once $controls_path . '/typography/dima_custom_control_typography.php';
    require_once $controls_path . '/dima_custom_control_font_style.php';
    require_once $controls_path . '/dima_custom_control_radio-image.php';
    require_once $controls_path . '/dima_customizer_upsell_section_control.php';
}
add_action('customize_register', 'dima_new_custom_controls');

/**
 *Using tooltips instead of option descriptions in the WordPress Theme Customizer
 */
function dima_theme_customizer_tooltips()
{
    ?>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            wp.customize.bind('ready', function () {
                wp.customize.control.each(function (ctrl, i) {
                    var description = ctrl.container.find('.customize-control-description');
                    if (description.length) {
                        var title = ctrl.container.find('.customize-control-title');
                        var tooltip = description.text();
                        description.hide();
                        title.append('<a class="dima-customize-info-toggel" href="#"><i class="dima-customize-help dashicons dashicons-editor-help" title="' + tooltip + '"></i></a>');
                    }
                });
                jQuery('.dima-customize-info-toggel').click(function (ctrl, i) {
                    var description = jQuery(this).parent().parent().find('.customize-control-description');
                    description.toggle(200);
                });
            });
        });
    </script>
    <?php
}
add_action('customize_controls_print_scripts', 'dima_theme_customizer_tooltips');
