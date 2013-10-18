<td class="sf_admin_text sf_admin_list_td_foto">
  <?php echo image_tag(public_path("images/catalogo/small/".$producto_web->getFoto().""), 'alt_image='.$producto_web->getNombre().' size=80x80');?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_categoria_id">
  <?php echo $producto_web->Categoria ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_linea_id">
  <?php echo $producto_web->Linea ?>
</td>
<td class="sf_admin_foreignkey sf_admin_list_td_pais_id">
  <?php echo $producto_web->Pais ?>
</td>
<td class="sf_admin_text sf_admin_list_td_nombre">
  <?php echo $producto_web->getNombre() ?>
</td>
