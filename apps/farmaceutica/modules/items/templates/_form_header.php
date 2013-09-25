<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>
<script type="text/javascript">

function Producto()
{
    var sel = document.getElementById("item_producto_id");
    var opt = sel.options[sel.selectedIndex].text;
    //alert(opt.replace('-', ''));
    opt = opt.split('--');
    producto = opt[1].substr(1);
    document.getElementById("item_nombre").value = producto;
}
</script>
