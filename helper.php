<?php
/**
 * @package		mod_qlqlmaps
 * @copyright	Copyright (C) 2015 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

class modQlmapsHelper
{
    public $params;

	function __construct($module,$params)
    {
        $this->module=$module;
        $this->params=$params;
    }

    public function someMethod()
    {

	}
}
