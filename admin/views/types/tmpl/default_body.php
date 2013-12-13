<?php
/**
 * @package      CrowdFunding
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2013 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */

// no direct access
defined('_JEXEC') or die;
?>
<?php foreach ($this->items as $i => $item) {
	    $ordering  = ($this->listOrder == 'a.ordering');
	?>
	<tr class="row<?php echo $i % 2; ?>">
        <td ><?php echo JHtml::_('grid.id', $i, $item->id); ?></td>
		<td>
    		<a href="<?php echo JRoute::_("index.php?option=com_crowdfunding&view=type&layout=edit&id=".(int)$item->id);?>" >
    		<?php echo $this->escape($item->title);?>
    		</a>
		</td>
        <td class="center">
            <?php echo $item->id;?>
        </td>
	</tr>
<?php }?>
	  