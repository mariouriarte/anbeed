<?php $reactivo = $sf_user->getAttribute('reactivo3');?>
<h2>II. Datos de la Empresa Solicitante</h2>
<div>
    <table class="tablas_form">
        <tbody>
            <tr>
                <th>Nombre del Titular</th>
                <td colspan="3"><?php echo $reactivo->Empresa->RepresentanteLegal; ?></td>
            </tr>
            <tr>
                <th>Razón Social</th>
                <td colspan="3"><?php echo $reactivo->Empresa->getRazonSocial(); ?></td>
            </tr>
            <tr>
                <th>R.S.N.</th>
                <td><?php echo $reactivo->Empresa->getNumResolucion(); ?></td>
                <th>Fecha</th>
                <td><?php echo $reactivo->Empresa->getFechaResolucion(); ?></td>
            </tr>
            <tr>
                <th>Profesional acreditado</th>
                <td><?php echo $reactivo->Empresa->RegenteFarmaceutico ?></td>
                <th>N° de Matricula</th>
                <td><?php echo $reactivo->Empresa->getFundempresa(); ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $reactivo->Empresa->getDireccion(); ?></td>
                <th>Teléfono</th>
                <td><?php echo $reactivo->Empresa->getTelefono1(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>III. Datos del Laboratorio Fabricante</h2>
<div>
    <table class="tablas_form">
        <tbody>
            <tr>
                <th>Laboratorio fabricante</th>
                <td><?php echo $reactivo->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Licencia de</th>
                <td><?php echo $reactivo->LaboratorioFabricante->getBajoLicencia(); ?></td>
            </tr>
            <tr>
                <th>Pais de Origen</th>
                <td><?php echo $reactivo->LaboratorioFabricante->Pais;  ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $reactivo->LaboratorioFabricante->getDireccion(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>IV. Datos del Producto</h2>
<div>
    <table class="tablas_form">
        <tbody>
            <tr>
                <th>Nombre comercial</th>
                <td colspan="3"><?php echo $reactivo->getNombreComercial(); ?></td>
            </tr>
            <tr>
                <th>Catálogo o referencia</th>
                <td colspan="3"><?php echo $reactivo->getCatalogo(); ?></td>
            </tr>
            <tr>
                <th>Uso o aplicación</th>
                <td colspan="3"><?php echo $reactivo->getUso(); ?></td>
            </tr>
            <tr>
                <th>Presentación</th>
                <td colspan="3"><?php echo $reactivo->getPresentacion(); ?></td>
            </tr>
            <tr>
                <th>Conservación</th>
                <td><?php echo $reactivo->getConservacion(); ?></td>
                <th>Período de Validez</th>
                <td><?php echo $reactivo->getPeriodoValidez(); ?></td>
            </tr>
            <tr>
                <th>COMPONENTES</th>
                <td colspan="3"><?php echo $reactivo->getComponente(); ?></td>
            </tr>
        </tbody>
    </table>
</div>