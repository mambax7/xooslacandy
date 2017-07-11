<?php
/**
 * Name: Admin index
 * Description: This file deals with most of the admin tasks for Xoosla Candy
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage : Admin Area
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: index.php 0000 21/06/2010 12:59:09 Catzwolf $
 */
include 'admin_header.php';

/**
 * Instance the call back
 */
$handler = &xoosla_loadHandler( 'candy', _MODULE_DIR, _MODULE_CLASS );
$xooslaModel = &xoosla_loadObjectCallback( $handler, $mhandler );
$xooslaModel->mHandler->setMenu( 0 );
$xooslaModel->mHandler->addHeader( _XL_XCA_MAINAREA );

/**
 * Switch
 */
$op = XooslaRequest::getString( 'op', 'default' );
switch ( $op ) {
    case 'help':
        $xooslaModel->help();
        break;

    case 'about':
        $xooslaModel->help();
        break;

    case 'edit':
        $xooslaModel->edit();
        break;

    case 'delete':
        $xooslaModel->delete();
        break;

    case 'deleteall':
        $xooslaModel->deleteall();
        break;

    case 'duplicate':
        $xooslaModel->duplicate();
        break;

    case 'duplicateall':
        $xooslaModel->duplicateall();
        break;

    case 'updateall':
        $xooslaModel->updateall( array( 'xca_weight', 'xca_active' ) );
        break;

    case 'save':
        $options['noreturn'] = true;
        $xooslaModel->save( $options );
        break;

    case 'default':
    default:

        $tlist = &xoosla_loadClass( 'tlist' );
        $tlist->AddFormStart( 'post', 'index.php', 'candy' );
        $tlist->AddHeader( 'xca_id', '5px', 'center', false );
        $tlist->AddHeader( 'xca_mid', '5px', 'center', false );
        $tlist->AddHeader( 'xca_macro', '30%', 'left', false );
        $tlist->AddHeader( 'xca_html', '30%', 'left', false );
        $tlist->AddHeader( 'xca_active', '', 'center', true );
        $tlist->AddHeader( 'xca_weight', '', 'center', true );
        $tlist->AddHeader( '', '', 'center', 2 );
        $tlist->AddHeader( 'action', '', 'center', false );
        $tlist->addFooter();
        $button = array( 'edit', 'delete', 'duplicate' );
        $_obj = $xooslaModel->handler->getObj( $_REQUEST, true );
        if ( $_obj['count'] && count( $_obj['list'] ) ) {
            foreach ( $_obj['list'] as $obj ) {
                $tlist->add(
                    array( $obj->getVar( 'xca_id' ),
                        $obj->getVar( 'xca_mid' ),
                        $obj->getVar( 'xca_macro', 'e' ),
                        $obj->getVar( 'xca_html', 'e' ),
                        $obj->getYesNobox( 'xca_id', 'xca_active' ),
                        $obj->getTextBox( 'xca_id', 'xca_weight', '2' ),
                        $obj->getCheckBox( 'xca_id' ),
                        xoolsa_displayIcon( $button, 'xca_id', $obj->getVar( 'xca_id' ) )
                        ) );
            }
        }
        // Html Output here
        xoops_cp_header();
        $xooslaModel->mHandler->addSubHeader( _XL_XCA_MAINAREA_DSC );
        $xooslaModel->mHandler->render();
        // $xooslaModel->handler->headingHtml( $_obj['count'] );
        // $xooslaModel->handler->displayCalendar( $nav, false );
        $xooslaToolbar = xoosla_loadClass( 'toolbar', $handler );
        $xooslaToolbar->addSelection( 'category' );
        $xooslaToolbar->render();
        $tlist->render();

        xoolsa_displayPageNav( $_obj['count'], $_REQUEST['limit'], $_REQUEST['start'], 'start', 1, 'limit=' . $_REQUEST['limit'] );
        xoolsa_displayLegend( $button );
        break;
}
xoosla_cp_footer();

?>