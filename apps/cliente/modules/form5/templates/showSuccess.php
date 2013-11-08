<?php use_stylesheet('sfDoctrinePlugin/css/default.css') ?>


<?php
$etapas = $form->Formulario->Etapa;
$medicamento = $form->Medicamento;
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
                <th>Razón Social</th>
                <td><?php echo $medicamento->Empresa->getRazonSocial(); ?></td>
            </tr>
            <tr>
                <th>R.S.N.</th>
                <td><?php echo $medicamento->Empresa->getNumResolucion(); ?></td>
            </tr>
            <tr>
                <th>Nombre del Titular</th>
                <td><?php echo $medicamento->Empresa->RepresentanteLegal; ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $medicamento->Empresa->getDireccion(); ?></td>
            </tr>
            <tr>
                <th>Farmaceútico acreditado</th>
                <td><?php echo $medicamento->Empresa->RegenteFarmaceutico ?></td>
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
                <td><?php echo $medicamento->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Bajo licencia de</th>
                <td><?php echo $medicamento->LaboratorioFabricante->getBajoLicencia(); ?></td>
            </tr>
            <tr>
                <th>Para</th>
                <td><?php echo $medicamento->LaboratorioFabricante->getPara(); ?></td>
            </tr>
            <tr>
                <th>Pais de Origen</th>
                <td><?php echo $medicamento->LaboratorioFabricante->Pais->getNombre();  ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $medicamento->LaboratorioFabricante->getDireccion(); ?></td>
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
                <td colspan="3"><?php echo $medicamento->getNombreComercial(); ?></td>
            </tr>
            <tr>
                <th>Nombre genérico</th>
                <td colspan="3"><?php echo $medicamento->getNombreGenerico() ?></td>
            </tr>
            <tr>
                <th>Forma Farmaceútica</th>
                <td colspan="3"><?php echo $medicamento->getFormaFarmaceutica(); ?></td>
            </tr>
            <tr>
                <th>Concentración (p.a.)</th>
                <td colspan="3"><?php echo $medicamento->getConcentracion(); ?></td>
            </tr>
            <tr>
                <th>Vía de administración</th>
                <td colspan="3"><?php echo $medicamento->ViaAdministracion; ?></td>
            </tr>
            <tr>
                <th>Acción terapeútica</th>
                <td><?php echo $medicamento->getAccionTerapeutica(); ?></td>
                <th>Tipo de venta</th>
                <td><?php echo $medicamento->TipoVenta; ?></td>
            </tr>
            <tr>
                <th>Conservación</th>
                <td><?php echo $medicamento->getConservacion(); ?></td>
                <th>PeriOdo de validez</th>
                <td><?php echo $medicamento->getPeriodoValidez(); ?></td>
            </tr>
            <tr>
                <th>Especificación del envase</th>
                <td colspan="3"><?php echo $medicamento->getEspecificacionEnvase(); ?></td>
            </tr>
            <tr>
                <th>Envase clínico</th>
                <td colspan="3"><?php echo $medicamento->FormaFarmaceutica; ?></td>
            </tr>
            <tr>
                <th>Aval de la C.F.N.</th>
                <td colspan="3"><?php echo $medicamento->getAval(); ?></td>
            </tr>
            <tr>
                <th>N° de Registro Sanitario</th>
                <td colspan="3"><?php echo $medicamento->getRegistroSanitario(); ?></td>
            </tr>
            <tr>
                <th>N° de Certificado de Control de Calidad</th>
                <td colspan="3"><?php echo $medicamento->getCertificadoControl(); ?></td>
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
            <?php echo link_to('Verificar formulario','form5/index') ?>
        </li>
    <?php endif; ?>
</ul>