<?php
/**
 * Name: Menu
 * Description: This file controls most of the menu for the module
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage : Admin
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: menu.php 0000 21/06/2010 13:03:59 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

$module_handler = &xoops_gethandler( 'module' );
$xca_module = &$module_handler->getByDirname( basename( dirname( dirname( __FILE__ ) ) ) );
$mid = $xca_module->getVar( 'mid' );
$module = $xca_module->getVar( 'dirname' );
unset( $xca_module );

$adminmenu[] = array(
    'absolute' => true,
    'title' => _XL_MI_ADM_INDEX,
    'link' => XOOPS_URL . '/modules/' . $module . '/admin/index.php',
    'icon' => 'home.png'
    );

$adminmenu[] = array(
    'absolute' => true,
    'title' => _XL_MI_ADM_ICONABOUT,
    'link' => XOOPS_URL . '/modules/' . $module . '/admin/index.php?op=about',
    'icon' => 'info.png'
    );

$adminmenu[] = array(
    'absolute' => true,
    'title' => _XL_MI_ADM_MODULETEMPLATES,
    'link' => XOOPS_URL . '/modules/system/admin.php?fct=tplsets&op=listtpl&tplset=default&moddir=' . $module,
    'icon' => 'tpls.png'
    );

$adminmenu[] = array(
    'absolute' => true,
    'title' => _XL_MI_ADM_MODULEUPDATE,
    'link' => XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin&op=update&module=' . $module,
    'icon' => 'update.png'
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
?>