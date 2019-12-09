<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://pspmo.org
 * @since      1.0.0
 *
 * @package    Pspmo_Members_Only
 * @subpackage Pspmo_Members_Only/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pspmo_Members_Only
 * @subpackage Pspmo_Members_Only/includes
 * @author     PSPMO Engineering Team <duane@pspmo.org>
 */
class Pspmo_Members_Only_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pspmo-members-only',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
