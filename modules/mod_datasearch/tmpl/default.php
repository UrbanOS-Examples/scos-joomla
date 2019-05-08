<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="custom<?php echo $moduleclass_sfx; ?>" <?php if ($params->get('backgroundimage')) : ?> style="background-image:url(<?php echo $params->get('backgroundimage'); ?>)"<?php endif; ?> >
  <form action="<?php echo $params->get('alias-of-data-menu-item'); ?>" method="get">
    <input class="datasearchinput" name="q" type="text" placeholder="<?php echo $params->get('placeholder'); ?>" style="display: inline-block;width: 100%;">
    <input class="datasearchbutton" src="/templates/pocsmart/images/searchButtonBlue.png" type="image" value="Search" style="display: inline-block;position: absolute;right: 10px;width: 25px;top: 5px;">
  </form>
</div>
