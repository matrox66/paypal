<?php
/**
 * Apply updates to Paypal during development.
 * Calls upgrade function with "ignore_errors" set so repeated SQL statements
 * won't cause functions to abort.
 *
 * Only updates from the previous released version.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (c) 2018 Lee Garner <lee@leegarner.com>
 * @package     paypal
 * @version     v0.6.1
 * @since       v0.6.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 */

require_once '../../../lib-common.php';

// If plugin is not installed or not enabled, display an error and exit gracefully
if (!isset($_PP_CONF) || !in_array($_PP_CONF['pi_name'], $_PLUGINS)) {
    echo "This plugin is either not installed or not enabled.";
    exit;
}

if (!SEC_inGroup('Root')) {
    // Someone is trying to illegally access this page
    COM_errorLog("Someone has tried to access the Paypal Development Code Upgrade Routine without proper permissions.  User id: {$_USER['uid']}, Username: {$_USER['username']}, IP: " . $_SERVER['REMOTE_ADDR'],1);
    COM_404();
    exit;
}
require_once PAYPAL_PI_PATH . '/upgrade.inc.php';   // needed for set_version()

if (function_exists('CACHE_clear')) {
    CACHE_clear();
}
\Paypal\Cache::clear();

// Force the plugin version to the previous version and do the upgrade
$_PLUGIN_INFO['paypal']['pi_version'] = '0.5.11';
PAYPAL_do_upgrade(true);

// need to clear the template cache so do it here
if (function_exists('CACHE_clear')) {
    CACHE_clear();
}
header('Location: '.$_CONF['site_admin_url'].'/plugins.php?msg=600');
exit;

?>
