<?php

/**
 * Custom Control .
 *
 * @package Dima Framework
 * @subpackage Admin customizer
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */
class dima_custom_control_multi_check extends WP_Customize_Control {

	public $type = 'multi_check';
	private static $firstLoad = true;

	public function render_content() {

		if ( is_array( $this->value() ) ) {
			$savedValueCSV = implode( ',', $this->value() );
			$values        = $this->value();
		} else {
			$savedValueCSV = $this->value();
			$values        = explode( ',', $this->value() );
		}

		if ( self::$firstLoad ) {
			self::$firstLoad = false;
			?>
			<script>
				jQuery(document).ready(function ($) {
					"use strict";
					$('input.dima-multicheck').change(function (event) {
						event.preventDefault();
						var csv = '';
						$(this).parents('li:eq(0)').find('input[type=checkbox]').each(function () {
							if ($(this).is(':checked')) {
								csv += $(this).attr('value') + ',';
							}
						});
						csv = csv.replace(/,+$/, "");
						$(this).parents('li:eq(0)').find('input[type=hidden]').val(csv).trigger('change');
						return true;
					});
				});
			</script>
			<?php
		} ?>

		<label class='dima-multicheck-container'>
      <span class="customize-control-title">
        <?php echo esc_html( $this->label ); ?>
	      <?php if ( ! empty( $this->description ) ): ?>
		      <span
			      class="description customize-control-description"><?php echo esc_attr( $this->description ); ?></span>
		      <?php
	      endif; ?>
      </span>
			<?php
			foreach ( $this->choices as $value => $label ) {
				printf( '<label for="%s"><input class="dima-multicheck" id="%s" type="checkbox" value="%s" %s/> %s</label><br>', $this->id . $value, $this->id . $value, esc_attr( $value ), checked( in_array( $value, $values ), true, false ), $label );
			}
			?>
			<input type="hidden" value="<?php echo esc_attr( $savedValueCSV ); ?>" <?php $this->link(); ?> />
		</label>
		<?php
	}
}

