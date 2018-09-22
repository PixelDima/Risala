<?php
/**
 * Customizer Control: Risala-typography.
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
 * Typography control
 */
class dima_custom_control_typography extends WP_Customize_Control
{

    /**
     * The control type.
     *
     * @access public
     * @var string
     */
    public $type = 'dima_typography';

    /**
     * Enqueue control related scripts/styles.
     *
     * @access public
     */
    public function enqueue()
    {
        // Don't call is The Event Calendar active to avoid conflict
        if (!class_exists('Tribe__Events__Main')) {
            wp_enqueue_script('dima-select2', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/select2.min.js', array('jquery'), false, true);
            wp_enqueue_style('select2', DIMA_TEMPLATE_URL . '/framework/asset/admin/css/select2.min.css', null);
            wp_enqueue_script('dima-typography-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/typography.min.js', array('jquery', 'select2'), false, true);
        }
        wp_enqueue_style('dima_global_styles', DIMA_TEMPLATE_URL . '/framework/asset/admin/css/control_typography.min.css', array(), DIMA_VERSION, 'all');

    }

    /**
     * Render the control's content.
     * Allows the content to be overriden without having to rewrite the wrapper in $this->render().
     *
     * @access protected
     */
    protected function render_content()
    {
        $this_val = $this->value();
        $is_googla_font_on = dima_helper::dima_am_i_true(dima_helper::dima_get_option('dima_custom_font'));
        ?>
		<label>
			<?php if (!empty($this->label)): ?>
				<span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
			<?php endif;?>
			<?php if (!empty($this->description)): ?>
				<span class="description customize-control-description"><?php echo wp_kses_post($this->description); ?></span>
			<?php endif;?>

			<select class="dima-typography-select" <?php $this->link();?>>
				<option value="" <?php if (!$this_val) {
                    echo 'selected="selected"';
                }?>>
                <?php esc_html_e('Default', 'risala');?></option><?php
                // Get Standard font options
        if ($std_fonts = dima_standard_fonts()) {?>
					<optgroup label="<?php esc_html_e('Standard Fonts', 'risala');?>">
						<?php
                // Loop through font options and add to select
            foreach ($std_fonts as $font) {?>
							<option value="<?php echo esc_html($font); ?>" <?php selected($font, $this_val);?>><?php echo esc_html($font); ?></option>
						<?php }?>
					</optgroup>
				<?php }

                // Google font options
        if (($google_fonts = dima_get_googlefonts()) && $is_googla_font_on) {?>
					<optgroup label="<?php esc_html_e('Google Fonts', 'risala');?>">
						<?php
                // Loop through font options and add to select
            foreach ($google_fonts as $font) {?>
							<option value="<?php echo esc_html($font['name']); ?>" <?php selected($font['name'], $this_val);?>><?php echo esc_html($font['name']); ?></option>
						<?php }?>
					</optgroup>
				<?php }?>
			</select>

		</label>

		<?php
}
}
