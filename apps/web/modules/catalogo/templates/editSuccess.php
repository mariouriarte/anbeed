<div class="center_content">
<div class="ver_titulo">
        <?php echo $producto_web;?>
</div>
<div class="ver_producto_web">

    <div class="ver_foto">
        <?php echo image_tag(public_path("images/catalogo/normal/".$producto_web->getFoto().""),
                'alt_image='.$producto_web->getNombre()); ?>
        
    </div>
    <div class="ver_detalle_producto">
        <table>
            <tr>
                <th>Nombre del producto:</th>
                <td>
                    <?php echo $producto_web; ?>
                </td>
            </tr>
            <tr>
                <th>Categoría:</th>
                <td>
                    <?php echo $producto_web->Categoria; ?>
                </td>
            </tr>    
            <tr>
                <th>Línea o Marca:</th>
                <td>
                    <?php echo $producto_web->Linea; ?>
                </td>
            </tr>    
            <tr>
                <th>País de Procedencia</th>
                <td>
                    <?php echo $producto_web->Pais; ?>
                </td>
            </tr>    
            <tr>
                <th>Precio</th>
                <td>
                    <?php echo 'Bs.'.$producto_web->getPrecio(); ?>
                </td>
            </tr>    
            <tr>
                <th>Características</th>
            </tr>
            <tr>
                <td colspan="2">
                    <?php echo $producto_web->getCaracteristicas(); ?>
                </td>
            </tr>
                
        </table>
        
    </div>
    <?php echo link_to(image_tag(public_path("images/icons/back.svg"),
                'alt_image=Volver ').'Volver al catálogo', "catalogo/index" )?> 
</div>

</div>