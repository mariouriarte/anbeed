<h1>Formulario11s List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Formulario</th>
      <th>Fecha</th>
      <th>Vigencia</th>
      <th>Fecha inicio vigencia</th>
      <th>Empresa</th>
      <th>Tipo despacho</th>
      <th>Otro</th>
      <th>Sustancias quimicas</th>
      <th>Licencia previa</th>
      <th>Licencia resolucion</th>
      <th>Licencia fecha</th>
      <th>Numero item</th>
      <th>Foja</th>
      <th>Pais</th>
      <th>Factura</th>
      <th>Factura fecha</th>
      <th>Para</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($formulario11s as $formulario11): ?>
    <tr>
      <td><a href="<?php echo url_for('form11/edit?id='.$formulario11->getId()) ?>"><?php echo $formulario11->getId() ?></a></td>
      <td><?php echo $formulario11->getFormularioId() ?></td>
      <td><?php echo $formulario11->getFecha() ?></td>
      <td><?php echo $formulario11->getVigencia() ?></td>
      <td><?php echo $formulario11->getFechaInicioVigencia() ?></td>
      <td><?php echo $formulario11->getEmpresaId() ?></td>
      <td><?php echo $formulario11->getTipoDespachoId() ?></td>
      <td><?php echo $formulario11->getOtro() ?></td>
      <td><?php echo $formulario11->getSustanciasQuimicas() ?></td>
      <td><?php echo $formulario11->getLicenciaPrevia() ?></td>
      <td><?php echo $formulario11->getLicenciaResolucion() ?></td>
      <td><?php echo $formulario11->getLicenciaFecha() ?></td>
      <td><?php echo $formulario11->getNumeroItem() ?></td>
      <td><?php echo $formulario11->getFoja() ?></td>
      <td><?php echo $formulario11->getPaisId() ?></td>
      <td><?php echo $formulario11->getFactura() ?></td>
      <td><?php echo $formulario11->getFacturaFecha() ?></td>
      <td><?php echo $formulario11->getPara() ?></td>
      <td><?php echo $formulario11->getCreatedAt() ?></td>
      <td><?php echo $formulario11->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form11/new') ?>">New</a>
