<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php else: ?>
  <li class="sf_admin_action_ir_empresa">
<?php if (method_exists($helper, 'linkToIrEmpresa')): ?>
  <?php echo $helper->linkToIrEmpresa($form->getObject(), array(  'label' => 'Volver a Empresa',  'params' =>   array(  ),  'class_suffix' => 'ir_empresa',)) ?>
<?php else: ?>
  <?php echo link_to(__('Volver a Empresa', array(), 'messages'), 'empresas/ListIrEmpresa?id='.$empresa->getId(), array()) ?>
<?php endif; ?>
  </li>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php endif; ?>
</ul>
