<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/derikitz/
 * @since             1.0.0
 * @package           Manual_Seo
 *
 * @wordpress-plugin
 * Plugin Name:       Manual SEO
 * Plugin URI:        https://github.com/derikitz/manual-seo
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Francis D
 * Author URI:        https://github.com/derikitz/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       manual-seo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MANUAL_SEO_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-manual-seo-activator.php
 */
function activate_manual_seo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-manual-seo-activator.php';
	Manual_Seo_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-manual-seo-deactivator.php
 */
function deactivate_manual_seo() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-manual-seo-deactivator.php';
	Manual_Seo_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_manual_seo' );
register_deactivation_hook( __FILE__, 'deactivate_manual_seo' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-manual-seo.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_manual_seo() {

	$plugin = new Manual_Seo();
	$plugin->run();

}
run_manual_seo();
