<?php
/**
 * Customizer Control: font-style.
 *
 * @package     Risala WordPress theme
 * @subpackage  Controls
 * @since       1.0
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Font Style Control
 */
class dima_custom_control_font_style extends WP_Customize_Control
{

    /**
     * The control type.
     *
     * @access public
     * @var string
     */
    public $type = 'font_style';

    /**
     * Render the control's content.
     * Allows the content to be overriden without having to rewrite the wrapper in $this->render().
     *
     * @access protected
     */
    public function render_content()
    {
		$this_val = $this->value();
        ?>
        <label>
			<?php if (!empty($this->label)): ?>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<?php endif;
        if (!empty($this->description)): ?>
                <span
                        class="description customize-control-description"><?php echo esc_attr($this->description); ?></span>
			<?php endif;?>
        </label>
		<?php $current_values = explode('|', $this_val);
        if (empty($this->choices)) {
            return;
        }
        foreach ($this->choices as $value => $label):
            $checked_class = in_array($value, $current_values) ? ' dima_font_style_checkbox' : '';
            $icon = '';
            switch ($value) {
                case 'bold':
                    $icon = dima_get_svg_icon("ic_format_bold");
                    break;
                case 'italic':
                    $icon = dima_get_svg_icon("ic_format_italic");
                    break;
                case 'uppercase':
                    $icon = dima_get_svg_icon("ic_text_fields");
                    break;
                case 'underline':
                    $icon = dima_get_svg_icon("ic_format_underlined");
                    break;
            }
            ?>
	            <span class="dima_customize_font_style dima_customize_font_value_<?php echo esc_attr($value);
            echo esc_attr($checked_class); ?>">
	                <span><?php echo $icon ?></span>
							<input type="checkbox" class="dima_font_style_checkbox"
	                               value="<?php echo esc_attr($value); ?>" <?php checked(in_array($value, $current_values));?> />
						</span>
			<?php
endforeach;
        ?>
        <input type="hidden" class="dima_customize_font_style_list" <?php $this->input_attrs();?>
               value="<?php echo esc_attr($this_val); ?>" <?php $this->link();?> />
		<?php

    }
}