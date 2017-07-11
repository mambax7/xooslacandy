<?php
/**
 * Name: Admin Language
 * Description: Language file for module admin.
 *
 * @package : Xoosla Modules
 * @Module : WF-Chandy
 * @subpackage : Language
 * @since : v1.00
 * @author John Neill <catzwolf@xoosla.com>
 * @copyright : Copyright (C) 2010 Xoosla Modules. All rights reserved.
 * @license : GNU/LGPL, see docs/license.php
 * @version : $Id: admin.php 0000 21/06/2010 12:53:57 Catzwolf $
 */
defined( 'XOOPS_ROOT_PATH' ) or die( 'Restricted access' );

/**
 * Module Resource Errors
 */
$url = '<a href="http://code.google.com/p/xoosla-modules/downloads/list" title="Download WF-Resource">download</a>';

define( '_XL_ER_XCA_TECHISSUES', '<h3>Techincal Issues</h3>Sorry, but we seem to be having some techincal issues with this part of our website.<br /><br />Please report this problem to the webmaster.' );
define( '_XL_ER_XCA_MISSING_MODULE', '<h3>Warning: Module Required!</h3>
<p>Why am I seeing this message rather than my expected module?</p>
<p>This module requires another module to function correctly. Xoosla Candy had determined that the Xoosla Core Module has not been installed or has not been installed correctly.</p>
<p>Please ' . $url . ' and install the latest version of the Xoosla Core Module (Version %s or higher).</p>'
    );
define( '_XL_ER_XCA_NOTACTIVE', '<h3>Required Module Not Activated!</h3>
<p>Why am I seeing this message rather than my expected module?</p>
<p>Xoosla Core Module is installed, but has not been activated. The Xoosla Core Module must be activated for this Xoosla Candy to work correctly.</p>
<p><a href="' . XOOPS_URL . '/modules/system/admin.php?fct=modulesadmin" title="Xoops Module Administration">Activate Module Now</a></p>'
    );

define( '_XL_ER_XCA_NOTUPDATE', '<h3>Xoosla Core Module Outdated!</h3>
<p>Why am I seeing this message rather than my expected module?</p>
<p>Because the version of the Xoosla Core Module installed, is either out of date or the incorrect version. For Xoosla Candy to work correctly, you will have to update your version of the Xoosla Core module.</p>
<p>Please ' . $url . ' and install the latest version of the Xoosla Core Module (Version %s or higher).</p>'
    );

/**
 */
define( '_XL_AD_XCA_ID', '#' );
define( '_XL_AD_XCA_MID', 'Mid' );
define( '_XL_AD_XCA_MACRO', 'Macro Codes' );
define( '_XL_AD_XCA_HTML', 'Html Codes' );
define( '_XL_AD_XCA_ACTIVE', 'Active' );
define( '_XL_AD_XCA_WEIGHT', 'Order' );
define( '_XL_AD_XCA_ACTIONS', 'Actions' );
define( '_XL_AD_XCA_INSERTMACRO', 'Insert Macro' );
/**
 */
define( '_XL_AD_XCA_MAINAREA', 'Candy Management' );
define( '_XL_AD_XCA_MAINAREA_DSC', 'Manage your candy store here' );
define( '_XL_AD_WFC_TOTALCANDIES', 'Total Candy Marcos: ' );

/**
 */
define( '_XL_AD_EXCA_FORM', 'Candy Form' );
define( '_XL_AD_EXCA_MACRO', 'BBCode Macro:' );
define( '_XL_AD_EXCA_MACRO_DSC', 'Enter the BBcode for this Macro. <br /> Example: [b]{text}[/b]' );
$code = htmlspecialchars( '<b>{This is some text}</b>' );
define( '_XL_AD_EXCA_HTML', 'Html Code:' );
define( '_XL_AD_EXCA_HTML_DSC', "Enter the html Equivalent of the BBCode Macro. <br /> Example: {$code}" );
define( '_XL_AD_EXCA_ACTIVE', "Activate Macro?" );
define( '_XL_AD_EXCA_ACTIVE_DSC', 'If set to no, the macro will not be displayed or used when rendering text. <br />Remember, is you use this macro at any stage and turn this off, <br />the macro will show but not be converted to html.' );
define( '_XL_AD_EXCA_WEIGHT', 'Macro Order:' );
define( '_XL_AD_EXCA_WEIGHT_DSC', 'Set the display order of the macro and in which order the macro will be used.' );
define( '_XL_AD_EXCA_GROUPS', 'Permissions: ' );
define( '_XL_AD_EXCA_GROUPS_DSC', 'Select which groups may have permission to use this macro when editing text.<br /> If a user doesn\'t have permission they will not see the macro within the Xoosla candy Macro window.' );
// Tips
define( '_XL_AD_XCA_TIPS', '
<ul id="newsticker" class="newsticker">
<li>Manage your candy store</li>
<li>This is the candy listing area, from here you can edit, delete or update your candy items.</li>
</ul>' );

?>