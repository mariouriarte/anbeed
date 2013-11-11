<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_ir_form27">
      <?php echo link_to(__('Form 027', array(), 'messages'), 'dispositivos/irForm27?id='.$dispositivo_medico->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_imprimirfcc">
      <?php echo link_to(__('Imprimir Fórmula', array(), 'messages'), 'dispositivos/printfcc?id='.$dispositivo_medico->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <?php echo $helper->linkToEdit($dispositivo_medico, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
  </ul>
</td>
