<?php
/**
 * Name: Admin header file
 * Description: Include Xoops admin files and classes
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : Admin
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */
include  dirname(dirname(dirname(__DIR__))) . '/include/cp_header.php';
$upgrade = false;

require_once XOOPS_ROOT_PATH . '/modules/' . $GLOBALS['xoopsModule']->getVar('dirname') . '/include/functions.php';
