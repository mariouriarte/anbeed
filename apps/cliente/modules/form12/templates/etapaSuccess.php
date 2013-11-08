<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;

?>

<h3>Tramite <?php echo $form->Formulario ?></h3>

<?php foreach($etapas as $i => $etapa): ?>
<div class="panel-etapa">
    <div class="info-etapa etapa_<?php echo $etapa->TipoEtapa->getId()?>">
        Etapa en <strong><?php echo $etapa->TipoEtapa->getNombre(); ?></strong>
    </div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Fecha estimada:</th>
                <td><?php echo $etapa->getFechaFin(); ?></td>
            </tr>
            <tr>
                <th>Descripción:</th>
                <td colspan="3"><?php echo $etapa->getDescripcion(); ?></td>
            </tr>
            <tr>
                <th>Observación:</th>
                <td colspan="3"><?php echo $etapa->getObservacion(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php endforeach; ?>

<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form12/index') ?>">Volver al listado</a>
    </li>
</ul>