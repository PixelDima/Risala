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
class dima_custom_control_slider extends WP_Customize_Control {
	public $type = 'slider';

	public function enqueue() {
		wp_enqueue_script( 'jquery-ui' );
		wp_enqueue_script( 'jquery-ui-slider' );
	}

	public function render_content() {?>
        <label>
                <span class="customize-control-title">
                    <?php echo esc_html( $this->label ); ?>
                    <?php if ( ! empty( $this->description ) ): ?>
                        <span class="description customize-control-description"><?php echo esc_attr( $this->description ); ?></span>                        
                    <?php endif; ?>
                </span>
        </label>

        <div class="slider_<?php echo esc_attr( $this->id ); ?> control-wrap">
            <div id="slider_<?php echo esc_attr( $this->id ); ?>" class="dima-slider">
            </div>
           
            <input type="text" class="dima-input-slider" id="input_<?php echo esc_attr( $this->id ); ?>" disabled 
            value="<?php echo esc_attr( $this->value() ); ?>" data-reset_value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->link(); ?>/>
            <span class="dima-reset-slider"><span class="dashicons dashicons-image-rotate"></span></span>
        </div>

        <script>
            jQuery(document).ready(function ($) {
                $('[id="slider_<?php echo esc_attr( $this->id ); ?>"]').slider({
                    value: <?php echo intval( esc_attr( $this->value() ) ); ?>,
                    min: <?php echo intval( esc_attr( $this->choices['min'] ) ); ?>,
                    max: <?php echo intval( esc_attr( $this->choices['max'] ) ); ?>,
                    step: <?php echo esc_attr( $this->choices['step'] ); ?>,
                    range: "min",
                    animate: true,
                    slide: function (event, ui) {
                        $('[id="input_<?php echo esc_attr($this->id); ?>"]').val(ui.value).change().keyup();
                    }
                });
                $('[id="input_<?php echo esc_attr( $this->id ); ?>"]').val($('[id="slider_<?php echo esc_attr($this->id); ?>"]').slider("value")); 
                $('.slider_<?php echo esc_attr( $this->id ); ?> .dima-reset-slider').on('click', function() {
                    this_input 		= $( this ).closest( '.slider_<?php echo esc_attr( $this->id ); ?>' ).find( 'input' );
                    input_default 	= this_input.data( 'reset_value' );
                    this_input.val( input_default );
                    this_input.change();                   
                } );
                $( '.slider_<?php echo esc_attr( $this->id ); ?>' ).find( 'input' ).change(function() {
                        $('[id="slider_<?php echo esc_attr( $this->id ); ?>"]').slider("value", $(this).val());
                });
                
            });
        </script>
		<?php
	}
}

