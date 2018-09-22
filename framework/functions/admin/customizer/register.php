<?php

/**
 * Sets up the options for Customizer.
 *
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

/**
 * Class and Function List:
 * Function list:
 * - dima_register_theme_customizer_options()
 * - dima_customizer_controls_list()
 * - dima_customizer_options_list()
 * Classes list:
 */

/**
 * [Functions to register Options into customizer. using "customize_register" hook]
 *
 * @param  [WP_Customize_Manager] $wp_customize [WP_Customize_Manager instance]
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function dima_register_theme_customizer_options($wp_customize)
{
    global $dima_customizer_data;
    $customizer_path = DIMA_TEMPLATE_PATH . '/framework/functions/admin/customizer';
    include_once $customizer_path . '/choices.php';

    $allowed_tags = array(
        'strong' => array(),
        'br' => array(),
        'em' => array(),
        'p' => array('a' => true),
        'a' => array(
            'href' => true,
            'target' => true,
            'title' => true,
        ),
    );

    //sanitize_callback functions
    function dima_validate_color($value)
    {
        $value = str_replace(' ', '', $value);
        if (empty($value) || is_array($value)) {
            return 'rgba(0,0,0,0)';
        }
        // check hex color
        if (preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $value)) {
            return $value;
        } //check RGBA color
        elseif (false !== strpos($value, 'rgba')) {
            sscanf($value, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha);

            return 'rgba(' . esc_attr($red) . ',' . esc_attr($green) . ',' . esc_attr($blue) . ',' . esc_attr($alpha) . ')';
        } //check RGB color
        elseif (false !== strpos($value, 'rgb')) {
            sscanf($value, 'rgb(%d,%d,%d)', $red, $green, $blue);

            return 'rgb(' . esc_attr($red) . ',' . esc_attr($green) . ',' . esc_attr($blue) . ')';
        } else {
            return false;
        }
    }

    function dima_validate_slider($value)
    {
        if (is_numeric($value)) {
            return $value;
        } else {
            return false;
        }
    }

    function dima_validate_image($value)
    {
        return esc_url_raw($value);
    }

    function dima_validate_radio($value)
    {
        if (filter_var($value, FILTER_VALIDATE_URL) === false) {
            return sanitize_key($value);
        } else {
            return $value;
        }
    }

    function dima_validate_attr($value)
    {
        return esc_attr($value);
    }

    function dima_validate_url($value)
    {
        return esc_url_raw($value);
    }

    function dima_validate_textarea($value)
    {
        return esc_textarea($value);
    }

    function dima_validate_html($value)
    {
        return esc_html($value);
    }

    function dima_return_false($value)
    {
        return $value;
    }

    $i = 0;

    /* Panel */
    $DIMA['panel'][] = array(
        'dima_customizer_section_layout_and_design',
        esc_html__('Site Layout and design', 'risala'),
        esc_html__('Site Layout and design', 'risala'),
        ++$i,
        '',
    );

    $DIMA['panel'][] = array(
        'dima_customizer_panel_typography',
        esc_html__('Typography', 'risala'),
        esc_html__('Typography', 'risala'),
        ++$i,
    );
    /* !Panel */

    $DIMA['sections'][] = array(
        'dima_customizer_section_templates',
        esc_html__('Demos', 'risala'),
        ++$i,
        '',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_layout',
        esc_html__('Layout Settings', 'risala'),
        ++$i,
        'dima_customizer_section_layout_and_design',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_layout_style',
        esc_html__('Site Style', 'risala'),
        ++$i,
        'dima_customizer_section_layout_and_design',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_general',
        esc_html__('General Typography', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_body',
        esc_html__('Body', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_menu',
        esc_html__('Menu', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_sidebar',
        esc_html__('Sidebar', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h_all',
        esc_html__('All Heading', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
	);
	
	$DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h1',
        esc_html__('Heading H1', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );

    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h2',
        esc_html__('Heading H2', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h3',
        esc_html__('Heading H3', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h4',
        esc_html__('Heading H4', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h5',
        esc_html__('Heading H5', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_heading_h6',
        esc_html__('Heading H6', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_logo',
        esc_html__('Logo', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );
    $DIMA['sections'][] = array(
        'dima_customizer_section_typography_button',
        esc_html__('Button', 'risala'),
        ++$i,
        'dima_customizer_panel_typography',
    );

	$DIMA['sections'][] = array( 'dima_customizer_section_custom', esc_html__( 'Custom JavaScript', 'risala' ), 150, '' );

    /**
     * Options
     */
    $DIMA['settings'][] = array('dima_layout_style', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_layout_style',
        'radio',
        esc_html__('Content Style', 'risala'),
        'dima_customizer_section_layout',
        array(
            'cards' => esc_html__('Cards', 'risala'),
            'clean' => esc_html__('Clean', 'risala'),
        ),
        '',
    );

    $DIMA['settings'][] = array('dima_layout_content', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_layout_content',
        'radio-image',
        esc_html__('Content Layout', 'risala'),
        'dima_customizer_section_layout',
        $Choices_of_content_layouts,
        '',
    );

    $DIMA['settings'][] = array('dima_content_width', 'postMessage', 'dima_validate_slider');
    $DIMA['controls'][] = array(
        'dima_content_width',
        'slider',
        esc_html__('Site Content Width (%)', 'risala'),
        $Choices_sizing_content_width,
        'dima_customizer_section_layout',
        '',
    );

    $DIMA['settings'][] = array('dima_content_max_width', 'postMessage', 'dima_validate_slider');
    $DIMA['controls'][] = array(
        'dima_content_max_width',
        'slider',
        esc_html__('Site Max Content Width (px)', 'risala'),
        $Choices_max_sizing_content_width,
        'dima_customizer_section_layout',
        '',
    );

    $DIMA['settings'][] = array('dima_sidebar_width', 'postMessage', 'dima_validate_slider');
    $DIMA['controls'][] = array(
        'dima_sidebar_width',
        'slider',
        esc_html__('Site Sidebar Width (px)', 'risala'),
        array(
            'min' => '240',
            'max' => '350',
            'step' => '5',
        ),
        'dima_customizer_section_layout',
        '',
    );

    $DIMA['settings'][] = array('dima_body_background_color', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_body_background_color',
        'color',
        esc_html__('Website Background Color', 'risala'),
        'dima_customizer_section_layout_style',
        '',
    );

    $DIMA['settings'][] = array('dima_body_background_color_clean', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_body_background_color_clean',
        'color',
        esc_html__('Website Background Color', 'risala'),
        'dima_customizer_section_layout_style',
        '',
    );

    $DIMA['settings'][] = array('dima_main_color', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_main_color',
        'color',
        esc_html__('Main color', 'risala'),
        'dima_customizer_section_layout_style',
        esc_html__('This color will be applied to call to action elements such as buttons and hover icons. It\'s preferable to be attractive color and define the main color of your website.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_footer_content_text', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_footer_content_text',
        'textarea',
        esc_html__('Copyright Content', 'risala'),
        'dima_customizer_section_layout_style',
        '',
    );

    $DIMA['settings'][] = array('dima_header_logo_width', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_header_logo_width',
        'text',
        esc_html__('Logo Width (px)', 'risala'),
        'dima_customizer_section_layout_style',
        '',
    );

    /*===========================================================================*/
    /* ============================= Typography =================================*/
    /*===========================================================================*/

    /*--Body typo--*/

    $DIMA['settings'][] = array('dima_custom_font', 'postMessage', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_custom_font',
        'radio_button_set',
        esc_html__('Google Fonts', 'risala'),
        'dima_customizer_section_typography_general',
        $Choices_on_off,
        '',
    );

    $DIMA['settings'][] = array('dima_body_subsets_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_body_subsets_list',
        'multi_check',
        esc_html__('Font Subsets', 'risala'),
        'dima_customizer_section_typography_general',
        $list_font_subsets,
        '',
    );

    $DIMA['settings'][] = array('dima_body_font_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_body_font_list',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_body',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_body_weights_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_body_weights_list',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_body',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_body_weight_selected', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_body_weight_selected',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_body',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_body_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_body_text_size',
        'text',
        esc_html__('Body Font Size', 'risala'),
        'dima_customizer_section_typography_body',
        esc_html__('You can add: px-em-%', 'risala'),
    );

    $DIMA['settings'][] = array('dima_body_text_color', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_body_text_color',
        'color',
        esc_html__('Body text color', 'risala'),
        'dima_customizer_section_typography_body',
        '',
    );

    $DIMA['settings'][] = array('dima_body_link_color', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_body_link_color',
        'color',
        esc_html__('Text Link color', 'risala'),
        'dima_customizer_section_typography_body',
        esc_html__('This color will be applied to the important text links in your website and it\'s preferable to be like your website main color.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_body_link_color_hover', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_body_link_color_hover',
        'color',
        esc_html__('Text Link Hover color', 'risala'),
        'dima_customizer_section_typography_body',
        '',
    );

    /*--!Body typo--*/

    /*--headings ALl typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array(
        'dima_global_font_data',
        $list_font_weights_and_name,
        'postMessage',
        'dima_return_false',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        '',
    );

    $DIMA['settings'][] = array('dima_h1_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h_all_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h_all',
        '',
    );
    /*--!headings All typo--*/

    /*--headings 1 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_1', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_1',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_1', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_1',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        $list_all_google_font_name,
        '',
    );


    $DIMA['settings'][] = array('dima_heading_weights_list_1', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_1',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_1', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_1',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_1', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_1',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        '',
    );

    $DIMA['settings'][] = array('dima_h1_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h1_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_1', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_1',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h1',
        '',
    );
    /*--!headings 1 typo--*/

    /*--headings 2 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_2', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_2',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_2', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_2',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list_2', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_2',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_2', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_2',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_2', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_2',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        '',
    );

    $DIMA['settings'][] = array('dima_h2_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h2_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_2', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_2',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h2',
        '',
    );
    /*--!headings 2 typo--*/

    /*--headings 3 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_3', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_3',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_3', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_3',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list_3', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_3',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_3', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_3',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_3', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_3',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        '',
    );

    $DIMA['settings'][] = array('dima_h3_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h3_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_3', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_3',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h3',
        '',
    );
    /*--!headings 3 typo--*/

    /*--headings 4 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_4', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_4',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_4', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_4',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list_4', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_4',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_4', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_4',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_4', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_4',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        '',
    );

    $DIMA['settings'][] = array('dima_h4_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h4_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_4', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_4',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h4',
        '',
    );
    /*--!headings 4 typo--*/

    /*--headings 5 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_5', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_5',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_5', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_5',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list_5', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_5',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_5', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_5',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_5', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_5',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        '',
    );

    $DIMA['settings'][] = array('dima_h5_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h5_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_5', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_5',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h5',
        '',
    );
    /*--!headings 5 typo--*/

    /*--headings 6 typo--*/
    $DIMA['settings'][] = array('dima_heading_text_style_6', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_text_style_6',
        'font_style',
        esc_html__('Heading Font Style', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_font_list_6', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_font_list_6',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weights_list_6', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_weights_list_6',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_heading_weight_selected_6', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_heading_weight_selected_6',
        'select',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_heading_letter_spacing_6', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_heading_letter_spacing_6',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        '',
    );

    $DIMA['settings'][] = array('dima_h6_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_h6_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        '',
    );

    $DIMA['settings'][] = array('dima_heading_text_color_6', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_heading_text_color_6',
        'color',
        esc_html__('Headings color', 'risala'),
        'dima_customizer_section_typography_heading_h6',
        '',
    );
    /*--!headings 6 typo--*/

    /*--logo typo--*/

    $DIMA['settings'][] = array('dima_logo_text_style', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_logo_text_style',
        'font_style',
        esc_html__('Logo Font Style', 'risala'),
        'dima_customizer_section_typography_logo',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_logo_font_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_logo_font_list',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_logo',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_logo_weights_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_logo_weights_list',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_logo',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_logo_weight_selected', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_logo_weight_selected',
        'radio',
        esc_html__('Logo Font Weights', 'risala'),
        'dima_customizer_section_typography_logo',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_logo_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_logo_text_size',
        'text',
        esc_html__('Logo Font Size', 'risala'),
        'dima_customizer_section_typography_logo',
        '',
    );

    $DIMA['settings'][] = array('dima_logo_letter_spacing', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_logo_letter_spacing',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_logo',
        '',
    );

    $DIMA['settings'][] = array('dima_logo_text_color', 'refresh', 'dima_validate_color');
    $DIMA['controls'][] = array(
        'dima_logo_text_color',
        'color',
        esc_html__('Logo Text Color', 'risala'),
        'dima_customizer_section_typography_logo',
        '',
    );

    /*--!logo typo--*/

    /*--Menu typo--*/
    $DIMA['settings'][] = array('dima_navbar_text_style', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_navbar_text_style',
        'font_style',
        esc_html__('Font Style', 'risala'),
        'dima_customizer_section_typography_menu',
        $Choices_font_style,
        '',
    );

    $DIMA['settings'][] = array('dima_navbar_font_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_navbar_font_list',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_menu',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_navbar_weights_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_navbar_weights_list',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_menu',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_navbar_weight_selected', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_navbar_weight_selected',
        'radio',
        esc_html__('Font Weights', 'risala'),
        'dima_customizer_section_typography_menu',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_navbar_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_navbar_text_size',
        'text',
        esc_html__('Font Size', 'risala'),
        'dima_customizer_section_typography_menu',
        '',
    );

    $DIMA['settings'][] = array('dima_navbar_letter_spacing', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_navbar_letter_spacing',
        'text',
        esc_html__('Letter Spacing', 'risala'),
        'dima_customizer_section_typography_menu',
        '',
    );
    /*--!Menu typo--*/

    /*--Button typo--*/
    $DIMA['settings'][] = array('dima_btn_font_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_btn_font_list',
        'dima_typography',
        esc_html__('Font Family', 'risala'),
        'dima_customizer_section_typography_button',
        $list_all_google_font_name,
        '',
    );

    $DIMA['settings'][] = array('dima_btn_weights_list', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_btn_weights_list',
        'multi_check',
        esc_html__('Font Variants', 'risala'),
        'dima_customizer_section_typography_button',
        $list_all_font_weights,
        '',
    );

    $DIMA['settings'][] = array('dima_btn_weight_selected', 'refresh', 'dima_validate_radio');
    $DIMA['controls'][] = array(
        'dima_btn_weight_selected',
        'radio',
        esc_html__('Button Font Weights', 'risala'),
        'dima_customizer_section_typography_button',
        $list_all_font_weight_selected,
        esc_html__('Important: Not all fonts support every font-weight.', 'risala'),
    );

    $DIMA['settings'][] = array('dima_btn_text_size', 'refresh', 'dima_return_false');
    $DIMA['controls'][] = array(
        'dima_btn_text_size',
        'text',
        esc_html__('Button Font Size', 'risala'),
        'dima_customizer_section_typography_button',
        '',
    );
    /*--!Button typo--*/

    /* ! Typography */


    $DIMA['settings'][] = array( 'dima_custom_js', 'refresh', 'dima_return_false' );
	$DIMA['controls'][] = array(
		'dima_custom_js',
		'textarea',
		esc_html__( 'JavaScript', 'risala' ),
		'dima_customizer_section_custom',
		''
    ); 
    dima_customizer_controls_list($DIMA, $wp_customize, $dima_customizer_data);
}

global $dima_customizer_data;
/**
 * [List of Controls]
 *
 * @param  [array 2D] $DIMA     [Content 4 type of variables 1: Settings 2: Sections 3: Controls  3: Panel]
 * @param  [type] $wp_customize [WP_Customize_Manager instance]
 */
function dima_customizer_controls_list($DIMA, $wp_customize, $customizer_data)
{
    /** @var wpdb $wpdb */

    foreach ($DIMA['panel'] as $panel) {
        $wp_customize->add_panel(
            $panel[0],
            array(
                'title' => $panel[1],
                'description' => $panel[2],
                'priority' => $panel[3],
            )
        );
    }

    /**
     * Out - Sections.
     */

    // Add our upsell section
   if ( true != apply_filters( 'risala_licence_section_enable', false ) ) {

        // Get link
        $url = 'https://pixeldima.com/wordpress-theme/';

        // If affiliate ref
        $ref_url = '';
        $aff_ref = apply_filters( 'ocean_affiliate_ref', $ref_url );

        // Add & is has referal link
        if ( $aff_ref ) {
            $if_ref = '&';
        } else {
            $if_ref = '?';
        }

        // Add source
        $utm = $if_ref . 'utm_source=customizer&utm_campaign=bundle&utm_medium=wp-dash';

        $wp_customize->add_section( new DIMA_Customizer_Upsell_Section_Control( $wp_customize, 
        'risala_upsell_section', 
        array(
            'title'	   				=> esc_html__( 'Get More Themes', 'risala' ),
            'url' 					=> $url . $aff_ref . $utm,
            'priority' 				=> 0,
        ) ) );

   }



    foreach ($DIMA['sections'] as $section) {
        $wp_customize->add_section(
            $section[0],
            array(
                'title' => $section[1],
                'priority' => $section[2],
                'panel' => $section[3],
            )
        );
    }

    /**
     * Out - Settings
     */

    foreach ($DIMA['settings'] as $setting) {
        $wp_customize->add_setting(
            $setting[0],
            array(
                'type' => 'option',
                'default' => $customizer_data[$setting[0]],
                'transport' => $setting[1],
                'sanitize_callback' => $setting[2],
            )
        );
    }

    foreach ($DIMA['controls'] as $control) {

        static $priority = 1;
        /**
         * 1-radio-select
         * 3-radio_button_set
         * 4-multi_check
         * 5-checkbox-text
         * 6-textarea
         * 7-slider
         * 8-color
         * 9-image
         */

        switch ($control[1]) {
            case 'select':
            case 'radio':
                $wp_customize->add_control(
                    $control[0],
                    array(
                        'type' => $control[1],
                        'label' => $control[2],
                        'section' => $control[3],
                        'choices' => $control[4],
                        'description' => $control[5],
                        'priority' => $priority,
                    )
                );
                break;

            case 'radio_button_set':
                $wp_customize->add_control(
                    new dima_custom_control_radio_button_set(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    ));
                break;

            case 'radio-image':
                $wp_customize->add_control(
                    new dima_custom_control_radio_image(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    ));
                break;

            case 'font_style':
                $wp_customize->add_control(
                    new dima_custom_control_font_style(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    ));
                break;

            case 'dima_typography':
                $wp_customize->add_control(
                    new dima_custom_control_typography(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    ));
                break;

            case 'multi_check':
                $wp_customize->add_control(
                    new dima_custom_control_multi_check(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    )
                );
                break;
            case 'multiple-select':
                $wp_customize->add_control(
                    new dima_custom_control_multiple_select(
                        $wp_customize,
                        $control[0],
                        array(
                            'type' => $control[1],
                            'label' => $control[2],
                            'section' => $control[3],
                            'choices' => $control[4],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    )
                );
                break;
            case 'textarea':
                $wp_customize->add_control(
                    new dima_custom_control_textarea(
                        $wp_customize,
                        $control[0],
                        array(
                            'label' => $control[2],
                            'section' => $control[3],
                            'settings' => $control[0],
                            'description' => $control[4],
                            'priority' => $priority,
                        )
                    )
                );
                break;
            case 'slider':
                $wp_customize->add_control(
                    new dima_custom_control_slider(
                        $wp_customize,
                        $control[0],
                        array(
                            'label' => $control[2],
                            'section' => $control[4],
                            'settings' => $control[0],
                            'choices' => $control[3],
                            'description' => $control[5],
                            'priority' => $priority,
                        )
                    )
                );
                break;
            case 'color':
                $wp_customize->add_control(
                    new WP_Customize_Color_Control(
                        $wp_customize,
                        $control[0],
                        array(
                            'label' => $control[2],
                            'settings' => $control[0],
                            'section' => $control[3],
                            'description' => $control[4],
                            'priority' => $priority,
                        )
                    )
                );
                break;

            case 'image':
                $wp_customize->add_control(
                    new WP_Customize_Image_Control(
                        $wp_customize,
                        $control[0],
                        array(
                            'label' => $control[2],
                            'section' => $control[3],
                            'settings' => $control[0],
                            'description' => $control[4],
                            'priority' => $priority,
                        )
                    )
                );
                break;
            case 'dropdown-pages':
                $wp_customize->add_control(
                    $control[0],
                    array(
                        'type' => $control[1],
                        'label' => $control[2],
                        'section' => $control[3],
                        'description' => $control[4],
                        'allow_addition' => $control[5],
                        'priority' => $priority,
                    )
                );
                break;
            default:
                $wp_customize->add_control(
                    $control[0],
                    array(
                        'type' => $control[1],
                        'label' => $control[2],
                        'section' => $control[3],
                        'description' => $control[4],
                        'priority' => $priority,
                    )
                );
                break;
        }

        $priority++;
    }

}

add_action('customize_register', 'dima_register_theme_customizer_options');
