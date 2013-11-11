<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_imprimir">
      <?php echo link_to(__('Imprimir', array(), 'messages'), 'formulario12/print?id='.$formulario12->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <li class="sf_admin_action_etapa">
      <?php echo link_to(__('Etapa', array(), 'messages'), 'formulario12/ListEtapa?id='.$formulario12->getId(), array()) ?>
    </li>
    <?php echo $helper->linkToEdit($formulario12, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($formulario12, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>
