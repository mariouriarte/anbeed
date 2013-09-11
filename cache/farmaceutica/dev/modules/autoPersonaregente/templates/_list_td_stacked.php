<td colspan="3">
  <?php echo __('%%nombre_ordenado%% - %%cedula_expedido%% - %%telefono%%', array('%%nombre_ordenado%%' => $persona->getNombreOrdenado(), '%%cedula_expedido%%' => $persona->getCedulaExpedido(), '%%telefono%%' => $persona->getTelefono()), 'messages') ?>
</td>
