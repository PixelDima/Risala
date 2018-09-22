<?php
/**
 * Theme styles , include style bsed on demo name.
 * include google font url.
 *
 * @package Dima Framework
 * @subpackage Functions
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Enqueue shared styles for frontend and backend
 */
if (!function_exists('dima_global_styles')):
    function dima_global_styles()
{
        $dima_css_style_dir = '/framework/asset/site/css/styles/';
        $demo = '';
        $ext = '';
        $min = '';
        $rtl = is_rtl() ? '-rtl' : '';

        //Register styles.
        wp_enqueue_style(DIMA_THEME_NAME . '-style', DIMA_TEMPLATE_URL . $dima_css_style_dir . $demo . '/style' . $ext . $rtl . $min . '.css', array(), DIMA_VERSION);
        wp_enqueue_style('dima-blocks-common-style', DIMA_TEMPLATE_URL . $dima_css_style_dir . $demo . '/block-common' . $ext . $rtl . $min . '.css', null, DIMA_VERSION, 'all');
        wp_enqueue_style('dima-blocks-style', DIMA_TEMPLATE_URL . $dima_css_style_dir . $demo . '/blocks' . $ext . $rtl . $min . '.css', null, DIMA_VERSION, 'all');
    }
endif;
add_action('wp_enqueue_scripts', 'dima_global_styles');

/**
 * Load block editor styles
 */
function dima_blocks_block_editor_styles()
{
    $dima_css_style_dir = '/framework/asset/site/css/styles/';
    $demo = '';
    $ext = '';
    $min = '';
    $rtl = is_rtl() ? '-rtl' : '';
    wp_enqueue_style('dima-blocks-block-editor-styles', DIMA_TEMPLATE_URL . $dima_css_style_dir . $demo . '/blocks-style-editor' . $ext . $rtl . $min . '.css', null, DIMA_VERSION, 'all');
    wp_enqueue_style('dima-blocks-common-style', DIMA_TEMPLATE_URL . $dima_css_style_dir . $demo . '/block-common' . $ext . $rtl . $min . '.css', null, DIMA_VERSION, 'all');
}
add_action('enqueue_block_editor_assets', 'dima_blocks_block_editor_styles');

