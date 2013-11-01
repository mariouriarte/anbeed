<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
?>

<h3>Tramite <?php echo $form->Formulario ?></h3>

<?php foreach($etapas as $i => $etapa): ?>
<h2><?php echo $i+1 ?></h2>
<div class="panel-etapa etapa_<?php echo $etapa->TipoEtapa->getId()?>">
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Etapa:</th>
                <td><?php echo $etapa->TipoEtapa->getNombre(); ?></td>
                <th>Número etapa:</th>
                <td class="num-etapa"><?php echo $etapa->TipoEtapa->getId(); ?></td>
            </tr>
            <tr>
                <th>Descripción:</th>
                <td colspan="3"><?php echo $etapa->getDescripcion(); ?></td>
            </tr>
            <tr>
                <th>Observación:</th>
                <td colspan="3"><?php echo $etapa->getObservacion(); ?></td>
            </tr>
            <tr>
                <th>Fecha estimada:</th>
                <td colspan="3"><?php echo $etapa->getFechaFin(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php endforeach; ?>

<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form516/index') ?>">Volver al listado</a>
    </li>
</ul>