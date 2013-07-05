<?php use_javascript('jquery-migrate.js') ?>
<script type='text/javascript'>

$(document).ready(function()
{
    //Labs
    $('#autocomplete_producto_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //
    $('#autocomplete_producto_Nuevo_Medicamento_1_forma_formaceutica_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/ffarmaceutica/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
});



</script>