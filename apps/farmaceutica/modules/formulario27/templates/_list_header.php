<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php $producto = $sf_user->getAttribute('dispositivo_medico'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa'  => $empresa, 
                                                         'producto' => $producto)) ?>
</div>