if (!function_exists('dima_include_fonts')):
    function dima_include_fonts()
{

        $is_custom_font = dima_helper::dima_am_i_true(dima_helper::dima_get_option('dima_custom_font', '0'));
        $protocol = is_ssl() ? 'https' : 'http';
        $custom_font_args_all = array();
        $dima_css_style_dir = '/framework/asset/site/css/styles/';

		$body_font_weight      = dima_helper::dima_get_option( 'dima_body_weights_list' );
		$btn_font_weight       = dima_helper::dima_get_option( 'dima_btn_weights_list' );
		$heading_font_weight   = dima_helper::dima_get_option( 'dima_heading_weights_list' );
		$heading_font_weight_1 = dima_helper::dima_get_option( 'dima_heading_weights_list_1' );
		$heading_font_weight_2 = dima_helper::dima_get_option( 'dima_heading_weights_list_2' );
		$heading_font_weight_3 = dima_helper::dima_get_option( 'dima_heading_weights_list_3' );
		$heading_font_weight_4 = dima_helper::dima_get_option( 'dima_heading_weights_list_4' );
		$heading_font_weight_5 = dima_helper::dima_get_option( 'dima_heading_weights_list_5' );
		$heading_font_weight_6 = dima_helper::dima_get_option( 'dima_heading_weights_list_6' );
		$logo_font_weight      = dima_helper::dima_get_option( 'dima_logo_weights_list' );
		$navbar_font_weight    = dima_helper::dima_get_option( 'dima_navbar_weights_list' );        

        $subsets = dima_helper::dima_get_option('dima_body_subsets_list');

        if (is_rtl() && !$is_custom_font) {            
			$body_font_family     = $navbar_font_family = $btn_font_family = 'Droid Arabic Naskh';
			$logo_font_family     = $navbar_font_family = $heading_font_family=$heading_font_family_1 = $heading_font_family_2 =
            $heading_font_family_3 = $heading_font_family_4 = $heading_font_family_5 = 
            $heading_font_family_6 = 'Droid Arabic Kufi';
			$custom_font_args_all = dima_get_font_and_wright( $body_font_family, $body_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $logo_font_family, $logo_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $navbar_font_family, $navbar_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $btn_font_family, $btn_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family, $heading_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_1, $heading_font_weight_1, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_2, $heading_font_weight_2, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_3, $heading_font_weight_3, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_4, $heading_font_weight_4, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_5, $heading_font_weight_5, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_6, $heading_font_weight_6, $custom_font_args_all );
        } else {
            $body_font_family      = dima_helper::dima_get_option( 'dima_body_font_list' );
			$logo_font_family      = dima_helper::dima_get_option( 'dima_logo_font_list' );
			$btn_font_family       = dima_helper::dima_get_option( 'dima_btn_font_list' );
			$navbar_font_family    = dima_helper::dima_get_option( 'dima_navbar_font_list' );
			$heading_font_family   = dima_helper::dima_get_option( 'dima_heading_font_list' );
			$heading_font_family_1 = dima_helper::dima_get_option( 'dima_heading_font_list_1');
			$heading_font_family_2 = dima_helper::dima_get_option( 'dima_heading_font_list_2' );
			$heading_font_family_3 = dima_helper::dima_get_option( 'dima_heading_font_list_3' );
			$heading_font_family_4 = dima_helper::dima_get_option( 'dima_heading_font_list_4' );
			$heading_font_family_5 = dima_helper::dima_get_option( 'dima_heading_font_list_5' );
            $heading_font_family_6 = dima_helper::dima_get_option( 'dima_heading_font_list_6' ); 
			$custom_font_args_all = dima_get_font_and_wright( $body_font_family, $body_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $logo_font_family, $logo_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $navbar_font_family, $navbar_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $btn_font_family, $btn_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family, $heading_font_weight, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_1, $heading_font_weight_1, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_2, $heading_font_weight_2, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_3, $heading_font_weight_3, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_4, $heading_font_weight_4, $custom_font_args_all );
			$custom_font_args_all = dima_get_font_and_wright( $heading_font_family_5, $heading_font_weight_5, $custom_font_args_all );
            $custom_font_args_all = dima_get_font_and_wright( $heading_font_family_6, $heading_font_weight_6, $custom_font_args_all );
        }
        

        if (is_array($custom_font_args_all) && !empty($custom_font_args_all)) {
            $custom_font_args_all = implode("|", $custom_font_args_all);

            $custom_font_args = array(
                'family' => $custom_font_args_all,
                'subset' => $subsets,
            );
    
            $get_custom_font_family = add_query_arg($custom_font_args, $protocol . '://fonts.googleapis.com/css');
            wp_enqueue_style('dima-font-custom', $get_custom_font_family, null, DIMA_VERSION, 'all');
    
        } else {
            $custom_font_args_all = '';
        }


        # No Google Font ----------------------
        dima_include_no_google_font($body_font_family, 'dima-body-font-custom');
        dima_include_no_google_font($heading_font_family, 'dima-headling-font-custom');
        dima_include_no_google_font($navbar_font_family, 'dima-menu-font-custom');
        dima_include_no_google_font($btn_font_family, 'dima-button-font-custom');
        dima_include_no_google_font($heading_font_family_1, 'dima-headling-font-custom_1');
        dima_include_no_google_font($heading_font_family_2, 'dima-headling-font-custom_2');
        dima_include_no_google_font($heading_font_family_3, 'dima-headling-font-custom_3');
        dima_include_no_google_font($heading_font_family_4, 'dima-headling-font-custom_4');
        dima_include_no_google_font($heading_font_family_5, 'dima-headling-font-custom_5');
        dima_include_no_google_font($heading_font_family_6, 'dima-headling-font-custom_6');
        # !No Google Font ----------------------

        wp_enqueue_style('font-awesome', DIMA_TEMPLATE_URL . $dima_css_style_dir . '/fontawesome-all.css', array(), "5.0.12");
    }

    function dima_get_font_and_wright($font_family, $font_weight, $custom_font_args_all = array())
    {
        if(!in_array($font_family,dima_standard_fonts())){
            $font_args = $font_family . ':' . $font_weight;
            array_push($custom_font_args_all, $font_args);    
        }

        return $custom_font_args_all;
    }
endif;

add_action('wp_enqueue_scripts', 'dima_include_fonts');


if (!function_exists('dima_customizer_controls')):
    /**
     * [Add Style to customizer controls 'customizer-controls.css']
     */
    function dima_customizer_controls()
    {
        $rtl = is_rtl() ? '-rtl' : '';

        wp_enqueue_style('dima_customizer_styles', DIMA_TEMPLATE_URL . '/framework/asset/admin/css/customizer-controls'.$rtl.'.min.css', array(), DIMA_VERSION, 'all');
    }
endif;

add_action('customize_controls_print_styles', 'dima_customizer_controls');


if (!function_exists('dima_include_no_google_font')):
    function dima_include_no_google_font($font_family, $handle)
{
        switch ($font_family) {
            case 'Noto Naskh Arabic':
                $font_family = 'http://fonts.googleapis.com/earlyaccess/notonaskharabic.css';
                break;
            case 'Noto Kufi Arabic':
                $font_family = 'http://fonts.googleapis.com/earlyaccess/notokufiarabic.css';
                break;
            case 'Noto Nastaliq Urdu':
                $font_family = 'http://fonts.googleapis.com/earlyaccess/notonastaliqurdu.css';
                break;
            default:
                $font_family = '';
        }
        if ($font_family != '') {
            wp_enqueue_style($handle, $font_family, null, DIMA_VERSION, 'all');
        }
    }
endif;
