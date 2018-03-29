<?php namespace XoopsModules\Xooslacandy;

use Xmf\Request;
use XoopsModules\Xooslacandy;
use XoopsModules\Xooslacandy\Common;

/**
 * Class Utility
 */
class Utility
{
    use Common\VersionChecks; //checkVerXoops, checkVerPhp Traits

    use Common\ServerStats; // getServerStats Trait

    use Common\FilesManagement; // Files Management Trait

    //--------------- Custom module methods -----------------------------
}
