<?php
/**
 * Class and Function List:
 * Function list:
 * - navbar_padding()
 * - text_style()
 * Classes list:
 */

/**
 * Genirated CSS
 *
 * @package PHP-CSS
 * @subpackage var
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

/**
 * @param        $styles
 * @param string $important
 *
 * @return string
 */
function dima_text_style($styles, $important = '')
{
    // Prepare variable
    $font_styles = "";

    if ('' !== $styles && false !== $styles) {
        // Convert string into array
        $styles_array = explode('|', $styles);

        // If $important is in use, give it a space
        if ($important && '' !== $important) {
            $important = " " . $important;
        }

        // Use in_array to find values in strings. Otherwise, display default text

        // Font weight
        if (in_array('bold', $styles_array)) {
            $font_styles .= "font-weight: bold{$important}; ";
        } else {
            $font_styles .= "font-weight: normal{$important}; ";
        }

        // Font style
        if (in_array('italic', $styles_array)) {
            $font_styles .= "font-style: italic{$important}; ";
        } else {
            $font_styles .= "font-style: normal{$important}; ";
        }

        // Text-transform
        if (in_array('uppercase', $styles_array)) {
            $font_styles .= "text-transform: uppercase{$important}; ";
        } else {
            $font_styles .= "text-transform: inherit{$important}; ";
        }

        // Text-decoration
        if (in_array('underline', $styles_array)) {
            $font_styles .= "text-decoration: underline{$important}; ";
        } else {
            $font_styles .= "text-decoration: none{$important}; ";
        }
    }

    return esc_html($font_styles);
}

$var_container_max_width = $var_container_width = $var_dima_sidebar_width = '';

$var_container_width = dima_helper::dima_get_option('dima_content_width');
$var_container_max_width = dima_helper::dima_get_option('dima_content_max_width');
$var_dima_sidebar_width = (float) dima_helper::dima_get_option('dima_sidebar_width');
$var_header_logo_width = dima_helper::dima_get_option('dima_header_logo_width');

$var_main_color = dima_helper::dima_get_option('dima_main_color');
$var_dima_body_background_color = dima_helper::dima_get_option('dima_body_background_color');
$var_dima_body_background_color_clean = dima_helper::dima_get_option('dima_body_background_color_clean');

/* -----------Typo----------- */
$var_body_text_color = dima_helper::dima_get_option('dima_body_text_color');
$var_body_link_color = dima_helper::dima_get_option('dima_body_link_color');
$var_body_link_color_hover = dima_helper::dima_get_option('dima_body_link_color_hover');

$var_body_font_size = dima_helper::dima_get_option('dima_body_text_size');
$var_body_font_weights = dima_helper::dima_get_option('dima_body_weights_list');
$var_body_font_weight_selected = dima_helper::dima_get_option('dima_body_weight_selected');
$var_body_font_family = dima_helper::dima_get_option('dima_body_font_list');

//HEADER 1
$var_heading_font_uppercase = dima_helper::dima_get_option('dima_heading_text_style');
$var_heading_font_color = dima_helper::dima_get_option('dima_heading_text_color');
$var_heading_font_siz = dima_helper::dima_get_option('dima_h_all_text_size');
$var_heading_letter_spacing = dima_helper::dima_get_option('dima_heading_letter_spacing');
$var_heading_font_Weights = dima_helper::dima_get_option('dima_heading_weights_list');
$var_heading_font_selected = dima_helper::dima_get_option('dima_heading_weight_selected');
$var_heading_font_family = dima_helper::dima_get_option('dima_heading_font_list');

//HEADER 1
$var_heading_font_uppercase_1 = dima_helper::dima_get_option('dima_heading_text_style_1');
$var_heading_font_color_1 = dima_helper::dima_get_option('dima_heading_text_color_1');
$var_heading_font_siz_1 = dima_helper::dima_get_option('dima_h1_text_size');
$var_heading_letter_spacing_1 = dima_helper::dima_get_option('dima_heading_letter_spacing_1');
$var_heading_font_Weights_1 = dima_helper::dima_get_option('dima_heading_weights_list_1');
$var_heading_font_selected_1 = dima_helper::dima_get_option('dima_heading_weight_selected_1');
$var_heading_font_family_1 = dima_helper::dima_get_option('dima_heading_font_list_1');
//HEADER 2
$var_heading_font_uppercase_2 = dima_helper::dima_get_option('dima_heading_text_style_2');
$var_heading_font_family_2 = dima_helper::dima_get_option('dima_heading_font_list_2');
$var_heading_font_siz_2 = dima_helper::dima_get_option('dima_h2_text_size');
$var_heading_font_Weights_2 = dima_helper::dima_get_option('dima_heading_weights_list_2');
$var_heading_font_selected_2 = dima_helper::dima_get_option('dima_heading_weight_selected_2');
$var_heading_letter_spacing_2 = dima_helper::dima_get_option('dima_heading_letter_spacing_2');
$var_heading_font_color_2 = dima_helper::dima_get_option('dima_heading_text_color_2');

