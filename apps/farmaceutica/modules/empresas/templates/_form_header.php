<?php use_javascript('jquery-migrate.js') ?>

<div class="content-info-empresa">
    <?php $empresa = $sf_user->getAttribute('empresa'); ?>
    <?php include_partial('empresas/info_empresa', array('empresa' => $empresa)) ?>
</div>

<?php

$idprl = $sf_params->get('idprl');
$idprf = $sf_params->get('idprf');

$url  = link_to('Crear Representante Legal', 'personalegal/new?idprf='. $idprf);
$url2 = link_to('Crear Regente Farmacéutico', 'personaregente/new?idprl='. $idprl);

if($sf_params->has('idprl') && ($sf_params->get('idprl') != ''))
{
    $url  = link_to('Editar Representante Legal', 'personalegal/edit?id='.$idprl.'&idprf='. $idprf);
}

if($sf_params->has('idprf')&& ($sf_params->get('idprf') != ''))
{
    $url2 = link_to('Editar Regente Farmacéutico', 'personaregente/edit?id='.$idprf.'&idprl='. $idprl);
}
?>

<script type='text/javascript'>
$(document).ready(function()
{
//    $('#empresa_representante_legal_id')
//        .after('<button type="button" id="btn-buscar-legal" class="btn-buscar-trigger">Crear Representante</button>');
//    $('#empresa_regente_farmaceutico_id')
//        .after('<button type="button" id="btn-buscar-regente" class="btn-buscar-trigger">Crear Regente</button>');
    $('#empresa_representante_legal_id')
        .after('<?php echo $url; ?>');
    
    $('#empresa_regente_farmaceutico_id')
        .after('<?php echo $url2;  ?>');
});
</script>

<?php // echo "Fecha: ".FechaEspanol(date('Y-m-d')); ?>

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
