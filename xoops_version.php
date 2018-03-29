<?php
/**
 * Name: Xoops Version
 * Description: Xoops Version file
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage :
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */
defined('XOOPS_ROOT_PATH') || die('Restricted access');

require_once __DIR__ . '/preloads/autoloader.php';

/**
 * Module Details
 */

$modversion['version']             = 1.00;
$modversion['requires']            = 1.00;
$modversion['module_status']       = 'Beta 1';
$modversion['release_date']        = '2017/05/14';
$modversion['name']                = _XL_XCA_CANDY;
$modversion['description']         = _XL_XCA_CANDY_DSC;
$modversion['author']              = XL_MI_XOOSLA_AUTHOR;
$modversion['credits']             = XL_MI_XOOSLA_CREDITS;
$modversion['status']              = XL_MI_XOOSLA_STATUS;
$modversion['lead']                = XL_MI_XOOSLA_LEAD;
$modversion['contributors']        = XL_MI_XOOSLA_CONTRIBUTORS;
$modversion['website_url']         = 'http://www.xoosla.com';
$modversion['website_name']        = 'Xoosla Modules';
$modversion['email']               = 'support@xoosla.com';
$modversion['demo_site_url']       = '';
$modversion['demo_site_name']      = '';
$modversion['support_site_url']    = '';
$modversion['support_site_name']   = 'Offical Support Website';
$modversion['submit_bug_url']      = 'http://code.google.com/p/xoosla-modules/issues/list';
$modversion['submit_bug_name']     = 'Bug Submission';
$modversion['submit_feature_url']  = '';
$modversion['submit_feature_name'] = '';
$modversion['disclaimer']          = _XL_XCA_DISCLAIMER;
$modversion['license']             = 'GPL see LICENSE';
$modversion['official']            = 0;
$modversion['image']               = 'images/xooslacandy_mlogo.png';
$modversion['dirname']             = basename(__DIR__);

/**
 * SQL
 */
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

/**
 * Mysql Tables
 */
$modversion['tables'][] = 'xca_candy';

/**
 * Admin things
 */
$modversion['hasAdmin']    = 1;
$modversion['system_menu'] = 1;
$modversion['adminindex']  = 'admin/index.php';
$modversion['adminmenu']   = 'admin/menu.php';

/**
 * Additionnal script executed during install update
 */
$modversion['onInstall']   = 'include/oninstall.php';
$modversion['onUpdate']    = 'include/onupdate.php';
$modversion['onUninstall'] = 'include/onuninstall.php';

/**
 * Frontend
 */
$modversion['hasMain'] = 0;

/**
 * Frontend
 */
$modversion['hasSearch'] = 0;

/**
 * Comments
 */
$modversion['hasComments'] = 0;

/**
 * Notifications
 */
$modversion['hasNotification'] = 0;

// ------------------- Help files ------------------- //
$modversion['helpsection'] = [
    ['name' => _MI_XOOSLA_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_XOOSLA_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_XOOSLA_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_XOOSLA_SUPPORT, 'link' => 'page=support'],
];

/**
 * Blocks
 */

/**
 * Templates
 */
#$modversion['templates'][] = array(
#    'file' => '',
#    'description' => ''
#    );
/**
 * Module Configuration
 */
$modversion['config'][] = [
    'name'        => 'usemacros',
    'title'       => '_XL_MI_ADM_USEMACROS',
    'description' => '_XL_MI_ADM_USEMACROS_DSC',
    'formtype'    => 'group_multi',
    'valuetype'   => 'array',
    'default'     => ['1 2 3']
];
