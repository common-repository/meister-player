<?php
/*
  Plugin Name: meister-player
  Plugin URI: http://meisterplayer.com
  Description: Videoplayer
  Version: 1.0.6
  Author: Meisterplayer.com
  Author URI: http://wearetriple.com
*/

/**
 * Kill plugin earlier if it wasn't called by wordpress
*/
if (!defined('WPINC')) {
	die;
}

/**
 * activation hook
 */
function activate_meisterplayer() {
  require_once plugin_dir_path(__FILE__) . 'includes/activator.php';
  Meisterplayer_Activator::activate();
}

/**
 * deactivation hook
 */
function deactivate_meisterplayer() {
    require_once plugin_dir_path(__FILE__) . 'includes/deactivator.php';
    Meisterplayer_Deactivator::deactivate();
}

// set the hooks
register_activation_hook( __FILE__, 'activate_meisterplayer' );
register_deactivation_hook( __FILE__, 'deactivate_meisterplayer' );

// require the main class
require plugin_dir_path(__FILE__) . 'includes/class-meisterplayer.php';

/**
 * Set and run the class
 */
function run_meisterplayer() {
    $plugin = new MeisterPlayer();
    $plugin->run();
}

run_meisterplayer();
