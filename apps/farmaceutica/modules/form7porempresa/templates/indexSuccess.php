<h1>Formulario7s List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Formulario</th>
      <th>Fecha</th>
      <th>Vigencia</th>
      <th>Fecha inicio vigencia</th>
      <th>Referencia aval</th>
      <th>Producto</th>
      <th>Forma farmaceutica</th>
      <th>Concentracion</th>
      <th>Tipo calificacion</th>
      <th>Via administracion</th>
      <th>Accion terapeutica</th>
      <th>Dosis</th>
      <th>Indicaciones</th>
      <th>Contraindicaciones</th>
      <th>Precauciones</th>
      <th>Efectos secundarios</th>
      <th>Observaciones</th>
      <th>Comision</th>
      <th>Calificacion</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Created by</th>
      <th>Updated by</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($formulario7s as $formulario7): ?>
    <tr>
      <td><a href="<?php echo url_for('form7porempresa/edit?id='.$formulario7->getId()) ?>"><?php echo $formulario7->getId() ?></a></td>
      <td><?php echo $formulario7->getFormularioId() ?></td>
      <td><?php echo $formulario7->getFecha() ?></td>
      <td><?php echo $formulario7->getVigencia() ?></td>
      <td><?php echo $formulario7->getFechaInicioVigencia() ?></td>
      <td><?php echo $formulario7->getReferenciaAval() ?></td>
      <td><?php echo $formulario7->getProductoId() ?></td>
      <td><?php echo $formulario7->getFormaFarmaceuticaId() ?></td>
      <td><?php echo $formulario7->getConcentracion() ?></td>
      <td><?php echo $formulario7->getTipoCalificacionId() ?></td>
      <td><?php echo $formulario7->getViaAdministracionId() ?></td>
      <td><?php echo $formulario7->getAccionTerapeutica() ?></td>
      <td><?php echo $formulario7->getDosis() ?></td>
      <td><?php echo $formulario7->getIndicaciones() ?></td>
      <td><?php echo $formulario7->getContraindicaciones() ?></td>
      <td><?php echo $formulario7->getPrecauciones() ?></td>
      <td><?php echo $formulario7->getEfectosSecundarios() ?></td>
      <td><?php echo $formulario7->getObservaciones() ?></td>
      <td><?php echo $formulario7->getComision() ?></td>
      <td><?php echo $formulario7->getCalificacion() ?></td>
      <td><?php echo $formulario7->getCreatedAt() ?></td>
      <td><?php echo $formulario7->getUpdatedAt() ?></td>
      <td><?php echo $formulario7->getCreatedBy() ?></td>
      <td><?php echo $formulario7->getUpdatedBy() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('form7porempresa/new') ?>">New</a>
