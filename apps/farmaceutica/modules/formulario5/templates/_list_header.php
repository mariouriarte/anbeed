<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php $medicamento = $sf_user->getAttribute('medicamento'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa'  => $empresa, 
                                                         'producto' => $medicamento)) ?>
</div>