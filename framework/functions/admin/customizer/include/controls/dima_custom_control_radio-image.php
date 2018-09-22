<?php

/**
 * radio-image Customizer Control. .
 *
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */


// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'dima_custom_control_radio_image' ) ) {
	class dima_custom_control_radio_image extends WP_Customize_Control {

		public $type = 'radio-image';

		protected function render_content() { ?>
            <label class="customizer-text">
				<?php if ( $this->label ) { ?>
                    <span class="customize-control-title"><?php echo esc_html( $this->label ) ?></span>
				<?php } ?>
				<?php if ( $this->description ) { ?>
                    <span
                            class="description customize-control-description"><?php echo esc_attr( $this->description ) ?></span>
				<?php } ?>
            </label>
            <div id="input_<?php echo esc_attr( $this->id ) ?>" class="image">
				<?php
				$name = '_customize-radio-image-' . esc_attr( $this->id );
				if ( empty( $this->choices ) ) {
					return;
				}
				?>
				<?php foreach ( $this->choices as $value => $label ) {
					$checked_class = ( $this->value() === $value ) ? ' dima_radio_image_checkbox' : '';
					?>
                    <input class="dima_radio_image_checkbox" type="radio" value="<?php echo esc_attr( $value ); ?>"
                           name="<?php echo esc_attr( $name ); ?>"
                           id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" <?php $this->link();
					checked( $this->value(), $value ); ?>>
                    <label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>"
                           class="label_radio_image<?php echo esc_attr( $checked_class ) ?>">
						<?php if ( empty( $value ) ) {
							$value = "default";
						} ?>
                        <img
                                src="<?php echo DIMA_TEMPLATE_URL . '/framework/images/layout/' . esc_attr( $value ) ?>.png">
                    </label>
                    </input>
				<?php } ?>
            </div>
			<?php
		}

	}

}
