<tr>
    <?php echo image_tag(public_path("images/catalogo/small/".$producto_web->getFoto().""), 'alt_image='.$producto_web->getNombre().' size=100x100');?>
</tr>
<tr>
    <?php echo $producto_web->getNombre() ?>
</tr>    
<tr>
    <?php echo $producto_web->getPrecio() ?>
</tr>
