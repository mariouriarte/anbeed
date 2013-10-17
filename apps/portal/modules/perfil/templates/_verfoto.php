<?php 

$foto = $sf_user->getGuardUser()->Persona->getFoto();
if($foto == null || $foto == '')
    $foto = 'default_user.gif';

?>
<div class="foto_edit">
    <?php
    
    $thumbnail = new sfThumbnail(60, 75, false, true, 75, 'sfImageMagickAdapter', array('method' => 'shave_all'));
    $thumbnail->loadFile("images/users/$foto");
    $thumbnail->save('images/users/new.png', 'image/png');
    ?>
    
    
    <?php echo image_tag(public_path("images/users/$foto"), 'alt=FOTO size=336x336');?>
</div>