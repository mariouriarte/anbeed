<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;

?>

<h2>Tramite <?php echo $form->Formulario ?></h2>

<div class="info-etapa etapa_<?php echo $etapas[0]->TipoEtapa->getId()?>">
    Etapa en <strong><?php echo $etapas[0]->TipoEtapa->getNombre(); ?></strong>
    <p><?php echo $etapas[0]->getDescripcion() ?></p>
</div>

<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Número ruta</th>
                <td><?php echo $form->getNumeroRuta(); ?></td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td><?php echo $form->getFecha(); ?></td>
            </tr>
            <tr>
                <th>Fecha inicio de vigencia</th>
                <td><?php echo $form->getFechaInicioVigencia(); ?></td>
            </tr>
            <tr>
                <th>Empresa</th>
                <td><?php echo $form->Empresa; ?></td>
            </tr>
            <tr>
                <th>Tipo de despacho</th>
                <td><?php echo $form->TipoDespacho; ?></td>
            </tr>
            <tr>
                <th>Otros</th>
                <td><?php echo $form->getOtro(); ?></td>
            </tr>
            <tr>
                <th>Sustancias químicas</th>
                <td><?php echo $form->getSustanciasQuimicas(); ?></td>
            </tr>
            <tr>
                <th>Licencia previa</th>
                <td><?php echo $form->getLicenciaPrevia(); ?></td>
            </tr>
            <tr>
                <th>Licencia resolución</th>
                <td><?php echo $form->getLicenciaResolucion(); ?></td>
            </tr>
            <tr>
                <th>Licencia fecha</th>
                <td><?php echo $form->getLicenciaFecha(); ?></td>
            </tr>
            <tr>
                <th>Número de item</th>
                <td><?php echo $form->getNumeroItem(); ?></td>
            </tr>
            <tr>
                <th>foja</th>
                <td><?php echo $form->getFoja(); ?></td>
            </tr>
            <tr>
                <th>Pais</th>
                <td><?php echo $form->getPais(); ?></td>
            </tr>
            <tr>
                <th>Factura</th>
                <td><?php echo $form->getFactura(); ?></td>
            </tr>
            <tr>
                <th>Fecha de factura</th>
                <td><?php echo $form->getFacturaFecha(); ?></td>
            </tr>
            <tr>
                <th>Por tratarse</th>
                <td><?php echo $form->getPorTratarse(); ?></td>
            </tr>
            <tr>
                <th>Para</th>
                <td><?php echo $form->getPara(); ?></td>
            </tr>
            
        </tbody>
    </table>
</div>

<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form5/index') ?>">Volver al listado</a>
    </li>
    <?php if($etapas[0]->TipoEtapa->getId() == 1): ?>
        <li class="sf_admin_action_list">
            <?php echo link_to('Verificar formulario','form11/index') ?>
        </li>
    <?php endif; ?>
</ul>