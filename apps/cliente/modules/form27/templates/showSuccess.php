<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
$dispositivo = $form->DispositivoMedico;
?>

<h2>Tramite <?php echo $form->Formulario ?></h2>

<div class="info-etapa etapa_<?php echo $etapas[0]->TipoEtapa->getId()?>">
    Etapa en <strong><?php echo $etapas[0]->TipoEtapa->getNombre(); ?></strong>
    <p><?php echo $etapas[0]->getDescripcion() ?></p>
</div>


<h2>II. Datos de la Empresa Solicitante</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Nombre del Titular</th>
                <td colspan="3"><?php echo $dispositivo->Empresa->RepresentanteLegal; ?></td>
            </tr>
            <tr>
                <th>Razón Social</th>
                <td colspan="3"><?php echo $dispositivo->Empresa->getRazonSocial(); ?></td>
            </tr>
            <tr>
                <th>R.S.N.</th>
                <td><?php echo $dispositivo->Empresa->getNumResolucion(); ?></td>
                <th>Fecha</th>
                <td><?php echo $dispositivo->Empresa->getFechaResolucion(); ?></td>
            </tr>
            <tr>
                <th>Profesional acreditado</th>
                <td><?php echo $dispositivo->Empresa->RegenteFarmaceutico ?></td>
                <th>N° de Matricula</th>
                <td><?php echo $dispositivo->Empresa->getFundempresa(); ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $dispositivo->Empresa->getDireccion(); ?></td>
                <th>Teléfono</th>
                <td><?php echo $dispositivo->Empresa->getTelefono1(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>III. Datos del Laboratorio Fabricante</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Laboratorio fabricante</th>
                <td><?php echo $dispositivo->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Licencia de</th>
                <td><?php echo $dispositivo->LaboratorioFabricante->getBajoLicencia(); ?></td>
            </tr>
            <tr>
                <th>Pais de Origen</th>
                <td><?php echo $dispositivo->LaboratorioFabricante->Pais->getNombre();  ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $dispositivo->LaboratorioFabricante->getDireccion(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>IV. Datos del Producto</h2>
<div>
    <table class="tabla-cliente">
        <tbody>
            <tr>
                <th>Nombre comercial</th>
                <td colspan="3"><?php echo $dispositivo->getNombreComercial(); ?></td>
            </tr>
            <tr>
                <th>Nombre genérico</th>
                <td colspan="3"><?php echo $dispositivo->getNombreGenerico() ?></td>
            </tr>
            <tr>
                <th>Clasificación de acuerdo al Riesgo</th>
                <td colspan="3"><?php echo $dispositivo->getClasificacionRiesgo(); ?></td>
            </tr>
            <tr>
                <th>Codigo Internacional</th>
                <td colspan="3"><?php echo $dispositivo->getCodigoInternacional(); ?></td>
            </tr>
            <tr>
                <th>El dispositivo incluye Manual de instalacion</th>
                <td colspan="3"><?php echo $dispositivo->getManual(); ?></td>
            </tr>
            <tr>
                <th>Indicaciones o uso</th>
                <td colspan="3"><?php echo $dispositivo->getIndicaciones(); ?></td>
            </tr>
            <tr>
                <th>Presentación</th>
                <td colspan="3"><?php echo $dispositivo->getPresentacion(); ?></td>
            </tr>
            <tr>
                <th>Condiciones de almacenamiento y empaque</th>
                <td><?php echo $dispositivo->getCondicionEmpaque(); ?></td>
                <th>Vida útil</th>
                <td><?php echo $dispositivo->getVidaUtil(); ?></td>
            </tr>
            <tr>
                <th>Método de desecho o disposición final del producto</th>
                <td colspan="3"><?php echo $dispositivo->getMetodoDesecho(); ?></td>
            </tr>
            <tr>
                <th>N° de Registro Sanitario</th>
                <td colspan="3"><?php echo $dispositivo->getRegistroSanitario(); ?></td>
            </tr>
        </tbody>
    </table>
</div>


<ul class="sf_admin_actions">
    <li class="sf_admin_action_list">
        <a href="<?php echo url_for('form27/index') ?>">Volver al listado</a>
    </li>
    <?php if($etapas[0]->TipoEtapa->getId() == 1): ?>
        <li class="sf_admin_action_list">
            <?php echo link_to('Verificar formulario','form5/index') ?>
        </li>
    <?php endif; ?>
</ul>