//HEADER 3
$var_heading_font_uppercase_3 = dima_helper::dima_get_option('dima_heading_text_style_3');
$var_heading_font_family_3 = dima_helper::dima_get_option('dima_heading_font_list_3');
$var_heading_font_siz_3 = dima_helper::dima_get_option('dima_h3_text_size');
$var_heading_font_Weights_3 = dima_helper::dima_get_option('dima_heading_weights_list_3');
$var_heading_font_selected_3 = dima_helper::dima_get_option('dima_heading_weight_selected_3');
$var_heading_letter_spacing_3 = dima_helper::dima_get_option('dima_heading_letter_spacing_3');
$var_heading_font_color_3 = dima_helper::dima_get_option('dima_heading_text_color_3');

//HEADER 4
$var_heading_font_uppercase_4 = dima_helper::dima_get_option('dima_heading_text_style_4');
$var_heading_font_family_4 = dima_helper::dima_get_option('dima_heading_font_list_4');
$var_heading_font_siz_4 = dima_helper::dima_get_option('dima_h4_text_size');
$var_heading_font_Weights_4 = dima_helper::dima_get_option('dima_heading_weights_list_4');
$var_heading_font_selected_4 = dima_helper::dima_get_option('dima_heading_weight_selected_4');
$var_heading_letter_spacing_4 = dima_helper::dima_get_option('dima_heading_letter_spacing_4');
$var_heading_font_color_4 = dima_helper::dima_get_option('dima_heading_text_color_4');

//HEADER 5
$var_heading_font_uppercase_5 = dima_helper::dima_get_option('dima_heading_text_style_5');
$var_heading_font_family_5 = dima_helper::dima_get_option('dima_heading_font_list_5');
$var_heading_font_siz_5 = dima_helper::dima_get_option('dima_h5_text_size');
$var_heading_font_Weights_5 = dima_helper::dima_get_option('dima_heading_weights_list_5');
$var_heading_font_selected_5 = dima_helper::dima_get_option('dima_heading_weight_selected_5');
$var_heading_letter_spacing_5 = dima_helper::dima_get_option('dima_heading_letter_spacing_5');
$var_heading_font_color_5 = dima_helper::dima_get_option('dima_heading_text_color_5');

//HEADER 6
$var_heading_font_uppercase_6 = dima_helper::dima_get_option('dima_heading_text_style_6');
$var_heading_font_family_6 = dima_helper::dima_get_option('dima_heading_font_list_6');
$var_heading_font_siz_6 = dima_helper::dima_get_option('dima_h6_text_size');
$var_heading_font_Weights_6 = dima_helper::dima_get_option('dima_heading_weights_list_6');
$var_heading_font_selected_6 = dima_helper::dima_get_option('dima_heading_weight_selected_6');
$var_heading_letter_spacing_6 = dima_helper::dima_get_option('dima_heading_letter_spacing_6');
$var_heading_font_color_6 = dima_helper::dima_get_option('dima_heading_text_color_6');

//LOGO
$var_logo_font_uppercase = dima_helper::dima_get_option('dima_logo_text_style');
$var_logo_font_color = dima_helper::dima_get_option('dima_logo_text_color');
$var_logo_font_size = dima_helper::dima_get_option('dima_logo_text_size');
$var_logo_letter_spacing = dima_helper::dima_get_option('dima_logo_letter_spacing');
$var_logo_font_weights = dima_helper::dima_get_option('dima_logo_weights_list');
$var_logo_font_selcted = dima_helper::dima_get_option('dima_logo_weight_selected');
$var_logo_font_family = dima_helper::dima_get_option('dima_logo_font_list');

//BUTTON
$var_btn_font_size            = dima_helper::dima_get_option( 'dima_btn_text_size' );
$var_btn_font_weights         = dima_helper::dima_get_option( 'dima_btn_weights_list' );
$var_btn_font_weight_selected = dima_helper::dima_get_option( 'dima_btn_weight_selected' );
$var_btn_font_family          = dima_helper::dima_get_option( 'dima_btn_font_list' );

//MENU
$var_nav_font_uppercase     = dima_helper::dima_get_option( 'dima_navbar_text_style' );
$var_nav_font_weights       = dima_helper::dima_get_option( 'dima_navbar_weights_list' );
$var_nav_font_slected       = dima_helper::dima_get_option( 'dima_navbar_weight_selected' );
$var_nav_font_family        = dima_helper::dima_get_option( 'dima_navbar_font_list' );


/* -----------Typo----------- */
