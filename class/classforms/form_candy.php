<?php
/**
 * Name: Candy Form
 * Description: This is the candy form
 *
 * @package : Xoosla Modules
 * @Module : Xoosla Candy
 * @subpackage : Class
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: form_xca_candy.php 0000 21/06/2010 15:34:55 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

$form = new XooslaThemeForm( _XL_AD_EXCA_FORM, 'adminform', 'index.php' );
/**
 * Hidden elements
 */
$form->addElement( new XoopsFormHiddenToken() );
$form->addElement( new xoopsFormHidden( 'op', 'save' ) );
$form->addElement( new xoopsFormHidden( 'xca_id', $this->getVar( 'xca_id' ) ) );

$candy_macro = new XoopsFormTextArea( _XL_AD_EXCA_MACRO, 'xca_macro', $this->getVar( 'xca_macro', 'e' ) );
$candy_macro->setDescription( _XL_AD_EXCA_MACRO_DSC );
$form->addElement( $candy_macro, true );
$candy_html = new XoopsFormTextArea( _XL_AD_EXCA_HTML, 'xca_html', $this->getVar( 'xca_html', 'e' ) );
$candy_html->setDescription( _XL_AD_EXCA_HTML_DSC );
$form->addElement( $candy_html, true );
$candy_active = new XoopsFormRadioYN( _XL_AD_EXCA_ACTIVE, 'xca_active', $this->getVar( 'xca_active', 'e' ), ' ' . _XL_AD_SYS_YES . '', ' ' . _XL_AD_SYS_NO . '' );
$candy_active->setDescription( _XL_AD_EXCA_ACTIVE_DSC );
$form->addElement( $candy_active );
$candy_weight = new XoopsFormText( _XL_AD_EXCA_WEIGHT, 'xca_weight', 5, 5, $this->getVar( 'xca_weight', 'e' ) );
$candy_weight->setDescription( _XL_AD_EXCA_WEIGHT_DSC );
$form->addElement( $candy_weight, false );

$group = &XooslaLoad::getClass( 'permissions' ) ;
$group->setPermissions( '', 'candy_read', '', $GLOBALS['xoopsModule']->getVar( 'mid' ) );

//$groups = new XoopsFormSelectCheckGroup( _XL_AD_EXCA_WEIGHT_DSC, 'candy_read', true, $group->getAdmin( $this->getVar( 'xca_id' ) ), 5, true );
$groups = new XoopsFormSelectCheckGroup( _XL_AD_EXCA_GROUPS, 'candy_read', $group->getAdmin( $this->getVar( 'xca_id' ) ), 5, true );
$groups->setDescription( _XL_AD_EXCA_GROUPS_DSC );
$form->addElement( $groups, false );

return $form;

?>