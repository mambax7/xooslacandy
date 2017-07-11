<?php
/**
 * Name: Functions
 * Description: Main Function file
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage :
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

$language = $GLOBALS['xoopsConfig']['language'];
if (!isset($language)) {
    xoops_setConfigOption('language', 'english');
}

define('_XCA_MODULE_DIR', basename(dirname(__DIR__)));
define('_XCA_MODULE_PATH', $GLOBALS['xoops']->path('/modules/' . _XCA_MODULE_DIR));
define('_XCA_MODULE_URL', $GLOBALS['xoops']->url('/modules/' . _XCA_MODULE_DIR));
define('_XCA_MODULE_CLASS', 'xca_');

$result = xca_CheckResource($upgrade);
if ($result === true) {
    $file = $GLOBALS['xoops']->pathExists(XOOPS_ROOT_PATH . '/modules/xooslacore/core/bootini.php', E_USER_WARNING);
    if ($file) {
        require_once $GLOBALS['xoops']->path('/modules/xooslacore/core/bootini.php');
    }
} else {
    include XOOPS_ROOT_PATH . '/header.php';
    echo _XL_ER_XCA_TECHISSUES;
    include XOOPS_ROOT_PATH . '/footer.php';
    exit();
}

/**
 * wfc_CheckResource()
 *
 * @param bool $upgrade
 * @return bool
 */
function xca_CheckResource($upgrade = false)
{
    global $xoopsUserIsAdmin, $xoopsConfig, $xoopsUser;

    /** @var XoopsModuleHandler $moduleHandler */
    $moduleHandler = xoops_getHandler('module');
    $module        = $moduleHandler->getByDirname(_XCA_MODULE_DIR);
    /**
     * XooslaCore Module
     */
    /** @var XoopsModuleHandler $moduleHandler */
    $moduleHandler = xoops_getHandler('module');
    $module        = $moduleHandler->getByDirname(_XCA_MODULE_DIR);
    $xooslaCore    = $moduleHandler->getByDirname('xooslacore');

    /**
     * First check. Because Xoops is DUMB and STUPID!! We cannot check by xoopsmodule->dirname and
     * we have to check if the module dir exists the gold ole fashioned way
     */
    if (is_object($xooslaCore)) {
        $core_installed = (int)$xooslaCore->getVar('version');
        $core_actual    = (int)$xooslaCore->getInfo('version');
    }

    $ret = 0;

    if (!is_object($xooslaCore) || !is_dir($GLOBALS['xoops']->path('modules/xooslacore'))) {
        $ret = 1;
    } elseif (!$xooslaCore->getVar('isactive')) {
        $ret = 2;
    } elseif ($core_installed < (int)(100 * ($module->getInfo('requires') + 0.001))) {
        $ret = 3;
    }

    if ($ret > 0) {
        if ($upgrade === true) {
            return false;
        } else {
            switch ($ret) {
                case 1:
                    $text = sprintf(_XL_ER_XCA_MISSING_MODULE, $module->getInfo('requires'));
                    break;
                case 2:
                    $text = sprintf(_XL_ER_XCA_NOTACTIVE, $module->getInfo('requires'));
                    break;
                case 3:
                    $text = sprintf(_XL_ER_XCA_NOTUPDATE, $module->getInfo('requires'));
                    break;
            } // switch
            include XOOPS_ROOT_PATH . '/header.php';
            echo ($xoopsUserIsAdmin === true) ? $text : _XL_ER_XCA_TECHISSUES;
            include XOOPS_ROOT_PATH . '/footer.php';
            exit();
        }

        return ($isUpgrade === true) ? true : false;
    } else {
        return true;
    }
}
