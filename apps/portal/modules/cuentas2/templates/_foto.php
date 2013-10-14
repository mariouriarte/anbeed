<?php 

$foto = $sf_user->getGuardUser()->Persona->getFoto();
if($foto == null || $foto == '')
    $foto = 'default_user.gif';

?>
<div class="foto_edit">
    <?php echo image_tag(public_path("images/users/$foto"), 'alt=FOTO size=336x336');?>
</div>