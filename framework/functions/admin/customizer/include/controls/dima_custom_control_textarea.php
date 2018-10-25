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
class dima_custom_control_textarea extends WP_Customize_Control {
	public $type = 'textarea';

	public function render_content() {
		?>
		<label>
			<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php if ( ! empty( $this->description ) ): ?>
				<span
					class="description customize-control-description"><?php echo esc_attr( $this->description ); ?></span>
			<?php endif; ?>
			<textarea rows="5"
			          style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
		</label>
		<?php
	}
}