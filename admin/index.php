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
include __DIR__ . '/admin_header.php';

$xoosla = XooslaLoad::getClass('kernel');
// $xoosla->setTask( 'display' );
$xoosla->__C('candy');
