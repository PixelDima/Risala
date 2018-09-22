<?php
/**
 * Sets up theme defaults
 *
 * @package tmg
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 */

if (!class_exists('DIMA_TGM_Automatic_Update')) :

    class DIMA_TGM_Automatic_Update
    {

        function __construct()
        {
            add_filter('pre_set_site_transient_update_plugins', array(&$this, 'dima_add_updates'));
            add_filter('plugins_api', array($this, 'dima_override_view_details'), 10, 3);
        }

        // Block wordpress.org repo for plugins with dima_plugin_upgrade set.
        function dima_override_view_details($res, $args)
        {

            foreach (TGM_Plugin_Activation::$instance->plugins as $plugin) {
                if (isset($args->slug) && $args->slug == $plugin['slug'] && isset($plugin['dima_plugin_upgrade']) && $plugin['dima_plugin_upgrade'] == true) {

                    $res = new stdClass;
                    $res->name = $plugin['name'];
                    $res->slug = $plugin['slug'];
                    $res->version = $plugin['version'];
                    $res->package = $plugin['source'];
                    $res->sections = array('description' => sprintf(esc_html__('This plugin is bundled with %s.','risala'),DIMA_THEME_NAME));
                    return $res;

                }
            }

            return $res;

        }

        /**
         * Add outdated plugins to the update transient
         *
         * @param $transient
         * @return mixed
         */
        function dima_add_updates($transient)
        {
            $installed_plugins = get_plugins();

            foreach (TGM_Plugin_Activation::$instance->plugins as $plugin) {
                if (isset($installed_plugins[$plugin['dima_plugin']]['Version']) && isset($plugin['version']) && isset($plugin['dima_plugin_upgrade']) && $plugin['dima_plugin_upgrade'] == true && version_compare($installed_plugins[$plugin['dima_plugin']]['Version'], $plugin['version'], '<')) {

                    $response = new stdClass;
                    $response->url = '';
                    $response->slug = $plugin['slug'];
                    $response->upgrade_notice = '';
                    $response->new_version = $plugin['version'];
                    $response->package = $plugin['source'];
                    $transient->response[$plugin['dima_plugin']] = $response;
                }
            }
            return $transient;
        }
    }

    if (class_exists('TGM_Plugin_Activation')) {
        new DIMA_TGM_Automatic_Update();
    }

endif;