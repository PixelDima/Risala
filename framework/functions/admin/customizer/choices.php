<?php

/**
 * Sets up the options for Customizer.
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 */
/************************************************************************
 * [i]: $DIMA[][] is a table 2D
 *      Content 4 type of variables
 *              1: Settings
 *              2: Sections
 *              3: Controls
 *              3: Panel
 *
 * $DIMA['sections'][] = array($sections_id,title,priority,$id_panel);
 * $DIMA['settings'][] = array($settings_id,default,transport);
 * $DIMA['controls'][] = array($controls_id,type,label,$sections_id,choices);
 * $DIMA['panel'][]    = array($id_panel, titel, description, priority);
 *
 ************************************************************************/

/**
 * Choices
 */
$list_all_font_weights         = dima_get_font_weights();
$list_all_font_weight_selected = dima_get_font_weight_selected();
$list_all_google_font_name     = dima_get_googlefonts_name();
$list_font_weights_and_name    = dima_get_googlefonts();
$list_font_subsets             = dima_get_font_subsets();

$Choices_on_off = array(
	'1' => esc_html__( 'On', 'risala' ),
	'0' => esc_html__( 'Off', 'risala' )
);

$Choices_left_right_float = array(
	'start' => esc_html__( 'start', 'risala' ),
	'end'   => esc_html__( 'End', 'risala' )
);

$Choices_of_content_layouts = array(
	'no-sidebar'    => esc_html__( 'No Sidebar', 'risala' ),
	'right-sidebar' => esc_html__( 'Right Sidebar', 'risala' ),
	'left-sidebar'  => esc_html__( 'Left Sidebar', 'risala' ),
	'mini'          => esc_html__( 'Mini', 'risala' ),
);

$Choices_font_style = array(
	'bold'      => esc_html__( 'Bold', 'risala' ),
	'italic'    => esc_html__( 'Italic', 'risala' ),
	'uppercase' => esc_html__( 'Uppercase', 'risala' ),
	'underline' => esc_html__( 'Underline', 'risala' ),
);


$Choices_sizing_content_width = array(
	'min'  => '50',
	'max'  => '100',
	'step' => '1'
);

$Choices_max_sizing_content_width = array(
	'min'  => '600',
	'max'  => '1500',
	'step' => '10'
);

$Choices_boxed_margin = array(
	'min'  => '0',
	'max'  => '80',
	'step' => '5'
);

$Choices_navbar_hight = array(
	'min'  => '20',
	'max'  => '500',
	'step' => '5'
);