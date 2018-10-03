<?php
/**
 * Get customizer options based on theme style and demo name.
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

$is_menu_dark = dima_helper::dima_am_i_true(dima_helper::dima_get_option('dima_header_navbar_menu_dark'));
$list_all_font_weights = dima_get_font_weights();
$list_all_google_font_name = dima_get_googlefonts_name();
$list_font_weights_and_name = dima_get_googlefonts();
$list_font_subsets = dima_get_font_subsets();

$dima_customizer_data = array(
    'dima_main_color' => '#ffe082',
    'dima_body_subsets_list' => 'latin',
    'dima_body_background_color' => '#F5F5F5',
    'dima_body_background_color_clean' => '#FFFFFF',
    'dima_footer_content_text' => 'Copyright © 2018 <a href="https://pixeldima.com/">PixelDima</a>. Powered by WordPress.',
    'dima_layout_content' => 'right-sidebar',
    'dima_layout_style' => 'clean',
    'dima_content_max_width' => '1170',
    'dima_content_width' => '100',
    'dima_sidebar_width' => '270',
    'dima_header_logo_width' => '105',
    /* ------------------- */
    //----Typo-------------//
    /* ------------------- */
    'dima_custom_font' => '0',
    'dima_body_subsets_list' => 'latin',
    'dima_body_font_list' => 'Source Sans Pro',
    'dima_body_weights_list' => '300,400,400italic,300italic',
    'dima_body_weight_selected' => '400',
    'dima_body_text_size' => '18px',
    'dima_body_text_color' => '#616161',
    'dima_body_link_color' => '#222222',
    'dima_body_link_color_hover' => '#111111',
    'dima_global_font_data' => $list_font_weights_and_name,

    /* Logo */
    'dima_logo_font_list' => 'Lora',
    'dima_logo_text_color' => '#222222',
    'dima_logo_text_style' => '0',
    'dima_logo_weights_list' => '300,400,400italic,300italic',
    'dima_logo_text_size' => '',
    'dima_logo_letter_spacing' => '0',
    'dima_logo_weight_selected' => '700',
    /* !Logo */

    /*--Menu--*/
    'dima_navbar_text_style' => '400',
    'dima_navbar_font_list' => 'Source Sans Pro',
    'dima_navbar_weights_list' => '400',
    'dima_navbar_weight_selected' => '300,400,400italic,300italic',
    'dima_navbar_text_size' => '',
    'dima_navbar_letter_spacing' => '',
    /*--!Menu--*/

    /*--Button--*/
    'dima_btn_font_list' => 'Source Sans Pro',
    'dima_btn_weights_list' => '400',
    'dima_btn_weight_selected' => '300,400,400italic,300italic',
    'dima_btn_text_size' => '',
    /*--!Button--*/

    /* H ALL */
    'dima_heading_text_style' => '400',
    'dima_heading_font_list' => 'Lora',
    'dima_heading_weights_list' => '400',
    'dima_heading_weight_selected' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing' => '0',
    'dima_h_all_text_size' => '',
    'dima_heading_text_color' => '#222222',
    /* !H All */

    /* H1 */
    'dima_heading_text_style_1' => '400',
    'dima_heading_font_list_1' => 'Lora',
    'dima_heading_weights_list_1' => '400',
    'dima_heading_weight_selected_1' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_1' => '0',
    'dima_h1_text_size' => '',
    'dima_heading_text_color_1' => '#222222',
    /* !H1 */

    /* H2 */
    'dima_heading_text_style_2' => '400',
    'dima_heading_font_list_2' => 'Lora',
    'dima_heading_weights_list_2' => '400',
    'dima_heading_weight_selected_2' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_2' => '0',
    'dima_h2_text_size' => '',
    'dima_heading_text_color_2' => '#222222',
    /* !H2 */

    /* H3 */
    'dima_heading_text_style_3' => '400',
    'dima_heading_font_list_3' => 'Lora',
    'dima_heading_weights_list_3' => '400',
    'dima_heading_weight_selected_3' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_3' => '0',
    'dima_h3_text_size' => '',
    'dima_heading_text_color_3' => '#222222',
    /* !H3 */

    /* H4 */
    'dima_heading_text_style_4' => '400',
    'dima_heading_font_list_4' => 'Lora',
    'dima_heading_weights_list_4' => '400',
    'dima_heading_weight_selected_4' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_4' => '0',
    'dima_h4_text_size' => '',
    'dima_heading_text_color_4' => '#222222',
    /* !H4 */

    /* H5 */
    'dima_heading_text_style_5' => '400',
    'dima_heading_font_list_5' => 'Lora',
    'dima_heading_weights_list_5' => '400',
    'dima_heading_weight_selected_5' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_5' => '0',
    'dima_h5_text_size' => '',
    'dima_heading_text_color_5' => '#222222',
    /* !H5 */

    /* H6 */
    'dima_heading_text_style_6' => '400',
    'dima_heading_font_list_6' => 'Lora',
    'dima_heading_weights_list_6' => '400',
    'dima_heading_weight_selected_6' => '300,400,400italic,300italic',
    'dima_heading_letter_spacing_6' => '0',
    'dima_h6_text_size' => '',
    'dima_heading_text_color_6' => '#222222',
    /* !H6 */

    /* ------------------- */
    //----!Typo-------------//
    /* ------------------- */

    'dima_custom_js' => '',
    /* SEO */
	'dima_opengraph_image'                        => '',
	'dima_open_graph_meta_tag'                    => '1',
	'dima_twitter_username'                       => '',
	'dima_twitter_account_id'                     => '',
    'dima_facebook_page_id'                       => '',
    'dima_structure_data'                         => '1',
	'dima_schema_type'                            => 'Article',

    /* !SEO */

);

if (is_rtl()) {
    $body_default_font = 'Droid Arabic Naskh';
    $heading_default_font = 'Droid Arabic Kufi';
    $customizer_data_dark = array(
        'dima_heading_font_list' => $heading_default_font,
        'dima_body_font_list' => $body_default_font,
    );
    $dima_customizer_data = array_merge($dima_customizer_data, $customizer_data_dark);
}

global $dima_array_of_social;
$dima_array_of_social = array(
    'dima_social_facebook',
    'dima_social_twitter',
    'dima_social_googleplus',
    'dima_social_linkedin',
    'dima_social_youtube',
    'dima_social_vimeo',
    'dima_social_foursquare',
    'dima_social_tumblr',
    'dima_social_instagram',
    'dima_social_dribbble',
    'dima_social_flickr',
    'dima_social_behance',
    'dima_social_pinterest',
    'dima_social_whatsapp',
    'dima_social_soundcloud',
    'dima_social_rss',
    'dima_social_vk',
);
