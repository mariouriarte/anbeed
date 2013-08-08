<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script type="text/javascript">
$(document).ready(function()
{
   $('#emision_correspondencia_producto_id').change(function()
    {
        producto_id = $("select[name='emision_correspondencia[producto_id]'] option:selected").val();
        tipo = $("select[name='emision_correspondencia[producto_id]'] option:selected").html();
        tipo = tipo.split('|')
        getDatosProductos(producto_id, tipo[0])
        //alert(producto_id);
    });
   
});

function getDatosProductos(producto_id , tipo)
{
        $.ajax({
        method: 'get',
        dataType: "json",
        url:  '<?php echo url_for("productos/ajaxGetDatosJSON") ?>',
        data: 'producto_id='+ producto_id + '&tipo=' + tipo,
        beforeSend: function(){            
        },
        complete: function(){
        },
        success: function(data){

            // data es un objeto
            $('#activo_codigo').val(data.codigo);
            $('#activo-codigo-header').html(codigo + data.codigo);
        }
    });
}


</script>
    
