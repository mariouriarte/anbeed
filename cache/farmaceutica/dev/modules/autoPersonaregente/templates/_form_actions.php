<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <?php echo $helper->linkToList(array(  'params' =>   array(  ),  'class_suffix' => 'list',  'label' => 'Back to list',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php else: ?>
  <li class="sf_admin_action_ir_empresa">
<?php if (method_exists($helper, 'linkToIrEmpresa')): ?>
  <?php echo $helper->linkToIrEmpresa($form->getObject(), array(  'label' => 'Volver a empresa',  'params' =>   array(  ),  'class_suffix' => 'ir_empresa',)) ?>
<?php else: ?>
  <?php echo link_to(__('Volver a empresa', array(), 'messages'), 'personaregente/ListIrEmpresa?id='.$persona->getId(), array()) ?>
<?php endif; ?>
  </li>
  <li class="sf_admin_action_quitar_personaregente">
<?php if (method_exists($helper, 'linkToQuitarPersonaregente')): ?>
  <?php echo $helper->linkToQuitarPersonaregente($form->getObject(), array(  'label' => 'Quitar Regente Farmaceútico',  'params' => 'class=boton-quitar confirm=¿Quitar Regente Farmaceútico?',  'class_suffix' => 'quitar_personaregente',)) ?>
<?php else: ?>
  <?php echo link_to(__('Quitar Regente Farmaceútico', array(), 'messages'), 'personaregente/ListQuitarPersonaregente?id='.$persona->getId(), 'class=boton-quitar confirm=¿Quitar Regente Farmaceútico?') ?>
<?php endif; ?>
  </li>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php endif; ?>
</ul>
