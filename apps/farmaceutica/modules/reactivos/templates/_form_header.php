<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

<script type='text/javascript'>

<?php
if(sfConfig::get('sf_environment') == 'dev')
{
    $env = '_dev';
}
?>
    
$(document).ready(function()
{
    //Labs
    $('#autocomplete_reactivo_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env?>.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");        
});



</script>