<?php use_helper('I18N', 'Date') ?>
<?php //include_partial('catalogo/assets') ?>
<script type="text/javascript">
    $(document).ready(function() {
        if ($.fn.cssOriginal != undefined)
            $.fn.css = $.fn.cssOriginal;

        $('.fullwidthbanner2').revolution(
                {
                    delay: 8000,
                    startwidth: 890,
                    startheight: 151,
                    onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                    thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight: 50,
                    thumbAmount: 4,
                    hideThumbs: 200,
                    navigationType: "none", //bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
                    navigationArrows: "none", //nexttobullets, verticalcentered, none
                    navigationStyle: "round", //round,square,navbar

                    touchenabled: "on", // Enable Swipe Function : on/off

                    navOffsetHorizontal: 0,
                    navOffsetVertical: 20,
                    fullWidth: "on",
                    shadow: 0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

                });

    });


</script>
<script type="text/javascript">
    $( "#catalogo" ).addClass( "dropdown active" );
</script>
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
<!--            <tr>
                <th>Precio</th>
                <td>
                    <?php // echo 'Bs.'.$producto_web->getPrecio(); ?>
                </td>
            </tr>    -->
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