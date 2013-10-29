<div class="web_producto">
    <div class="web_foto">
        <?php echo image_tag(public_path("images/catalogo/small/".$producto_web->getFoto().""), 'alt_image='.$producto_web->getNombre().' size=150x150');?>
    </div>
    <div class="web_titulo">
        <?php echo $producto_web->getNombre() ?>
    </div>
    <div class="web_precio">
        <?php echo $producto_web->getPrecio()." Bs." ?>
    </div>        
</div>        
       
