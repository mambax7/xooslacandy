<?php
/**
 * Name: index
 * Description: This file deals with most of the admin tasks for Xoosla Candy
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : User listing Area
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */

use Xmf\Request;
use XoopsModules\Xooslacore;
use XoopsModules\Xooslacore\Core;

include __DIR__ . '/header.php';

error_reporting(0);
$GLOBALS['xoopsLogger']->activated = false;

//if (null !== Request::getString('HTTP_REFERER', '', 'SERVER')) {
//    exit();
//}

$upgrade = false;
require_once XOOPS_ROOT_PATH . '/modules/' . $GLOBALS['xoopsModule']->getVar('dirname') . '/include/functions.php';

$xoosla = new \XoopsModules\Xooslacore\XooslaKernel();
$xoosla->setTask('frontDisplay');
$xoosla->__C('candy');
