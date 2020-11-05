<?php
/**
 * Registers the plugins to be included via the TMG Plugin Activation class.
 *
 * @package tmg
 * @version   1.0.0
 * @since     1.0.0
 * @author    PixelDima <info@pixeldima.com>
 */


if ( ! function_exists( 'dima_register_theme_plugins' ) ) :

	add_action( 'tgmpa_register', 'dima_register_theme_plugins' );
	function dima_register_theme_plugins() {

		/*
		------------------------------*/
		// Theme plugins
		/*------------------------------*/
		$plugins = array(

			'caldera-forms'    => array(
				'name'               => 'Caldera Forms',
				'slug'               => 'caldera-forms',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'dima_author'        => 'caldera forms',
				'dima_plugin'        => 'caldera-forms/caldera-forms.php',
				'dima_description'   => 'Caldera Form is a free and powerful WordPress plugin that creates responsive forms with a simple drag and drop editor.',
				'dima_logo'          => '',
			),

			'autoptimize'      => array(
				'name'               => 'Autoptimize',
				'slug'               => 'autoptimize',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'dima_author'        => 'Frank Goossens (futtta)',
				'dima_plugin'        => 'autoptimize/autoptimize.php',
				'dima_description'   => 'Autoptimize makes optimizing your site really easy.',
				'dima_logo'          => '',
			),

			'dima-take-action' => array(
				'name'               => 'Dima Take Action',
				'slug'               => 'dima-take-action',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'dima_author'        => 'PixelDima',
				'dima_plugin'        => 'dima-take-action/dima-take-action.php',
				'dima_description'   => 'Adds a beautiful, customizable take action banner containe a promotion or a news to the top or the bottom of your WordPress site.',
				'dima_logo'          => '',
			),

			'wpforms-lite'     => array(
				'name'               => 'WPForms',
				'slug'               => 'wpforms-lite',
				'required'           => false,
				'force_activation'   => false,
				'force_deactivation' => false,
				'dima_author'        => 'WPForms',
				'dima_plugin'        => 'wpforms-lite/wpforms.php',
				'dima_description'   => 'Contact Form by WPForms – Drag & Drop Form Builder for WordPress',
				'dima_logo'          => '',
			),
		);

		/*
		------------------------------*/
		// TMG configuration
		/*------------------------------*/
		$config = array(
			'id'           => 'risala',
			'domain'       => 'risala',
			'default_path' => '',
			'parent_slug'  => 'themes.php',
			'menu'         => 'install-required-plugins',
			'has_notices'  => true,
			'dismissable'  => true,
			'is_automatic' => false,
			'message'      => '',
			'strings'      => array(
				'page_title'                      => esc_html__( 'Install Required Plugins', 'risala' ),
				'menu_title'                      => esc_html__( 'Install Plugins', 'risala' ),
				'installing'                      => esc_html__( 'Installing Plugin: %s', 'risala' ),
				'oops'                            => esc_html__( 'Something went wrong with the plugin API.', 'risala' ),
				'notice_can_install_required'     => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'risala' ),
				'notice_can_install_recommended'  => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'risala' ),
				'notice_cannot_install'           => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'risala' ),
				'notice_can_activate_required'    => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'risala' ),
				'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'risala' ),
				'notice_cannot_activate'          => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'risala' ),
				'notice_ask_to_update'            => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'risala' ),
				'notice_cannot_update'            => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'risala' ),
				'install_link'                    => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'risala' ),
				'activate_link'                   => _n_noop( 'Activate installed plugin', 'Activate installed plugins', 'risala' ),
				'return'                          => esc_html__( 'Return to Required Plugins Installer', 'risala' ),
				'plugin_activated'                => esc_html__( 'Plugin activated successfully.', 'risala' ),
				'complete'                        => esc_html__( 'All plugins installed and activated successfully. %s', 'risala' ),
				'nag_type'                        => 'updated',
			),
		);

		tgmpa( $plugins, $config );

	}
endif;


if ( ! function_exists( 'dima_remove_tgm_install_menu_item' ) ) :
	/**
	 * Remove "Install Plugins" Submenu Item
	 */
	function dima_remove_tgm_install_menu_item() {
		remove_submenu_page( 'themes.php', 'install-required-plugins' );
	}

	add_action( 'admin_menu', 'dima_remove_tgm_install_menu_item', 9999 );
endif;
