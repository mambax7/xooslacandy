<?php
/**
 * Name: Xoosla Candy Controller
 * Description:
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage : Controller Class
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: candy.php 0000 23/06/2010 03:04:26 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * CandyController
 *
 * @package
 * @author John
 * @copyright Copyright (c) 2010
 * @version $Id$
 * @access public
 */
class CandyController extends XooslaController {
    var $_helper;
    var $_view;
    /**
     * Constructor
     */
    function __construct() {
        // parent::__construct();
    }

    /**
     * CandyController::publish()
     *
     * @return
     */
    function publish() {
        $xca_id = XooslaRequest::doRequest( $_REQUEST, 'xca_id', 0, 'int' );
        if ( $xca_id > 0 ) {
            $obj = &$this->_model->get( $xca_id );
            $old = $obj->getVar( 'xca_active' );
            $obj->setVar( 'xca_active', !$old );
            if ( $this->_model->insert( $obj, true, null, true ) ) {
                exit;
            }
        }
    }

    /**
     * CandyController::uploadForm()
     *
     * @return
     */
    function edit() {
        $this->_view->setTemplate( 'xca_candyform.html' );
        $this->_view->setMenus( array( 'cancel' => _XL_AD_ICO_CANCEL, 'save' => _XL_AD_ICO_SAVE, 'apply' => _XL_AD_ICO_APPLY ) );
        $this->_view->addBreadcrumb( _XL_AD_XCA_MAINAREA, $_SERVER['PHP_SELF'] );
        $this->_view->addBreadcrumb( _XL_AD_NAV_EDIT );
        $this->_view->setTips( _XL_AD_XCA_TIPS );
        parent::edit();
    }

    /**
     * CandyController::frontDisplay()
     *
     * @return
     */
    function frontDisplay() {
        xoops_loadLanguage( 'admin', 'xooslacandy' );

        $this->_view->setTemplate( 'xca_candypopup.html' );
        $this->_view->assign( 'editor', $_REQUEST['editor'] );
        $this->_view->assign( 'id', $_REQUEST['id'] );
        $obj = &$this->_model->getList();
        if ( is_array( $obj ) && is_object( $obj[0] ) ) {
            $vars = $obj[0]->getVars();
            foreach ( $obj as $item ) {
                foreach ( array_keys( $vars ) as $var ) {
                    $candy[$var] = $item->getVar( $var, 'e' );
                }
                $this->_view->append_by_ref( 'candy', $candy );
                unset( $candy );
            }
        }
        $this->_view->displayPopUps();
    }

    /**
     * CandyController::display()
     *
     * @return $candy
     */
    function display() {
        $nav['sort'] = XooslaRequest::doRequest( $_REQUEST, 'sort', 'xca_id', 'textbox' );
        $nav['start'] = XooslaRequest::doRequest( $_REQUEST, 'start', 0, 'int' );
        $nav['order'] = XooslaRequest::doRequest( $_REQUEST, 'order', 'ASC', 'textbox' );
        $nav['limit'] = XooslaRequest::doRequest( $_REQUEST, 'limit', 10, 'int' );
        $nav['search'] = XooslaRequest::doRequest( $_REQUEST, 'search', '', 'textbox' );
        $nav['andor'] = XooslaRequest::doRequest( $_REQUEST, 'andor', 'OR', 'textbox' );

        $obj = &$this->_model->getObj( $nav );
        if ( $obj['count'] && count( $obj['list'] ) ) {
            foreach ( $obj['list'] as $item ) {
                $candy['id'] = $item->getVar( 'xca_id' );
                $candy['mid'] = $item->getVar( 'xca_mid' );
                $candy['macro'] = $item->getVar( 'xca_macro', 'e' );
                $candy['html'] = $item->getVar( 'xca_html', 'e' );
                $candy['weight'] = $item->getTextBox( 'xca_id', 'xca_weight', '2' );
                $candy['weight'] = $item->getTextBox( 'xca_id', 'xca_weight', '2' );
                $candy['active'] = $item->getVar( 'xca_active' );
                $candy['checkbox'] = $item->getCheckBox( 'xca_id' );
                $this->_view->append_by_ref( 'candy', $candy );
                unset( $candy );
            }
        }


        $this->_view->setTemplate( 'xca_candylist.html' );
        $this->_view->setMenus( array(
                'create' => _XL_AD_ICO_NEW,
                'edit' => _XL_AD_ICO_EDIT,
                'delete' => _XL_AD_ICO_DELETE,
                'duplicate' => _XL_AD_ICO_DUPLICATE,
                'update' => _XL_AD_ICO_UPDATE
                ) );
        $this->_view->setNavigation( $obj['count'], $nav['limit'], $nav['start'] );
        $this->_view->addBreadcrumb( _XL_AD_XCA_MAINAREA, $_SERVER['PHP_SELF'] );
        $this->_view->setTips( _XL_AD_XCA_TIPS );
        // $this->_view->setSelect( 'options => array(), 'name' => 'name', 'value' => 0 );
        $this->_view->setToolbar( 1 );
        $this->_view->display();
    }
}

?>