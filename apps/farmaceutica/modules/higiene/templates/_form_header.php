<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

   <?php link_to('add', 'laboratorios/new') 
    ?>
<script type='text/javascript'>

$(document).ready(function()
{
    //Labs
    $('#autocomplete_higiene_laboratorio_fabricante_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/laboratorios/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=690,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
 
    //Marca
    $('#autocomplete_higiene_grupo_higiene_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/grupo_higiene/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
    //Paises
    $('#autocomplete_higiene_pais_id')
        .after("&nbsp;&nbsp;<a href='/farmaceutica_dev.php/paises/new' onclick=\"var w=window.open(this.href,'popupWindow','width=500,height=290,left=20,top=100,scrollbars=yes,menubar=no,resizable=no');w.focus();return false;\"><img src=\"/images/icons/add.svg\" title=\"Nuevo Laboratorio Fabricante\"/></a>");
        
});



</script>  