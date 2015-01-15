<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>
<script type="text/javascript">
$(document).ready(function()
{
    if ($('#item_tipo_item').val() === 'UNIMED')
    {
        $('.sf_admin_form_field_producto_id').hide();
        $('.sf_admin_form_field_num_registro_libre').hide();
        $('.sf_admin_form_field_producto_unimed_id').show();
        
    } else if ($('#item_tipo_item').val() === 'ANBEED')
    {
        $('.sf_admin_form_field_producto_unimed_id').hide();
        $('.sf_admin_form_field_num_registro_libre').hide();
        $('.sf_admin_form_field_producto_id').show();
    } else if ($('#item_tipo_item').val() === 'LIBRE')
    {
        $('.sf_admin_form_field_producto_unimed_id').hide();
        $('.sf_admin_form_field_producto_id').hide();
        $('.sf_admin_form_field_num_registro_libre').show();
    } else
    {
        $('.sf_admin_form_field_producto_unimed_id').hide();
        $('.sf_admin_form_field_producto_id').hide();
        $('.sf_admin_form_field_num_registro_libre').hide();
    }
        
    $('#item_tipo_item').on('change', function()
    {
        if (this.value === 'UNIMED')
        {
            $('.sf_admin_form_field_producto_id').hide('fast');
            $('.sf_admin_form_field_num_registro_libre').hide('fast');
            $('.sf_admin_form_field_producto_unimed_id').show('fast');
        } else if (this.value === 'ANBEED')
        {
            $('.sf_admin_form_field_producto_unimed_id').hide('fast');
            $('.sf_admin_form_field_num_registro_libre').hide('fast');
            $('.sf_admin_form_field_producto_id').show('fast');
            
        } else if (this.value === 'LIBRE')
        {
            $('.sf_admin_form_field_producto_unimed_id').hide('fast');
            $('.sf_admin_form_field_producto_id').hide('fast');
            $('.sf_admin_form_field_num_registro_libre').show('fast');
            
        } else if(this.value === '')
        {
            $('.sf_admin_form_field_producto_unimed_id').hide('fast');
            $('.sf_admin_form_field_producto_id').hide('fast');
            $('.sf_admin_form_field_num_registro_libre').hide('fast');
        }
    });
    
    //$("#autocomplete_item_producto_unimed_id").change(function() {
    $("#item_nombre").keyup(function(e) 
    {
        var str = $("#autocomplete_item_producto_unimed_id").val();
        var res = str.split(" -- "); 
        
        switch(e.which) 
        {
            case 39: // up
                $('#item_nombre').val(res[1]);
            break;
            default: return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
});

function Producto()
{
    var sel = document.getElementById("item_producto_id");
    var opt = sel.options[sel.selectedIndex].text;
    //alert(opt.replace('-', ''));
    opt = opt.split('--');
    producto = opt[1].substr(1);
    document.getElementById("item_nombre").value = producto;
}

function ProductoUnimed()
{
    var str = "How are you doing today?";
    var res = str.split(" -- "); 
    
    var sel = document.getElementById("item_producto_unimed_id");
    var opt = sel.options[sel.selectedIndex].text;
    //opt = opt.split('--');
    producto = opt[1].substr(1);
    document.getElementById("item_nombre").value = producto;
}
</script>
