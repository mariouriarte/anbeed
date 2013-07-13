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
        
    //Formula Farmaceutica
    $('#autocomplete_producto_Nuevo_Medicamento_1_forma_farmaceutica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/ffarmaceuticas/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Via de Administracion
    $('#autocomplete_producto_Nuevo_Medicamento_1_via_administracion_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/administraciones/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
    //Tipo de venta
    $('#autocomplete_producto_Nuevo_Medicamento_1_tipo_venta_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/tventas/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
});



</script>