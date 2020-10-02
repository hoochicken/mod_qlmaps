<?php
/**
 * @package        mod_qlmaps
 * @copyright      Copyright (C) 2020 ql.de All rights reserved.
 * @author         Mareike Riegel mareike.riegel@ql.de
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
JHtml::stylesheet('mod_qlmaps/styles.css', [], true);
JHtml::script("mod_qlmaps/script.js", false, true);
?>

<div class="qlmaps" id="module<?php echo $module->id; ?>">
    <?php if (2 == $params->get('mapservice', 1)) : ?>
        <iframe src="<?php echo $params->get('address', ''); ?>" style="border:0;" class="maps"
                allowfullscreen=""></iframe>
    <?php else : ?>
        <iframe src="<?php echo $params->get('address', ''); ?>"></iframe>
    <?php endif; ?>
    <?php if (!empty($params->get('bigmaplink', ''))) : ?>
        <small><a href="<?php echo $params->get('bigmaplink', ''); ?>" target="_blank"><?php echo  JText::_('MOD_QLMAPS_MSG_OPENBIGGER');?> </a></small>
    <?php endif; ?>
</div>
