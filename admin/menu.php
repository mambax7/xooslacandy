<?php
/**
 * Name: Menu
 * Description: This file controls most of the menu for the module
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : Admin
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

/** @var XoopsModuleHandler $moduleHandler */
$moduleHandler = xoops_getHandler('module');
$xca_module    = $moduleHandler->getByDirname(basename(dirname(__DIR__)));
$mid           = $xca_module->getVar('mid');
$module        = $xca_module->getVar('dirname');
unset($xca_module);

$adminmenu[] = array(
    'absolute' => true,
    'title'    => _XL_MI_ADM_INDEX,
    'link'     => 'admin/index.php',
    'icon'     => 'home.png'
);

$adminmenu[] = array(
    'absolute' => true,
    'title'    => _XL_MI_ADM_ICONABOUT,
    'link'     => 'admin/index.php?op=about',
    'icon'     => 'info.png'
);

global $menus;
// $menus['link'][] = array( 'thisisalink', _XL_MI_ADM_LINK );
/**
 * Menu Icons
 */
// $menus['icon'][] = array( 'about', _XL_MI_ADM_ICONABOUT );
// $menus['icon'][] = array( 'help', _XL_MI_ADM_ICONHELP );
/**
 * Menu Tabs
 */
// $menus['tab'][] = array( 'index.php', _XL_MI_ADM_INDEX );
