<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_imprimir">
      <?php echo link_to(__('Imprimir', array(), 'messages'), 'empresas/print?id='.$empresa->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_adm_empresa">
      <?php echo link_to(__('Ingresar', array(), 'messages'), 'empresas/administrarEmpresa?id='.$empresa->getId(), array()) ?>
    </li>
  </ul>
</td>
