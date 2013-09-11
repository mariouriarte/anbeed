<td colspan="5">
  <?php echo __('%%nombre%% - %%ap_paterno%% - %%ap_materno%% - %%cedula_expedido%% - %%telefono%%', array('%%nombre%%' => $persona->getNombre(), '%%ap_paterno%%' => $persona->getApPaterno(), '%%ap_materno%%' => $persona->getApMaterno(), '%%cedula_expedido%%' => $persona->getCedulaExpedido(), '%%telefono%%' => $persona->getTelefono()), 'messages') ?>
</td>
