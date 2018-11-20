<?php
/**
 * Configuration Defaults Paypal plugin for glFusion.
 * Based on the gl-paypal Plugin for Geeklog CMS.
 *
 * @author      Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (c) 2009-2018 Lee Garner <lee@leegarner.com>
 * @copyright   Copyright (C) 2005-2006 Vincent Furia <vinny01@users.sourceforge.net>
 * @package     paypal
 * @version     0.6.0
 * @license     http://opensource.org/licenses/gpl-2.0.php
 *              GNU Public License v2 or later
 * @filesource
 *
 */

// This file can't be used on its own
if (!defined ('GVERSION')) {
    die ('This file can not be used on its own.');
}

/** @var global config data */
global $paypalConfigData;
$paypalConfigData = array(
    array(
        'name' => 'sg_main',
        'default_value' => NULL,
        'type' => 'subgroup',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'fs_main',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'admin_email_addr',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'currency',
        'default_value' => 'USD',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'anon_buy',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'menuitem',
        'default_value' => true,
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'order',
        'default_value' => 'name',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 5,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'prod_per_page',
        'default_value' => '10',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 60,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'cat_columns',
        'default_value' => '3',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 70,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'catalog_columns',
        'default_value' => '5',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 80,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'show_plugins',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 90,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'ena_comments',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 100,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'ena_ratings',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 110,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'anon_can_rate',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 120,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'displayblocks',
        'default_value' => '3',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 13,
        'sort' => 130,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'centerblock',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 140,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'ena_cart',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 150,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'weight_unit',
        'default_value' => 'lbs',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 15,
        'sort' => 160,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'tc_link',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 170,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'days_purge_cart',
        'default_value' => '14',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 180,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'days_purge_pending',
        'default_value' => '180',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 190,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'product_tpl_ver',
        'default_value' => 'v2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 200,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'list_tpl_ver',
        'default_value' => 'v2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 210,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_paths',               // Paths fieldset
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'max_images',
        'default_value' => '3',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'max_image_size',
        'default_value' => '4194304',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'max_thumb_size',
        'default_value' => '250',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'img_max_width',
        'default_value' => '800',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'img_max_height',
        'default_value' => '600',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'max_file_size',
        'default_value' => '8',     // MB
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 60,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_prod_defaults',   // Products Defaults and Views
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_enabled',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 2,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_taxable',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 2,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_featured',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 2,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_expiration',
        'default_value' => '3',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_track_onhand',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 2,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'def_oversell',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 20,
        'selection_array' => 16,
        'sort' => 60,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_blocks',   // Plugin block control
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 30,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'blk_random_limit',
        'default_value' => '1',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 30,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'blk_featured_limit',
        'default_value' => '1',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 30,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'blk_popular_limit',
        'default_value' => '1',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 30,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'cache_max_age',
        'default_value' => '900',
        'type' => 'text',
        'subgroup' => 0,
        'fieldset' => 30,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_debug',   // Debugging settings
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 40,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'debug',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 40,
        'selection_array' => 2,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'debug_ipn',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 40,
        'selection_array' => 2,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_addresses',   // Address Collection
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'get_street',
        'default_value' => '2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => 14,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'get_city',
        'default_value' => '2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => 14,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'get_state',
        'default_value' => '2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => 14,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'get_country',
        'default_value' => '2',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => 14,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'get_postal',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 0,
        'fieldset' => 50,
        'selection_array' => 14,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    // Shop Information SG
    array(
        'name' => 'sg_shop',
        'default_value' => NULL,
        'type' => 'subgroup',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'fs_shop',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'shop_name',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'shop_addr',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'shop_phone',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'shop_email',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'tax_rate',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 0,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'purge_sale_prices',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 10,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 60,
        'set' => true,
        'group' => 'paypal',
    ),
    // Gift Card SG
    array(
        'name' => 'sg_gc',
        'default_value' => NULL,
        'type' => 'subgroup',
        'subgroup' => 20,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'fs_gc',
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 20,
        'fieldset' => 0,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_enabled',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 20,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_exp_days',
        'default_value' => '365',
        'type' => 'text',
        'subgroup' => 20,
        'fieldset' => 0,
        'selection_array' => 2,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),

    array(
        'name' => 'fs_gc_format',       // Gift Card Formatting
        'default_value' => NULL,
        'type' => 'fieldset',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => NULL,
        'sort' => 0,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_letters',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 17,
        'sort' => 10,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_numbers',
        'default_value' => '1',
        'type' => 'select',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 2,
        'sort' => 20,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_symbols',
        'default_value' => '0',
        'type' => 'select',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 2,
        'sort' => 30,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_prefix',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 40,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_suffix',
        'default_value' => '',
        'type' => 'text',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 50,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_length',
        'default_value' => '10',
        'type' => 'text',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 60,
        'set' => true,
        'group' => 'paypal',
    ),
    array(
        'name' => 'gc_mask',
        'default_value' => 'XXXX-XXXX-XXXX-XXXX',
        'type' => 'text',
        'subgroup' => 20,
        'fieldset' => 10,
        'selection_array' => 0,
        'sort' => 70,
        'set' => true,
        'group' => 'paypal',
    ),
);


/**
 * Initialize Paypal plugin configuration
 *
 * No longer imports a pre-0.4.0 config.php. Only configuration items shown
 * above are imported.
 *
 * @param   integer $group_id   Admin Group ID (not used)
 * @return  boolean             True
 */
function plugin_initconfig_paypal($group_id = 0)
{
    global $paypalConfigData;

    $c = config::get_instance();
    if (!$c->group_exists('paypal')) {
        USES_lib_install();
        foreach ($paypalConfigData AS $cfgItem) {
            _addConfigItem($cfgItem);
        }
    } else {
        COM_errorLog('initconfig error: Paypal config group already exists');
    }
    return true;
}

?>
