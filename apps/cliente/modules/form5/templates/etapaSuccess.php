<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
$medicamento = $form->Medicamento;
?>

<h3>Tramite <?php echo $form->Formulario ?></h3>

<?php foreach($etapas as $etapa): ?>
    <div>
    <table class="tabla-etapa">
        <tbody>
            <tr>
                <td><?php echo $etapa->TipoEtapa->getNombre(); ?></td>
                <td>Descripción: <?php echo $etapa->getDescripcion(); ?></td>
            </tr>
            <tr>
                <td colspan="2">Observacion: <?php echo $etapa->getObservacion(); ?></td>
            </tr>
            <tr>
                <td colspan="2">Fecha estimada: <?php echo $etapa->getFechaFin(); ?></td>
            </tr>
        </tbody>
    </table>
    </div>
    
<?php endforeach; ?>
<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form5/index') ?>">Volver al listado</a>
    </li>
</ul>