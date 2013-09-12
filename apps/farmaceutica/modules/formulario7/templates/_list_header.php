<?php 
$tabla = $sf_user->getAttribute('tabla');
if($tabla == 'medicamento')
    $producto = $sf_user->getAttribute('medicamento');
if($tabla == 'reactivo')
    $producto = $sf_user->getAttribute('reactivo');
if($tabla == 'dispositivo_medico')
    $producto = $sf_user->getAttribute('dispositivo_medico');
if($tabla == 'cosmetico')
    $producto = $sf_user->getAttribute('cosmetico');
if($tabla == 'higiene')
    $producto = $sf_user->getAttribute('higiene');
?>  
<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    
    <?php include_partial('empresas/info_empresa', array('empresa'  => $empresa, 
                                                         'producto' => $producto)) ?>
</div>