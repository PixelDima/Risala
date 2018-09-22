<?php
/**
 * Creat Output Css
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 */

function dima_customizer_generated_css() {
	$output_css_path = DIMA_TEMPLATE_PATH . '/framework/functions/admin/customizer/css-var';

	ob_start();
	echo '<style id="dima-customizer-generated-css" type="text/css">';
	require_once( $output_css_path . '/var.php' );
	require_once( $output_css_path . '/css_general.php' );
	require_once( $output_css_path . '/css_typo.php' );
	require_once( $output_css_path . '/css_navbar.php' );
	echo '</style>';
	$css = ob_get_contents();
	ob_end_clean();

	// Remove comments
	$output = preg_replace( '#/\*.*?\*/#s', '', $css );
	// Remove whitespace
	$output = preg_replace( '/\s*([{}|:;,])\s+/', '$1', $output );
	// Remove trailing whitespace at the start
	$output = preg_replace( '/\s\s+(.*)/', '$1', $output );
	// Remove unnecesairy ;'s
	$output = str_replace( ';}', '}', $output );

	echo( $output );

}

add_action( 'wp_head', 'dima_customizer_generated_css', 1112, 0 );


function dima_customizer_generated_js() {
	$dima_custom_scripts = dima_helper::dima_get_option( 'dima_custom_js' );
	if ( ! empty( $dima_custom_scripts ) ) {
		//first lets test is the js code is clean or has <script> tags and such
		//if we have <script> tags than we will not enclose it in anything - raw output
		if ( strpos( $dima_custom_scripts, '</script>' ) !== false ) {
			echo remove_accents( html_entity_decode( $dima_custom_scripts ) ) . "\n";
		} else {
			echo "<script id=\"dima-customizer-js\" type=\"text/javascript\">\n;(function($){\n" . remove_accents( html_entity_decode( $dima_custom_scripts ) ) . "\n})(jQuery);\n</script>\n";
		}
	}
}

add_action( 'wp_footer', 'dima_customizer_generated_js', 9999, 0 );