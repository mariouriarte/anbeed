<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_etapa">
      <?php echo link_to(__('Etapa', array(), 'messages'), 'formulario11/ListEtapa?id='.$formulario11->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_imprimir">
      <?php echo link_to(__('Imprimir', array(), 'messages'), 'formulario11/print?id='.$formulario11->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <li class="sf_admin_action_items">
      <?php echo link_to(__('Producto(s)', array(), 'messages'), 'formulario11/item?id='.$formulario11->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_edit">
      <?php echo link_to(__('Editar', array(), 'messages'), 'formulario11/editar?id='.$formulario11->getId(), array()) ?>
    </li>
  </ul>
</td>
