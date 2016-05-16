<?php

/**
 * @link              sydev.de
 * @since             1.0.0
 * @package           Featured_Text
 *
 * @wordpress-plugin
 * Plugin Name:       Featured Text
 * Plugin URI:        sydev.de
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Dominik Winter
 * Author URI:        sydev.de
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       featured-text
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) die;

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-featured-text-activator.php
 */
function activate_featured_text() {}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-featured-text-deactivator.php
 */
function deactivate_featured_text() {}

register_activation_hook( __FILE__, 'activate_featured_text' );
register_deactivation_hook( __FILE__, 'deactivate_featured_text' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'featured-text.class.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_featured_text() {
	$plugin = new FeaturedText();
	$plugin->run();
}
run_featured_text();
