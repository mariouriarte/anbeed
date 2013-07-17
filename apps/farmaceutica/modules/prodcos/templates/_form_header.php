<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

<script type='text/javascript'>

$(document).ready(function()
{
    //Labs
    $('#autocomplete_producto_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Formula Cosmetica
    $('#autocomplete_producto_newcosmetico_1_forma_cosmetica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/fcosmetica/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Grupo Cosmetico
    $('#autocomplete_producto_newcosmetico_1_grupo_cosmetico_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/gcosmetico/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
    //Marca
    $('#autocomplete_producto_newcosmetico_1_marca_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/marca/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Paises
    $('#autocomplete_producto_newcosmetico_1_pais_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/paises/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
});



</script>