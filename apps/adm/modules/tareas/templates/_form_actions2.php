<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <li class="sf_admin_action_ir_portal">
<?php if (method_exists($helper, 'linkToIrPortal')): ?>
  <?php echo $helper->linkToIrPortal($form->getObject(), array(  'label' => 'Volver al Portal',  'params' =>   array(  ),  'class_suffix' => 'ir_portal',)) ?>
<?php else: ?>
  <?php echo link_to(__('Volver al Portal', array(), 'messages'), 'tareas/ListIrPortal?id='.$tarea->getId(), array()) ?>
<?php endif; ?>
  </li>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
<?php else: ?>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
  <?php echo $helper->linkToSaveAndAdd($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save_and_add',  'label' => 'Save and add',)) ?>
<?php endif; ?>
</ul>
