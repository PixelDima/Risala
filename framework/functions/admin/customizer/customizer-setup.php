<?php

/**
 * Initializes and sets up the WordPress Live Preview feature by including
 * sections, controls, and settings.
 *
 * Set Path
 * Require Files
 * Remove Unused Default Sections and Controls
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

/**
 * [Path of Customizer directory]
 * @var [String]
 */
$customizer_path = DIMA_TEMPLATE_PATH . '/framework/functions/admin/customizer';

/**
 * Require Files
 */
require_once $customizer_path . '/include/fonts.php';
require_once $customizer_path . '/include/custom_controls.php';
require_once $customizer_path . '/register.php';
require_once $customizer_path . '/asset-output.php';
include_once $customizer_path . '/customizer-data.php';


/**
 * [Remove Unused Sections and Controls that's using by default from wordpress]
 *
 * @param  [WP_Customize_Manager] $wp_customize [WP_Customize_Manager instance]
 */
function dima_remove_default_customizer_sections( $wp_customize ) {

	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_control( 'header_image' );
}

add_action( 'customize_register', 'dima_remove_default_customizer_sections' );
