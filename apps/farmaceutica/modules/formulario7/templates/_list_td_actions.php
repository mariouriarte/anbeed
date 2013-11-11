<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_imprimir">
      <?php echo link_to(__('Imprimir', array(), 'messages'), 'formulario7/print?id='.$formulario7->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <li class="sf_admin_action_edit">
      <?php echo link_to(__('Editar', array(), 'messages'), 'formulario7/editar?id='.$formulario7->getId(), array()) ?>
    </li>
    <?php echo $helper->linkToDelete($formulario7, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>
