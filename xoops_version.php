<?php
/**
 * Name: Xoops Version
 * Description: Xoops Version file
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage :
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: xoops_version.php 0000 21/06/2010 12:41:47 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );
/**
 * Module Details
 */

$modversion['name'] = _XL_XCA_CANDY;
$modversion['version'] = 1.00;
$modversion['requires'] = 1.00;
$modversion['description'] = _XL_XCA_CANDY_DSC;
$modversion['releasedate'] = '';
$modversion['author'] = XL_MI_XOOSLA_AUTHOR;
$modversion['credits'] = XL_MI_XOOSLA_CREDITS;
$modversion['status'] = XL_MI_XOOSLA_STATUS;
$modversion['lead'] = XL_MI_XOOSLA_LEAD;
$modversion['contributors'] = XL_MI_XOOSLA_CONTRIBUTORS;
$modversion['website_url'] = 'http://www.xoosla.com';
$modversion['website_name'] = 'Xoosla Modules';
$modversion['email'] = 'support@xoosla.com';
$modversion['demo_site_url'] = '';

$modversion['demo_site_name'] = '';
$modversion['support_site_url'] = '';
$modversion['support_site_name'] = 'Offical Support Website';
$modversion['submit_bug_url'] = 'http://code.google.com/p/xoosla-modules/issues/list';
$modversion['submit_bug_name'] = 'Bug Submission';
$modversion['submit_feature_url'] = '';
$modversion['submit_feature_name'] = '';
$modversion['disclaimer'] = _XL_XCA_DISCLAIMER;
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/xooslacandy_mlogo.png';
$modversion['dirname'] = basename( dirname( __FILE__ ) );

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
$modversion['hasAdmin'] = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu'] = 'admin/menu.php';

/**
 * Additionnal script executed during install update
 */
$modversion['onInstall'] = 'include/oninstall.php';
$modversion['onUpdate'] = 'include/onupdate.php';
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
$modversion['config'][] = array( 'name' => 'usemacros',
    'title' => '_XL_MI_ADM_USEMACROS',
    'description' => '_XL_MI_ADM_USEMACROS_DSC',
    'formtype' => 'group_multi',
    'valuetype' => 'array',
    'default' => array( '1 2 3' )
    );

?>