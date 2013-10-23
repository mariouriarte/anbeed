<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($producto_web->getId(), 'producto_web_edit', $producto_web) ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_categoria_id">
  <?php echo $producto_web->getCategoriaId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_linea_id">
  <?php echo $producto_web->getLineaId() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_pais_id">
  <?php echo $producto_web->getPaisId() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $producto_web->getNombre() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_caracteristicas">
  <?php echo $producto_web->getCaracteristicas() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_precio">
  <?php echo $producto_web->getPrecio() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_foto">
  <?php echo $producto_web->getFoto() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_visto">
  <?php echo $producto_web->getVisto() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created_at">
  <?php echo false !== strtotime($producto_web->getCreatedAt()) ? format_date($producto_web->getCreatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_updated_at">
  <?php echo false !== strtotime($producto_web->getUpdatedAt()) ? format_date($producto_web->getUpdatedAt(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_created_by">
  <?php echo $producto_web->getCreatedBy() ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_updated_by">
  <?php echo $producto_web->getUpdatedBy() ?>
</td>
