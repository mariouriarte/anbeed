<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_ir_formula">
      <?php echo link_to(__('Fórmula Cuali-cuantitativa', array(), 'messages'), 'medicamentos/irFormula?id='.$medicamento->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_ir_form5">
      <?php echo link_to(__('Form 005', array(), 'messages'), 'medicamentos/irForm5?id='.$medicamento->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_ir_form7">
      <?php echo link_to(__('Form 007', array(), 'messages'), 'medicamentos/irForm7?id='.$medicamento->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_imprimirfcc">
      <?php echo link_to(__('Imprimir Fórmula', array(), 'messages'), 'medicamentos/printfcc?id='.$medicamento->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <?php echo $helper->linkToEdit($medicamento, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
  </ul>
</td>
