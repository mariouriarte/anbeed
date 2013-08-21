<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

<script type='text/javascript'>

$(document).ready(function()
{
    //Labs
    $('#autocomplete_medicamento_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Formula Farmaceutica
    $('#autocomplete_medicamento_forma_farmaceutica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/ffarmaceuticas/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nueva Forma Farmaceutica\"/></a>");
        
    //Via de Administracion
    $('#autocomplete_medicamento_via_administracion_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/administraciones/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nueva Via de Administración\"/></a>");
    //Tipo de venta
    $('#autocomplete_medicamento_tipo_venta_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/tventas/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Tipo de Venta\"/></a>");
        
});



</script>