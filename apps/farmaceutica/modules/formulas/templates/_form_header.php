<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php $medicamento = $sf_user->getAttribute('medicamento'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa'  => $empresa, 
                                                         'producto' => $medicamento)) ?>
</div>

<?php
if(sfConfig::get('sf_environment') == 'dev')
{
    $env = '_dev';
}
?>

<script type='text/javascript'>
$(document).ready(function()
{
    $('#autocomplete_formula_cc_NuevoDetalleFormulaCc_ingrediente_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env?>.php/ingredientes/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=310,left=20,top=150,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Ingrediente\"/></a>");
});
</script>
