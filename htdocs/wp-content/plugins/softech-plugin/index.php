<?php

/**
 *
 * Plugin Name: Plugin pour le site SOFTECH 
 * Version: 1.0.0
 * Author: Thomas Florentin
 * Author URI: http://thomasflorentin.net
 * Text Domain: softech-plugin
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */
// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;


/**
 * DEFINE PATHS
 */
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_FUNC_PATH', PLUGIN_PATH . 'functions/');
define('PLUGIN_PT_PATH', PLUGIN_PATH . 'post_types/');
define('PLUGIN_TAXO_PATH', PLUGIN_PATH . 'taxonomies/');
define('PLUGIN_ACF_PATH', PLUGIN_PATH . 'acf/');
define('PLUGIN_UTILS_PATH', PLUGIN_PATH . 'utils/');


require_once(PLUGIN_UTILS_PATH . 'front.php');



/**
 * Post Types & Taxonomies
 */
// require_once(ODY_PT_PATH . 'post-types.php');

/**
 * Custom fields. Need ACF plugin.
 */
require_once(PLUGIN_ACF_PATH . 'acf.php');







