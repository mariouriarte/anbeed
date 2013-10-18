<?php  $foto = $form->getObject()->getFoto();
        if($foto == null || $foto == '')
            $foto = 'default.png';
?>

<div class="foto_edit">
    <?php echo image_tag(public_path("images/catalogo/normal/$foto"), 'alt=FOTO size=336x336');?>
</div>