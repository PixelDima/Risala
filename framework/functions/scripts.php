<?php
/**
 * Theme scripts , include js.
 *
 * @package Dima Framework
 * @subpackage Functions
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_enqueue_scripts', 'dima_global_scripts', 10);
add_action('admin_enqueue_scripts', 'dima_admin_scripts');
add_action('customize_preview_init', 'dima_preview_customizer_scripts');
add_action('customize_controls_print_footer_scripts', 'dima_customizer_control_scripts');

if (!function_exists('dima_global_scripts')):
    /**
     * Undocumented function
     *
     * @return void
     */
    function dima_global_scripts()
{
        if (!is_admin() && !in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'))) {
            if (is_singular() && comments_open() && get_option('thread_comments')) {
                wp_enqueue_script('comment-reply');
            }
        }
        wp_register_script('modernizr-js', DIMA_TEMPLATE_URL . '/framework/asset/site/js/core/modernizr-custom.js', array('jquery'), DIMA_VERSION, false);
        wp_enqueue_script('modernizr-js');

        wp_register_script('dima_init_js', DIMA_TEMPLATE_URL . '/framework/asset/site/js/init-es6.js', array('jquery'), DIMA_VERSION, false);
        wp_enqueue_script('dima_init_js');

        wp_register_script('imagesloaded.pkgd', DIMA_TEMPLATE_URL . '/framework/asset/site/js/core/imagesloaded.pkgd.min.js', array('jquery'), DIMA_VERSION, true);
        wp_enqueue_script('imagesloaded.pkgd');

        wp_register_script('velocity', DIMA_TEMPLATE_URL . '/framework/asset/site/js/core/velocity.min.js', array('jquery'), DIMA_VERSION, true);
        wp_enqueue_script('velocity');

        wp_register_script('velocity.ui', DIMA_TEMPLATE_URL . '/framework/asset/site/js/core/velocity.ui.min.js', array('jquery'), DIMA_VERSION, true);
        wp_enqueue_script('velocity.ui');

        wp_register_script('hoverintent', DIMA_TEMPLATE_URL . '/framework/asset/site/js/module/hoverintent.js', array('jquery'), DIMA_VERSION, false);
        wp_enqueue_script('hoverintent');

        wp_register_script( 'bootstrap', DIMA_TEMPLATE_URL . '/framework/asset/site/js/module/bootstrap.min.js', array( 'jquery' ), DIMA_VERSION, false );
        wp_enqueue_script( 'bootstrap' );

        /**
	    * Load fitvids javascript
	     */
	    wp_enqueue_script( 'fitvids', DIMA_TEMPLATE_URL . '/framework/asset/site/js/module/jquery.fitvids.js', array(), DIMA_VERSION, true );


        wp_register_script('dima-js-main', DIMA_TEMPLATE_URL . '/framework/asset/site/js/main-es6.js', array('jquery'), DIMA_VERSION, true);
        wp_enqueue_script('dima-js-main');

        $js_vars = array(
            'is_rtl' => is_rtl(),
            'is_singular' => is_singular(),
        );

        wp_localize_script('jquery', 'pxdm_js', $js_vars);
        do_action( 'dima_website_schemas' );
        do_action( 'dima_action_organization_schemas' );
    }

endif;

if (!function_exists('dima_admin_scripts')):
    function dima_admin_scripts($hook)
{
        global $wp_customize;
        if (isset($wp_customize)) {
            return;
        }
        wp_enqueue_script(DIMA_THEME_NAME . '-pixeldima-global-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/pixeldima-global.js', array('jquery'), DIMA_VERSION, true);
        wp_enqueue_script('pixeldima-popper', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/popper.js', DIMA_VERSION, true);
        wp_enqueue_script('pixeldima-tippy', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/tippy.standalone.js', array('jquery'), DIMA_VERSION, true);

        if (strpos($hook, 'pixeldima-customizer-backup') != false) {
            wp_enqueue_script('dima-customizer-backup-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/dima-customizer-backup.js', array('jquery'), DIMA_VERSION, true);
        }

        if (strpos($hook, 'pixeldima-demo') != false) {
            wp_register_script('dima-demo-content-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/dima-demo-content.js', array('jquery'), DIMA_VERSION, true);
            wp_localize_script('dima-demo-content-js', 'DimaDemoAlert', array(
                'msg_debug' => (defined('SCRIPT_DEBUG') && SCRIPT_DEBUG),
                'msg_start' => esc_html__('Let&apos;s go!', 'risala'),
                'msg_working' => esc_html__('Working...!', 'risala'),
                'msg_timeoutA' => esc_html__('Please wait...!', 'risala'),
                'msg_timeoutB' => esc_html__('Hang in there, trying to reconnect...', 'risala'),
                'msg_timeoutC' => esc_html__('Experiencing technical difficulties...', 'risala'),
                'msg_fail' => esc_html__('We&apos;re sorry, but the demo data could not be imported.', 'risala'),
                'msg_complete' => esc_html__('All done. Have fun!', 'risala'),
            ));
            wp_enqueue_script('dima-demo-content-js');
        }

    }
endif;

if (!function_exists('dima_customizer_control_scripts')):
    function dima_customizer_control_scripts()
{
        wp_enqueue_script('dima-customizer-control-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/dima-custom-controls.js', array('jquery'), DIMA_VERSION, false);
        wp_enqueue_script('dima-customizer-conditional-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/dima-customizer-conditional.js', array('jquery'), DIMA_VERSION, false);
        wp_enqueue_script('wp-color-picker');
        wp_enqueue_style('wp-color-picker');
        wp_enqueue_script('wp-color-picker-alpha', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/wp-color-picker-alpha.js', array(
            'jquery',
            'wp-color-picker',
        ), DIMA_VERSION, true);
    }
endif;

if (!function_exists('dima_preview_customizer_scripts')):
    function dima_preview_customizer_scripts()
{
        wp_enqueue_script('dima-customizer-js', DIMA_TEMPLATE_URL . '/framework/asset/admin/js/dima-theme-customizer.js', array(
            'jquery',
            'customize-preview',
        ), DIMA_VERSION, true);
    }
endif;
