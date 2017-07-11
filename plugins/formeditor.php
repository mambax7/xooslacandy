<?php
/**
 * Name: formeditor.php
 * Description:
 *
 * @package    : Xoosla Modules
 * @Module     : Xoosla Candy
 * @subpackage : Plugin
 * @since      : v1.0.0
 * @author     John Neill <catzwolf@xoosla.com> Neill <catzwolf@xoosla.com>
 * @copyright  : Copyright (C) 2010 Xoosla. All rights reserved.
 * @license    : GNU/LGPL, see docs/license.php
 */
defined('XOOPS_ROOT_PATH') || exit('Restricted access');

?>

function insertTinyHTML(id, html)
{
tinyMCE.execInstanceCommand(id,'mceInsertContent',false,'[this is some text]');
}

function insertXoopsHTML(id, str)
{
var editorid = xoopsGetElementById(id);
var  str = '[pagebreak]';
xoopsInsertText(editorid, str);
}

function insertCkeditorHTML(id, str)
{
var editorid = xoopsGetElementById(id);
var  str = '[pagebreak]';
xoopsInsertText(editorid, str);
}

function insertPageBreak(id)
{
var editorid = xoopsGetElementById(id);
var  str = '[pagebreak]';
xoopsInsertText(editorid, str);
}
