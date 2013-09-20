<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
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
    //Labs
    $('#autocomplete_cosmetico_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Formula Cosmetica
    $('#autocomplete_cosmetico_forma_cosmetica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env ?>.php/fcosmetica/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Grupo Cosmetico
    $('#autocomplete_cosmetico_grupo_cosmetico_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env ?>.php/gcosmetico/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
    //Marca
    $('#autocomplete_cosmetico_marca_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env ?>.php/marca/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Paises
    $('#autocomplete_producto_newcosmetico_1_pais_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica<?php echo $env ?>.php/paises/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
});



</script>