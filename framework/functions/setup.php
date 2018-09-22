<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

define('DIMA_THEME_NAME', "risala");
define('DIMA_THEME_FOLDER', "risala");
define('DIMA_VERSION', wp_get_theme(DIMA_THEME_NAME)->get('Version'));
define('DIMA_SITE_URL', site_url());
define('DIMA_TEMPLATE_PATH', get_template_directory());
define('DIMA_TEMPLATE_URL', get_template_directory_uri());
define('DIMA_JETPACK_IS_ACTIVE', class_exists('Jetpack'));
define('DIMA_AMP_IS_ACTIVE', class_exists('AMP_Customizer_Settings'));
define('DIMA_GUTENBERG_IS_ACTIVE', function_exists('the_gutenberg_project'));

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function risala_content_width()
{
    $GLOBALS['content_width'] = dima_helper::dima_get_option('dima_content_max_width', 1170);
}

add_action('after_setup_theme', 'risala_content_width', 0);

if (!function_exists('risala_setup')):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */

    function risala_setup_theme(){

        global $dima_theme_image_sizes;

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on risala, use a find and replace
         * to change 'risala' to the name of your theme in all the template files.
         */
        load_theme_textdomain('risala', DIMA_TEMPLATE_PATH . '/languages');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        // Enables Automatic Feed Links for post and comment in the head
        add_theme_support('automatic-feed-links');

        // Allows a theme to register support "Post Formats"
        add_theme_support('post-formats', array('link', 'gallery', 'quote', 'image', 'video', 'audio', 'chat'));

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'comment-form',
            'gallery',
        ));

        // Add editor style
        add_editor_style( 'framework/asset/admin/css/editor-style.min.css' );
        
        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 105,
            'flex-width' => true,
            'flex-height' => true,
        ));


        // Add excerpt support to pages
	    add_post_type_support( 'page', 'excerpt' );

        // Add support for full and wide align images.
        add_theme_support('align-wide');

        // WordPress menus.
        $arr_list_of_menu = array(
            'primary' => esc_html__('Primary Menu', 'risala'),
            'social' => esc_html__('Social Icon Menu', 'risala'),
        );
        if (DIMA_AMP_IS_ACTIVE) {
            $arr_list_of_menu['dima_amp_menu'] = esc_html__('AMP Menu', 'risala');
        }
        register_nav_menus($arr_list_of_menu);

        $dima_theme_image_sizes = array(
            'dima-big-image-single' => array('1170', '9999', false),
            'dima-post-standard-image' => array('870', '575', true),
        );

        $dima_theme_image_sizes_array = apply_filters('dima_filter_theme_image_sizes', $dima_theme_image_sizes);

        if (is_array($dima_theme_image_sizes_array)) {
            foreach ($dima_theme_image_sizes as $image_size_name => $image_size_info) {
                add_image_size($image_size_name, $image_size_info[0], $image_size_info[1], $image_size_info[2]);
            }
        }

        /*------------------------------*/
	    # Adding Gutenberg Support to theme
        /*------------------------------*/
        if ( function_exists( 'the_gutenberg_project' ) ) {
            $color_palette = [
                [
                    'name'  => __( 'Main', 'risala' ),
                    'slug'  => 'cl-dima-main',
                    'color' => '#ffe082',
                ],
                [
                    'name'  => __( 'white', 'risala' ),
                    'slug'  => 'cl-dima-white',
                    'color' => '#FFFFFF',
                ],
                [
                    'name'  => __( 'paragraph', 'risala' ),
                    'slug'  => 'cl-dima-paragraph',
                    'color' => '#616161',
                ],
                [
                    'name'  => __( 'headline', 'risala' ),
                    'slug'  => 'cl-dima-headline',
                    'color' => '#222222',
                ],
                [
                    'name'  => __( 'border', 'risala' ),
                    'slug'  => 'cl-dima-border',
                    'color' => '#e0e0e0',
                ],
                [
                    'name'  => __( 'Error', 'risala' ),
                    'slug'  => 'cl-dima-error',
                    'color' => '#ff5252',
                ],
                [
                    'name'  => __( 'Warning', 'risala' ),
                    'slug'  => 'cl-dima-warning',
                    'color' => '#ffc107',
                ],
                [
                    'name'  => __( 'Success', 'risala' ),
                    'slug'  => 'cl-dima-success',
                    'color' => '#4caf50',
                ],
                [
                    'name'  => __( 'Info', 'risala' ),
                    'slug'  => 'cl-dima-info',
                    'color' => '#2196f3',
                ],
            ];
    
            add_theme_support( 'align-wide' );
            add_theme_support( 'editor-color-palette', $color_palette );

        }



    }
endif;
add_action('after_setup_theme', 'risala_setup_theme');
