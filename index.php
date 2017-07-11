<?php
/**
 * Name: index
 * Description: This file deals with most of the admin tasks for Xoosla Candy
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage : User listing Area
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: index.php 0000 21/06/2010 12:59:09 Catzwolf $
 */
include 'header.php';

error_reporting( 0 );
$GLOBALS['xoopsLogger']->activated = false;

if ( !isset( $_SERVER['HTTP_REFERER'] ) ) {
    exit();
}

$upgrade = false;
require_once XOOPS_ROOT_PATH . '/modules/' . $GLOBALS['xoopsModule']->getVar( 'dirname' ) . '/include/functions.php';
$xoosla = XooslaLoad::getClass( 'kernel' );
$xoosla->setTask( 'frontDisplay' );
$xoosla->__C( 'candy' );

?>