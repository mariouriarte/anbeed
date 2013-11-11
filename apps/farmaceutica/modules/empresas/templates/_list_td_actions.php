<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_adm_empresa">
      <?php echo link_to(__('Ingresar', array(), 'messages'), 'empresas/administrarEmpresa?id='.$empresa->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_imprimir">
        <?php echo link_to(__('Imprimir', array(), 'messages'), 'empresas/print?id='.$empresa->getId(), array('popup' => array('popupWindow', 'width=900,height=700,left=320,top=100,scrollbars=yes,menubar=no,resizable=no'))) ?>
    </li>
    <?php echo $helper->linkToDelete($empresa, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
  </ul>
</td>
