<?php

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
defined('XOOPS_ROOT_PATH') || die('Restricted access');

/**
 * Long Description
 *
 * @abstract
 * @package    Xoosla Modules
 * @subpackage Application
 * @since
 */
class CandyObject extends XooslaObject
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

/**
 * wfc_LinkHandler
 *
 * @package
 * @author    John
 * @copyright Copyright (c) 2010
 * @version   $Id$
 * @access    public
 */
class CandyModel extends XooslaObjectHandler
{
    /**
     * Class constructor.
     *
     * @param mixed $db
     */
    public function __construct($db)
    {
        parent::__construct($db, 'xca_candy', 'CandyObject', 'xca_id', 'xca_macro', 'candy_read');
    }

    /**
     * CandyModel::getList()
     *
     * @param string  $sort
     * @param string  $order
     * @param integer $start
     * @param integer $limit
     * @return array|bool
     */
    public function &getList($sort = 'xca_weight', $order = 'ASC', $start = 0, $limit = 0)
    {
        static $channels;
        if (!$channels) {
            $criteria = new \CriteriaCompo();
            $criteria->add(new \Criteria('xca_active', 1, '='));
            $criteria->setSort($sort);
            $criteria->setOrder($order);
            $criteria->setStart($start);
            $criteria->setLimit($start);
            $channels =& $this->getObjects($criteria);
        }

        return $channels;
    }

    /**
     * xca_CandyHandler::getObj()
     *
     * @param $args
     * @return bool
     */
    public function &getObj($args)
    {
        $obj = false;

        $criteria = new \CriteriaCompo();
        if (_XL_AD_TOOBAR_FILTER == $args['search']) {
            $args['search'] = '';
        }
        if (!empty($args['search'])) {
            $args['search'] = $GLOBALS['xoopsDB']->escape($args['search']);
            if (isset($args['andor']) && 'exact' !== $args['andor']) {
                $temp_queries = preg_split('/[\s,]+/', $args['search']);
                $queryarray   = [];
                foreach ($temp_queries as $q) {
                    $q = trim($q);
                    if (strlen($q) >= 5) {
                        $queryarray[] = $GLOBALS['xoopsDB']->escape($q);
                    }
                }
            } else {
                $queryarray = [trim($GLOBALS['xoopsDB']->escape($args['search']))];
            }
            $criteriaSearch = self::searchCriteria($queryarray, $args['andor'], true, $criteria);
        }
        $obj['count'] = $this->getCount($criteria);
        if ($args) {
            $criteria->setSort($args['sort']);
            $criteria->setOrder($args['order']);
            $criteria->setStart($args['start']);
            $criteria->setLimit($args['limit']);
        }
        $obj['list'] =& $this->getObjects($criteria, true);

        return $obj;
    }

    /**
     * xca_CandyHandler::searchCriteria()
     *
     * @param mixed  $queryarray
     * @param string $andor
     * @param mixed  $moreChecks
     * @param mixed  $criteria
     */
    public function searchCriteria($queryarray, $andor = '', $moreChecks, &$criteria)
    {
        $criteriaSearch = new \CriteriaCompo();
        if (isset($queryarray[0])) {
            $criteriaSearch->add(new \Criteria('xca_macro', "%$queryarray[0]%", 'LIKE'), 'OR');
            $criteriaSearch->add(new \Criteria('xca_html', "%$queryarray[0]%", 'LIKE'), 'OR');
        }
        if (!empty($andor)) {
            for ($i = 1, $iMax = count($queryarray); $i < $iMax; ++$i) {
                $criteriaSearch->add(new \Criteria('xca_macro', "%$queryarray[0]%", 'LIKE'), 'OR');
                $criteriaSearch->add(new \Criteria('xca_html', "%$queryarray[0]%", 'LIKE'), 'OR');
            }
        }
        $criteria->add($criteriaSearch);
    }
}
