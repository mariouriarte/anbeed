<?php use_javascript('jquery-migrate.js') ?>
<script type='text/javascript'>
$(document).ready(function()
{
//    $('#empresa_representante_legal_id')
//        .after('<button type="button" id="btn-buscar-legal" class="btn-buscar-trigger">Crear Representante</button>');
//    $('#empresa_regente_farmaceutico_id')
//        .after('<button type="button" id="btn-buscar-regente" class="btn-buscar-trigger">Crear Regente</button>');
    $('#empresa_representante_legal_id')
        .after('<?php echo link_to('Crear Representante Legal', 'personalegal/new');  ?>');
    
    $('#empresa_regente_farmaceutico_id')
        .after('<?php echo link_to('Crear Regente Farmacéutico', 'personaregente/new');  ?>');
});
</script>

<?php echo "Fecha: ".FechaEspanol(date('Y-m-d')); ?>

<script type='text/javascript'>
function getPersona()
{
    $.ajax({
            method: 'get',
            //dataType: "json",
            url:  '<?php echo url_for("/adm_dev.php/personas/new") ?>',
            data: '',
            beforeSend: function(){
            },
            complete: function(){
            },
            success: function(data){
                $('#content-persona').html(data);
            }
    });
}
</script>
