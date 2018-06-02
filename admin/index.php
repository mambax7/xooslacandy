<?php
/**
 * Name: Admin index
 * Description: This file deals with most of the admin tasks for Xoosla Candy
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : Admin Area
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */

use XoopsModules\Xooslacore;
use XoopsModules\Xooslacore\Core;

include __DIR__ . '/admin_header.php';

//$xoosla = Xooslacore\Core\XooslaLoad::getClass('kernel');

$xoosla = new \XoopsModules\Xooslacore\XooslaKernel();

/**
 * Switch
 */
/*
$op = Xooslacore\XooslaRequest::getString('op', 'default');
switch ($op) {
    case 'help':
        $xooslaModel->help();
        break;

    case 'about':
//        $xooslaModel->help();
        require __DIR__ .'/'.$op.'.php';
        break;

    case 'default':
        $xoosla->setTask( 'display' );
        $xoosla->__C('candy');
}
*/
//$xoosla->setTask( 'display' );
$xoosla->__C('candy');



