<?php
/**
 * @package		mod_qlmaps
 * @copyright	Copyright (C) 2015 ql.de All rights reserved.
 * @author 		Mareike Riegel mareike.riegel@ql.de
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

require_once dirname(__FILE__).'/helper.php';
$obj_helper=new modQlmapsHelper($module,$params);

require JModuleHelper::getLayoutPath('mod_qlmaps', $params->get('layout', 'default'));
