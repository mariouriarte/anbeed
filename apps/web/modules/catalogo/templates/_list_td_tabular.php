<div class="web_producto">
    <div class="web_foto">
        <?php 
        echo link_to(image_tag(public_path("images/catalogo/small/".$producto_web->getFoto().""),
                'alt_image='.$producto_web->getNombre().' size=150x150'));
        
//        echo link_to(image_tag(public_path("images/catalogo/small/".$producto_web->getFoto().""),
//                'alt_image='.$producto_web->getNombre().' size=150x150'), 
//                "catalogo/edit?id=".$producto_web->getId());
        ?>
    </div>
    <div class="web_titulo">
        <?php echo $producto_web->getNombre(); ?>
        <?php // echo link_to($producto_web->getNombre(), "catalogo/edit/".$producto_web->getId().'/id') ?>
    </div>
    <div class="web_precio">
        <?php // echo link_to($producto_web->getPrecio()." Bs." , 'catalogo/edit/'.$producto_web->getId().'/id') ?>
    </div>        
</div>        
       
