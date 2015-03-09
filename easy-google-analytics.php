<?php

/**
 *
 * @wordpress-plugin
 * Plugin Name:       Easy Google Analytics
 * Plugin URI:        http://www.mbjtechnolabs.com
 * Description:       Enables google analytics for WordPress website.
 * Version:           1.0.0
 * Author:            phpwebcreators
 * Author URI:        http://www.mbjtechnolabs.com
 * License:           GNU General Public License v3.0
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:       google-analytics-ga
 * Domain Path:       /languages
 */
// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-google-analytics-activator.php
 */
function activate_eas_google_analytics() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-easy-google-analytics-activator.php';
    MBJ_Easy_Google_Analytics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-google-analytics-deactivator.php
 */
function deactivate_eas_google_analytics() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-easy-google-analytics-deactivator.php';
    MBJ_Easy_Google_Analytics_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_eas_google_analytics');
register_deactivation_hook(__FILE__, 'deactivate_eas_google_analytics');

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-easy-google-analytics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_eas_google_analytics() {

    $plugin = new MBJ_Easy_Google_Analytics();
    $plugin->run();
}

run_eas_google_analytics();
