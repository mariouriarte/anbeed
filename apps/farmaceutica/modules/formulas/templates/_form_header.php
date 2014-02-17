<?php use_javascript('jquery-migrate.js') ?>
<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@formula_cc') ?>
<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php $medicamento = $sf_user->getAttribute('medicamento'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa'  => $empresa, 
                                                         'producto' => $medicamento)) ?>
</div>
<ul class="sf_admin_actions">
<?php if ($form->isNew()): ?>
  <li class="sf_admin_action_ir_productos">
<?php if (method_exists($helper, 'linkToIrProductos')): ?>
  <?php echo $helper->linkToIrProductos($form->getObject(), array(  'label' => 'Regresar a Medicamentos',  'params' =>   array(  ),  'class_suffix' => 'ir_productos',)) ?>
<?php else: ?>
  <?php echo link_to(__('Regresar a Medicamentos', array(), 'messages'), 'formulas/ListIrProductos?id='.$formula_cc->getId(), array()) ?>
<?php endif; ?>
  </li>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php else: ?>
  <li class="sf_admin_action_ir_productos">
<?php if (method_exists($helper, 'linkToIrProductos')): ?>
  <?php echo $helper->linkToIrProductos($form->getObject(), array(  'label' => 'Regresar a Medicamentos',  'params' =>   array(  ),  'class_suffix' => 'ir_productos',)) ?>
<?php else: ?>
  <?php echo link_to(__('Regresar a Medicamentos', array(), 'messages'), 'formulas/ListIrProductos?id='.$formula_cc->getId(), array()) ?>
<?php endif; ?>
  </li>
  <?php echo $helper->linkToDelete($form->getObject(), array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  <?php echo $helper->linkToSave($form->getObject(), array(  'params' =>   array(  ),  'class_suffix' => 'save',  'label' => 'Save',)) ?>
<?php endif; ?>
</ul>

<?php
if(sfConfig::get('sf_environment') == 'dev')
{
    $env = '_dev';
}
?>

<script type='text/javascript'>
$(document).ready(function()
{
    $('#autocomplete_formula_cc_NuevoPrincipio_ingrediente_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env?>.php/ingredientes/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=310,left=20,top=150,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Ingrediente\"/></a>");
    $('#autocomplete_formula_cc_NuevoDetalleFormulaCc_ingrediente_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env?>.php/ingredientes/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=310,left=20,top=150,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Ingrediente\"/></a>");
});
</script>
