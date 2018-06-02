<?php namespace XoopsModules\Xooslacandy\Views;
/**
 * Name:
 * Description:
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage :
 * @since      : v1.00
 * @author     John Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */

use XoopsModules\Xooslacandy;
use XoopsModules\Xooslacore;

defined('XOOPS_ROOT_PATH') || die('Restricted access');

/**
 * Xoosla Candy
 *
 * @package
 * @author    John
 * @copyright Copyright (c) 2010
 * @version   $Id$
 * @access    public
 */
class CandyView extends Xooslacore\Core\XooslaView
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * CandyView::displayPopUps()
     *
     */
    public function displayPopUps()
    {
        echo $this->fetch($GLOBALS['xoops']->path('modules/' . $GLOBALS['xoopsModule']->getVar('dirname') .  '/templates/' . $this->template));
    }
}
