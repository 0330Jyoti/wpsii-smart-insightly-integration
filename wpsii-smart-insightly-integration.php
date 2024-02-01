<?php
/**
 * Plugin Name:       WPSII Smart Insightly Integration
 * Plugin URI:        https://profiles.wordpress.org/iqbal1486/
 * Description:       WP Insightly help you to manage and synch possible WordPress data like customers, orders, products to the Insightly modules as per your settings options.
 * Version:           2.1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Geekerhub
 * Author URI:        https://profiles.wordpress.org/iqbal1486/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpsii-smart-inisghtly
 * Domain Path:       /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit( 'restricted access' );
}

define( 'WPSII_VERSION', '1.0.0' );

if (! defined('WPSII_ADMIN_URL') ) {
    define('WPSII_ADMIN_URL', get_admin_url());
}

if (! defined('WPSII_PLUGIN_FILE') ) {
    define('WPSII_PLUGIN_FILE', __FILE__);
}

if (! defined('WPSII_PLUGIN_PATH') ) {
    define('WPSII_PLUGIN_PATH', plugin_dir_path(WPSII_PLUGIN_FILE));
}

if (! defined('WPSII_PLUGIN_URL') ) {
    define('WPSII_PLUGIN_URL', plugin_dir_url(WPSII_PLUGIN_FILE));
}

if (! defined('WPSII_REDIRECT_URI') ) {
    define('WPSII_REDIRECT_URI', admin_url( 'admin.php?page=wpsii_smart_insightly_process' ));
}

if (! defined('WPSII_SETTINGS_URI') ) {
    define('WPSII_SETTINGS_URI', admin_url( 'admin.php?page=wpsii-smart-insightly-integration' ));
}

if (! defined('WPSII_INSIGHTLY_APIS_URL') ) {
    $tld = "ly";
    // $wpsii_smart_insightly_settings  = get_option( 'wpsii_smart_insightly_settings' );
    // if( !empty($wpsii_smart_insightly_settings['data_center'])){
    //     $tld = end(explode(".", parse_url( $wpsii_smart_insightly_settings['data_center'], PHP_URL_HOST)));
    // }
    define('WPSII_INSIGHTLY_APIS_URL', 'https://api.insight.'.$tld);
}

function wpsii_smart_insightly_activate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class.activator.php';
	$WPSII_Smart_Insightly_Activator = new WPSII_Smart_Insightly_Activator();
    $WPSII_Smart_Insightly_Activator->activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function wpsii_smart_insightly_deactivate() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class.deactivator.php';
    WPSII_Smart_Insightly_Deactivator::deactivate();
}


/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpsii-smart-insightly.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function wpsii_smart_insightly_run() {
    $plugin = new WPSII_Smart_Insightly();
	$plugin->run();
}

register_activation_hook( __FILE__, 'wpsii_smart_insightly_activate' );
register_deactivation_hook( __FILE__, 'wpsii_smart_insightly_deactivate' );

wpsii_smart_insightly_run();

function wpsii_smart_insightly_textdomain_init() {
    load_plugin_textdomain( 'wpsii-smart-insightly', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action('plugins_loaded', 'wpsii_smart_insightly_textdomain_init');
?>