<?php namespace XoopsModules\Xooslacandy\Models;

/**
 * Name: Candy Class
 * Description: This is the main class for candy
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : Class
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */

use XoopsModules\Xooslacore;

defined('XOOPS_ROOT_PATH') || die('Restricted access');

/**
 * Long Description
 *
 * @abstract
 * @package    Xoosla Modules
 * @subpackage Application
 * @since
 */
class CandyObject extends Xooslacore\Core\XooslaObject
{
    /**
     * Class constructor.
     *
     * @internal param $ $
     */
    public function __construct()
    {
        parent::__construct();
        $this->initVar('xca_id', XOBJ_DTYPE_INT, null, false);
        $this->initVar('xca_mid', XOBJ_DTYPE_INT, null, false);
        $this->initVar('xca_macro', XOBJ_DTYPE_TXTAREA, null, true);
        $this->initVar('xca_html', XOBJ_DTYPE_TXTAREA, null, true);
        $this->initVar('xca_weight', XOBJ_DTYPE_INT, 0, false, 5);
        $this->initVar('xca_active', XOBJ_DTYPE_INT, 1, false);
    }
}

