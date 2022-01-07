<?php
/**
 * Simple boilerpate for a WordPress Plugin.
 *
 * @package WordPressPluginPackage
 * @author            Your Name
 * @copyright         2022 Your Name or Company Name
 * @license           GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name:       Sample Boilerplate Plugin Name
 * Plugin URI:        https://example.com/plugin-name
 * Description:       Description of the plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Your Name
 * Author URI:        https://example.com
 * Text Domain:       plugin-slug
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Update URI:        https://example.com/my-plugin/
 *
 * {Plugin Name} is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * {Plugin Name} is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with {Plugin Name}. If not, see {URI to Plugin License}.
 */

/**
 * Plugin Boilerplate.
 */
class Plugin_Boilerplate {

	/**
	 * Constructor.
	 */
	public function __construct() {
		register_activation_hook( __FILE__, array( $this, 'activate' ) );
		register_deactivation_hook( __FILE__, array( $this, 'deactivate' ) );
		register_uninstall_hook( __FILE__, array( $this, 'uninstall' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue' ) );
	}

	/**
	 * Enqueue.
	 *
	 * @return void
	 */
	public function enqueue(): void {

		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_register_style(
			'sample-plugin-css',
			plugins_url( 'assets/css/style.css', __FILE__ )
		);

		// phpcs:ignore WordPress.WP.EnqueuedResourceParameters.MissingVersion
		wp_enqueue_style( 'sample-plugin-css' );

		$deps   = array();
		$ver    = '007';
		$footer = true;
		wp_enqueue_script(
			'query-monitor',
			plugins_url( 'assets/js/app.js', __FILE__ ),
			$deps,
			$ver,
			$footer
		);
	}

	/**
	 * Activate.
	 *
	 * Run any activation code here.  Maybe create dependencies like pages or posts.  Set options. Setup database.
	 *
	 * @return void
	 */
	public function activate():void {

	}

	/**
	 * Deactivate.
	 *
	 * Run any deactivation code here. Remove any temp files.
	 *
	 * @return void
	 */
	public function deactivate():void {

	}

	/**
	 * Uninstall.  Delete all data permanently.
	 *
	 * Run any uninstall code here.  Maybe cleanup dependencies, options, tidy database etc.
	 *
	 * @return void
	 */
	public function uninstall():void {

	}
}

$plugin_boilerplate = new Plugin_Boilerplate();
