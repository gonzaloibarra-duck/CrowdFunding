<?php
/**
 * @package      Crowdfunding
 * @subpackage   Components
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2015 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="row-fluid">
    <div class="span6 form-horizontal">
        <form action="<?php echo JRoute::_('index.php?option=com_crowdfunding'); ?>" method="post" name="adminForm"
              id="adminForm" class="form-validate">

            <fieldset>

                <?php echo $this->form->getControlGroup('subject'); ?>
                <?php echo $this->form->getControlGroup('description'); ?>
                <?php echo $this->form->getControlGroup('email'); ?>
                <?php echo $this->form->getControlGroup('title'); ?>
                <?php echo $this->form->getControlGroup('user_id'); ?>
                <?php echo $this->form->getControlGroup('record_date'); ?>
                <?php echo $this->form->getControlGroup('id'); ?>

            </fieldset>

            <input type="hidden" name="task" value=""/>
            <?php echo JHtml::_('form.token'); ?>
        </form>
    </div>
</div>