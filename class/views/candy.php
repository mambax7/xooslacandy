<?php
/**
 * Name:
 * Description:
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage :
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: candy.php 0000 23/06/2010 03:12:02 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * Xoosla Candy
 *
 * @package
 * @author John
 * @copyright Copyright (c) 2010
 * @version $Id$
 * @access public
 */
class CandyView extends XooslaView {
    /**
     * Constructor
     */
    function __construct() {
    }

    /**
     * CandyView::displayPopUps()
     *
     * @return
     */
    function displayPopUps() {
        echo $this->fetch( $GLOBALS['xoops']->path( 'modules' . DS . $GLOBALS['xoopsModule']->getVar( 'dirname' ) . DS . 'templates' . DS . $this->template ) );
    }
}

?>