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
class dima_custom_control_radio_button_set extends WP_Customize_Control {
	public $type = 'radio-buttonset';

	public function enqueue() {
		wp_enqueue_script( 'jquery-ui-button' );
	}

	public function render_content() {
		if ( empty( $this->choices ) ) {
			return;
		}
		$name = '_customize-radio-' . esc_attr( $this->id );
		?>
        <span class="customize-control-title">
         <?php echo esc_html( $this->label ); ?>
        </span>
		<?php if ( ! empty( $this->description ) ): ?>
            <span class="description customize-control-description"><?php echo esc_attr( $this->description ); ?></span>
		<?php endif; ?>


        <div id="input_<?php echo esc_attr( $this->id ); ?>" class="customize-control-radio-buttonset">
			<?php foreach ( $this->choices as $value => $label ): ?>
                <input type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>"
                       id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" <?php $this->link();
				checked( $this->value(), $value ); ?>>
                <label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
					<?php echo esc_html( $label ); ?>
                </label>
                </input>
				<?php
			endforeach; ?>
        </div>
        <script>jQuery(document).ready(function ($) {
                $('[id="input_<?php echo esc_attr( $this->id ); ?>"]').buttonset();
            });</script>
		<?php
	}
}
