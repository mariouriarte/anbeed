<?php $producto = $sf_user->getAttribute('producto2');?>
<h2>II. Datos de la Empresa Solicitante</h2>
<div>
    <table class="tabla-info-empresa">
        <tbody>
            <tr>
                <th>Razón Social</th>
                <td><?php echo $producto->Empresa->getRazonSocial(); ?></td>
            </tr>
            <tr>
                <th>R.S.N.</th>
                <td><?php echo $producto->Empresa->getNumResolucion(); ?></td>
            </tr>
            <tr>
                <th>Nombre del Titular</th>
                <td><?php echo $producto->Empresa->RepresentanteLegal; ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $producto->Empresa->getDireccion(); ?></td>
            </tr>
            <tr>
                <th>Farmaceútico acreditado</th>
                <td><?php echo $producto->Empresa->RegenteFarmaceutico ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>III. Datos del Laboratorio Fabricante</h2>
<div>
    <table class="tabla-info-empresa">
        <tbody>
            <tr>
                <th>Laboratorio fabricante</th>
                <td><?php echo $producto->LaboratorioFabricante; ?></td>
            </tr>
            <tr>
                <th>Bajo licencia de</th>
                <td><?php echo $producto->LaboratorioFabricante->getBajoLicencia(); ?></td>
            </tr>
            <tr>
                <th>Para</th>
                <td><?php echo $producto->LaboratorioFabricante->getPara(); ?></td>
            </tr>
            <tr>
                <th>Pais de Origen</th>
                <td><?php echo $producto->LaboratorioFabricante->Pais;  ?></td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td><?php echo $producto->LaboratorioFabricante->getDireccion(); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<h2>IV. Datos del Producto</h2>
<div>
    <table class="tabla-info-empresa">
        <tbody>
            <tr>
                <th colspan="2">Nombre comercial</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]; ?></td>
            </tr>
            <tr>
                <th colspan="2">Nombre genérico</th>
                <td colspan="2"><?php echo $producto ?></td>
            </tr>
            <tr>
                <th colspan="2">Forma Farmaceútica</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->getFormaFarmaceutica(); ?></td>
            </tr>
            <tr>
                <th colspan="2">Concentración (p.a.)</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->getConcentracion(); ?></td>
            </tr>
            <tr>
                <th colspan="2">Vía de administración</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->ViaAdministracion; ?></td>
            </tr>
            <tr>
                <th>Acción terapeútica</th>
                <td><?php echo $producto->Medicamento[0]->getAccionTerapeutica(); ?></td>
                <th>Tipo de venta</th>
                <td><?php echo $producto->Medicamento[0]->TipoVenta; ?></td>
            </tr>
            <tr>
                <th>Conservación</th>
                <td><?php echo $producto->Medicamento[0]->getConservacion(); ?></td>
                <th>Periódo de validez</th>
                <td></td>
            </tr>
            <tr>
                <th colspan="2">Especificación del envase</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->getEspecificacionEnvase(); ?></td>
            </tr>
            <tr>
                <th colspan="2">Envase clínico</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->FormaFarmaceutica; ?></td>
            </tr>
            <tr>
                <th colspan="2">Aval de la C.F.N.</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->getAval(); ?></td>
            </tr>
            <tr>
                <th colspan="2">N° de Registro Sanitario</th>
                <td colspan="2"><?php echo $producto->getRegistroSanitario(); ?></td>
            </tr>
            <tr>
                <th colspan="2">N° de Certificado de Control de Calidad</th>
                <td colspan="2"><?php echo $producto->Medicamento[0]->getCertificadoControl(); ?></td>
            </tr>
        </tbody>
    </table>
</div>