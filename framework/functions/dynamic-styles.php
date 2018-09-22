<?php

/**
 * Is responsible for dynamic styles.
 *
 * @package Dima Framework
 * @subpackage Functions
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! class_exists( 'DIMA_Style' ) ) {
	class DIMA_Style {

		public function __construct( $with_actions ) {
			// Minify Static files.
			$dima_inc_path = get_template_directory() . '/framework/functions/admin/includes/';
			require_once $dima_inc_path . '/minify/SimpleCssMinifier.php';
		}


		public static function dima_addCSS( $app_styles, $css_id, $return = false ) {
			if ( DIMA_VISUAL_COMOPSER_IS_ACTIVE ) {
				$minifier = new SimpleCssMinifier();
				$output   = $minifier->minify( $app_styles );
				if ( $return ) {
					return '<style id="dima-shortcode-style-' . $css_id . '" type="text/css">' . $output . '</style>';
				} else {
					echo '<style id="dima-shortcode-style-' . $css_id . '" type="text/css">' . $output . '</style>';
				}

				return;
			}
			global $dima_dynamic_styles;
			$dima_dynamic_styles[] = $app_styles;
			if ( self::dima_is_referer_admin_ajax() ) {
				$minifier = new SimpleCssMinifier();
				$output   = $minifier->minify( $app_styles );
				if ( $return ) {
					return '<style id="dima-shortcode-style-' . $css_id . '" type="text/css">' . $output . '</style>';
				} else {
					echo '<style id="dima-shortcode-style-' . $css_id . '" type="text/css">' . $output . '</style>';
				}

				return;
			}
		}

		public static function dima_is_referer_admin_ajax() {
			global $pagenow;
			$result = in_array(
				$pagenow, array(
					'admin-ajax.php',
				)
			);
			if ( $result ) {
				return true;
			}
		}

		public static function dima_adjustBrightness( $hex, $steps ) {
			// Steps should be between -255 and 255. Negative = darker, positive = lighter
			$steps = max( - 255, min( 255, $steps ) );

			// Normalize into a six character long hex string
			$hex = str_replace( '#', '', $hex );
			if ( strlen( $hex ) == 3 ) {
				$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
			}

			// Split into three parts: R, G and B
			$color_parts = str_split( $hex, 2 );
			$return      = '#';

			foreach ( $color_parts as $color ) {
				$color  = hexdec( $color ); // Convert to decimal
				$color  = max( 0, min( 255, $color + $steps ) ); // Adjust color
				$return .= str_pad( dechex( $color ), 2, '0', STR_PAD_LEFT ); // Make two char hex code
			}

			return $return;
		}

		/*-----------------------------------------------------------------------------------*/
		# Adjust darker or lighter color
		/*-----------------------------------------------------------------------------------*/
		public static function dima_get_rgb_color( $hex, $array = false ) {

			if ( strpos( $hex, 'rgb' ) !== false ) {

				$rgb_format = array( 'rgba', 'rgb', '(', ')', ' ' );
				$rgba_color = str_replace( $rgb_format, '', $hex );
				$rgba_color = explode( ',', $rgba_color );

				$rgb = array(
					'r' => $rgba_color[0],
					'g' => $rgba_color[1],
					'b' => $rgba_color[2],
				);
			} else {
				# Format the hex color string ----------
				$hex = str_replace( '#', '', $hex );

				if ( 3 == strlen( $hex ) ) {
					$hex = str_repeat( substr( $hex, 0, 1 ), 2 ) . str_repeat( substr( $hex, 1, 1 ), 2 ) . str_repeat( substr( $hex, 2, 1 ), 2 );
				}

				# Get decimal values ----------
				$rgb = array(
					'r' => hexdec( substr( $hex, 0, 2 ) ),
					'g' => hexdec( substr( $hex, 2, 2 ) ),
					'b' => hexdec( substr( $hex, 4, 2 ) ),
				);
			}

			if ( ! $array ) {
				$rgb = implode( ',', $rgb );
			}

			return $rgb;
		}

		/*-----------------------------------------------------------------------------------*/
		# Check if we need to use dark or light color
		/*-----------------------------------------------------------------------------------*/
		public static function dima_light_or_dark( $color, $return_rgb = false, $dark = '#000000', $light = '#FFFFFF' ) {

			$rgb = self::dima_get_rgb_color( $color, true );
			extract( $rgb );
			$brightness = ( ( $r * 299 ) + ( $g * 587 ) + ( $b * 114 ) ) / 1000;
			$color      = $brightness > 200 ? $dark : $light;

			return $return_rgb ? self::dima_get_rgb_color( $color ) : $color;
		}

	}

	new DIMA_Style( true );

}