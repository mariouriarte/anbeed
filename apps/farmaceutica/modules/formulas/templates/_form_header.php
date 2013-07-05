<?php use_javascript('jquery-migrate.js') ?>
<script type='text/javascript'>
   
$(document).ready(function()
{
    $('#autocomplete_formula_cc_NuevoDetalleFormulaCc_ingrediente_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/ingredientes/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=310,left=20,top=150,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Ingrediente\"/></a>");
});
</script>
